<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
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
        $data = array(
            'title' => 'Trips',
            'trips' => ['Maharashtra', 'Gujrat', 'Goa']
        );
        return view('pages.trips')->with($data);
    }
    public function fun()
    {
        return view('pages.fun');
    }
}
