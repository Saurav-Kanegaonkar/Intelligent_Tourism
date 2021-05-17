<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\Activity;
use PhpParser\Node\Expr\New_;
use DB;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function index()
    {
        $title = "Welcome to Laravel";
        return view('pages.index')->with('title',$title);
    }
    public function about()
    {
        $title = "Welcome to About Page";
        return view('pages.about')->with('title',$title);
    }
    public function trips()
    {
        return view('pages.trips');
    }
    public function trips_submit(Request $request)
    {
        $getPlaceDetail ="select * from place where city = "."'".$request->city."'"." and place_id in (select place_id from place_activity where activity_id in (select activity_id from activity where activities in ( ";
        $getPlaceName ="select name from place where city = "."'".$request->city."'"." and place_id in (select place_id from place_activity where activity_id in (select activity_id from activity where activities in ( ";
        $getAvgLatitude ="select avg(latitude) as La from place where city = "."'".$request->city."'"." and place_id in (select place_id from place_activity where activity_id in (select activity_id from activity where activities in ( ";
        $getAvgLongitude ="select avg(longitude) as Lo from place where city = "."'".$request->city."'"." and place_id in (select place_id from place_activity where activity_id in (select activity_id from activity where activities in ( ";
        $getDays ="select * from day_place where place_id = ";
        $b = "select activities from activity where activity_id in (select activity_id from place_activity where place_id = (select place_id from place where name = ";
        for($i =0;$i<count($request->activity);$i++)
        {
            if($i == count($request->activity)-1)
            {
                $getPlaceName .= "'".$request->activity[$i]."' ) ) )";
                $getPlaceDetail .= "'".$request->activity[$i]."' ) ) )";
                $getAvgLatitude .= "'".$request->activity[$i]."' ) ) )";
                $getAvgLongitude .= "'".$request->activity[$i]."' ) ) )";
            }
            else
            {
                $getPlaceName .= "'".$request->activity[$i]."' , ";
                $getAvgLongitude .= "'".$request->activity[$i]."' , ";
                $getAvgLatitude .= "'".$request->activity[$i]."' , ";
                $getPlaceDetail .= "'".$request->activity[$i]."' , ";
            }
        }
        $avg_latitude = DB::select($getAvgLatitude);
        $avg_latitude = $avg_latitude[0]->La;
        $avg_longitude = DB::select($getAvgLongitude);
        $avg_longitude = $avg_longitude[0]->Lo;
        $place_detail = DB::select($getPlaceDetail);
        $places = DB::select($getPlaceName);
        $activitiyOfEachPlace =[];
        
        foreach($places as $place)
        {
            $c = $b."'".$place->name."' ) )";
            // echo $place->name;
            // echo $c;
            $wow = DB::select($c);
            $e =[];
            foreach($wow as $act)
            {
                array_push($e,$act->activities);
            }
            array_push($activitiyOfEachPlace,$e);
        }
        $Days=[];
        $da=date('N');
        $time=localtime();
        if($time[1]>9)
            $time=$time[2].$time[1];
        else
            $time=$time[2]."0".$time[1];
        foreach($place_detail as $place)
        {
            $c= $getDays.$place->place_id;
            $wow = DB::select($c);
            array_push($Days,$wow);
        }
        $OpenClose =[];
        foreach($Days as $Day)
        {
            foreach($Day as $day)
            {
                if($day->day_id == $da)
                {
                    if($time > $day->from_hours.$day->from_minutes && $time< $day->to_hours.$day->to_minutes)
                    {
                        array_push($OpenClose,1);
                    }
                    else
                    {
                        array_push($OpenClose,0);
                    }
                }
            }
        }
        return view('maps.result', compact('activitiyOfEachPlace','place_detail','avg_latitude','avg_longitude','Days','OpenClose'));
    }

    public function place_info($place)
    {
        $getDays ="select * from day_place where place_id = ".$place;
        $Days=DB::select($getDays);
        $getPlaceDetail ="select * from place where place_id =".$place;
        $place_detail = DB::select($getPlaceDetail);
        $getActivities = "select activities from activity where activity_id in (select activity_id from place_activity where place_id =".$place.")";
        $activities_obj = DB::select($getActivities);
        $activities =[];
        foreach($activities_obj as $act)
        {
            array_push($activities,$act->activities);
        }
        $Vars=['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
        // return ($Days);
        $da=date('N');
        $time=localtime();
        if($time[1]>9)
            $time=$time[2].$time[1];
        else
            $time=$time[2]."0".$time[1];
        
        foreach($Days as $day)
        {
            if($day->day_id == $da)
            {
                if($time > $day->from_hours.$day->from_minutes && $time< $day->to_hours.$day->to_minutes)
                {
                    $open=1;
                    $close=$day->to_hours.":".$day->to_minutes;
                }
                else
                {
                    $open=0;
                    $close=$day->to_hours.":".$day->to_minutes;
                }
            }
        }
        return view('maps.place', compact('place_detail','activities','Days','Vars','open','close'));
    }

    public function places_submit(Request $request)
    {
        $getLatitudes="select latitude from place where place_id in ( ";
        $getLongitudes="select longitude from place where place_id in ( ";
        $getPlaces = "select place_id, name, description, address from place where place_id in ( ";
        for($i =0;$i<count($request->checkbox);$i++)
        {
            if($i == count($request->checkbox)-1)
            {
                $getLatitudes .= $request->checkbox[$i]." )";
                $getLongitudes .= $request->checkbox[$i]." )";
                $getPlaces .= $request->checkbox[$i]." )";
            }
            else
            {
                $getLatitudes .= $request->checkbox[$i]." , ";
                $getLongitudes .= $request->checkbox[$i]." , ";
                $getPlaces .= $request->checkbox[$i]." , ";
            }
        }
        $lat= DB::select($getLatitudes);
        $long= DB::select($getLongitudes);
        $allPlaces = DB::select($getPlaces);
        
        // $str1="https://api.distancematrix.ai/maps/api/geocode/json?address=";
        // $address=$request->checkbox;
        // for($j=0; $j<count($address); $j++){
        //     for ($i=0; $i < strlen($address[$j]); $i++) { 
        //         if($address[$j][$i]==' ')
        //         {
        //             $address[$j][$i]='+';
        //         }
        //     }
        // }
        // foreach ($address as $a) {
        //     $str = $str1.$a."&key=".env('DISTANCE_MATRIX_API_KEY');
        //     echo $str."<br>";
        // }
        // return ($latitudes);

        
        $latitudes=[];
        $longitudes=[];
        foreach($lat as $l)
        {
            $latitudes[]=$l->latitude;
        }
        foreach($long as $l)
        {
            $longitudes[]=$l->longitude;
        }
        $add=$request->address;
        $add1=$request->address;
        for($i=0;$i<strlen($add);$i++)
        {
            if($add[$i]==" ")
            {
                $add[$i]="+";
            }
        }
        // echo env('DISTANCE_MATRIX_API_KEY');
        $str="https://api.distancematrix.ai/maps/api/geocode/json?address=".$add."&key=".env('DISTANCE_MATRIX_API_KEY');
        $geocodeFrom = file_get_contents($str);
        $addr = json_decode($geocodeFrom);
        $la=$addr->result[0]->geometry->location->lat;
        $long=$addr->result[0]->geometry->location->lng;
        array_unshift($latitudes,$la);
        array_unshift($longitudes,$long);
        // $getJagah="select latitude, longitude from place where name= '".$request->start_point."'";
        // $getp ="select place_id, name, description, address from place where name= '".$request->start_point."'";
        // $getP= DB::select($getp);
        // $jagah = DB::select($getJagah);
        // $latitudes=[];
        // $longitudes=[];
        // $allPlaces=[];
        // $allPlaces[]=$getP[0];
        // $latitudes[]=$jagah[0]->latitude;
        // $longitudes[]=$jagah[0]->longitude;
        // foreach($allPlace as $p)
        // {   
        //     if(!in_array($p, $allPlaces))
        //     {
        //         $allPlaces[]=$p;
        //     }
        // }
        // foreach($latitud as $l)
        // {
        //     if(!in_array($l, $latitudes))
        //     {
        //         $latitudes[]=$l;
        //     }
        // }
        // foreach($longitud as $l)
        // {
        //     if(!in_array($l, $longitudes))
        //     {
        //         $longitudes[]=$l;
        //     }
        // }
        $object = (object) ['place_id' => 0, 'name' => 'Your Address','description' => '', 'address' =>$add1];
        // var_dump($object);
        array_unshift($allPlaces,$object);
        // return($allPlaces);
        return view('maps.result2', compact('latitudes','longitudes','allPlaces','add1'));
    }

    public function ready_trips()
    {
        return view('pages.readytrips');
    }

    public function trip1()
    {
        $getLatitudes="select latitude from place where place_id in (1,6,8,9,10)";
        $getLongitudes="select longitude from place where place_id in (1,6,8,9,10)";
        $getPlaces = "select place_id, name, description, address from place where place_id in (1,6,8,9,10)";
        $lat= DB::select($getLatitudes);
        $long= DB::select($getLongitudes);
        $allPlaces = DB::select($getPlaces);
        $latitudes=[];
        $longitudes=[];
        foreach($lat as $l)
        {
            $latitudes[]=$l->latitude;
        }
        foreach($long as $l)
        {
            $longitudes[]=$l->longitude;
        }
        // return($allPlaces);
        return view('maps.result3', compact('latitudes','longitudes','allPlaces'));
    }

    public function trip2()
    {
        $getLatitudes="select latitude from place where place_id in (4,11,12,13)";
        $getLongitudes="select longitude from place where place_id in (4,11,12,13)";
        $getPlaces = "select place_id, name, description, address from place where place_id in (4,11,12,13)";
        $lat= DB::select($getLatitudes);
        $long= DB::select($getLongitudes);
        $allPlaces = DB::select($getPlaces);
        $latitudes=[];
        $longitudes=[];
        foreach($lat as $l)
        {
            $latitudes[]=$l->latitude;
        }
        foreach($long as $l)
        {
            $longitudes[]=$l->longitude;
        }
        // return($allPlaces);
        return view('maps.result3', compact('latitudes','longitudes','allPlaces'));
    }

    public function trip3()
    {
        $getLatitudes="select latitude from place where place_id in (3,10,18,19)";
        $getLongitudes="select longitude from place where place_id in (3,10,18,19)";
        $getPlaces = "select place_id, name, description, address from place where place_id in (3,10,18,19)";
        $lat= DB::select($getLatitudes);
        $long= DB::select($getLongitudes);
        $allPlaces = DB::select($getPlaces);
        $latitudes=[];
        $longitudes=[];
        foreach($lat as $l)
        {
            $latitudes[]=$l->latitude;
        }
        foreach($long as $l)
        {
            $longitudes[]=$l->longitude;
        }
        // return($allPlaces);
        return view('maps.result3', compact('latitudes','longitudes','allPlaces'));
    }

    public function trip4()
    {
        $getLatitudes="select latitude from place where place_id in (17,16,15,14)";
        $getLongitudes="select longitude from place where place_id in (17,16,15,14)";
        $getPlaces = "select place_id, name, description, address from place where place_id in (17,16,15,14)";
        $lat= DB::select($getLatitudes);
        $long= DB::select($getLongitudes);
        $allPlaces = DB::select($getPlaces);
        $latitudes=[];
        $longitudes=[];
        foreach($lat as $l)
        {
            $latitudes[]=$l->latitude;
        }
        foreach($long as $l)
        {
            $longitudes[]=$l->longitude;
        }
        // return($allPlaces);
        return view('maps.result3', compact('latitudes','longitudes','allPlaces'));
    }

    public function fun()
    {
        return view('pages.fun');
    }

    public function Places()
    {
        return view('pages.Places');
    }
}

