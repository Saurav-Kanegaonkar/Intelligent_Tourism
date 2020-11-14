@extends('layouts.main')
@section('content')
<?php
class TspLocation
{
	public $latitude;
	public $longitude;
	public $id;

	public function __construct($latitude, $longitude, $id = null)
	{
		$this->latitude = $latitude;
		$this->longitude = $longitude;
		$this->id = $id;
	}

	public static function getInstance($location)
	{
		$location = (array) $location;
		if (empty($location['latitude']) || empty($location['longitude']))
		{
			throw new RuntimeException('TspLocation::getInstance could not load location');
		}

		// Instantiate the TspLocation.
		$id = isset($location['id']) ? $location['id'] : null;
		$tspLocation = new TspLocation($location['latitude'], $location['longitude'], $id);

		return $tspLocation;
	}

	public static function distance($lat1, $lon1, $lat2, $lon2, $unit = 'M')
	{
		// if ($lat1 == $lat2 && $lon1 == $lon2) return 0;

		// $theta = $lon1 - $lon2; 
		// $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)); 
		// $dist = acos($dist); 
		// $dist = rad2deg($dist); 
		// $miles = $dist * 60 * 1.1515;
		// $unit = strtoupper($unit);

		// if ($unit == "K")
		// 	return ($miles * 1.609344); 
		// else if ($unit == "N")
		// 	return ($miles * 0.8684);
		// else
		// 	return $miles;

		$str="https://api.distancematrix.ai/maps/api/distancematrix/json?origins=".$lat1.",".$lon1."&destinations=".$lat2.",".$lon2."&departure_time=now&key=xHhaXS89ZEwV9qAwgAjSucGzmNLnf";
		$geocodeFrom = file_get_contents($str);
		$dist = json_decode($geocodeFrom);
		$dist1= $dist->rows[0]->elements[0]->distance->value;
		// echo "destination_addresses: ".$dist->destination_addresses[0]."<br>origin_addresses: ".$dist->origin_addresses[0]."<br>dist ".$dist1."<br>";
		return $dist1;
		
	}
}

class TspNode
{

	public $path = array();
	public $reducedMatrix = array();
	public $cost;
	public $vertex;
	public $level;

	/**
	 * Constructor
	 *
	 * @param   array    $parentMatrix   The parentMatrix of the costMatrix.
	 * @param   array    $path           An array of integers for the path.
	 * @param   integer  $level          The level of the node.
	 * @param   integer  $i, $j          They are corresponds to visiting city j from city i
	 *
	 */
	public function __construct($parentMatrix, $path, $level, $i, $j)
	{
		// stores ancestors edges of state space tree
		$this->path = $path;

		// skip for root node
		if ($level != 0)
			// add current edge to path
			$this->path[] = array($i, $j);

		// copy data from parent node to current node
		$this->reducedMatrix = $parentMatrix;

		// Change all entries of row i and column j to infinity
		// skip for root node
		for ($k = 0; $level != 0 && $k < count($parentMatrix); $k++)
		{
			// set outgoing edges for city i to infinity
			$this->reducedMatrix[$i][$k] = INF;
			// set incoming edges to city j to infinity
			$this->reducedMatrix[$k][$j] = INF;
		}

		// Set (j, 0) to infinity 
		// here start node is 0
		$this->reducedMatrix[$j][0] = INF;

		$this->level = $level;
		$this->vertex = $j;
	}
}

class PqTsp extends SplPriorityQueue
{
	public function compare($lhs, $rhs) {
		if ($lhs === $rhs) return 0;
		return ($lhs < $rhs) ? 1 : -1;
	}
}

class TspBranchBound
{
	protected $n = 0;
	protected $locations = array();
	protected $costMatrix = array();

	/**
	 * @var    array  TspBranchBound instances container.
	 */
	protected static $instances = array();

	/**
	 * Constructor
	 */
	public function __construct($costMatrix = array())
	{
		if ($costMatrix) {
			$this->costMatrix = $costMatrix;
			$this->n = count($this->costMatrix);
		}
	}

	/**
	 * Method to get an instance of a TspBranchBound.
	 *
	 * @param   string  $name     The name of the TspBranchBound.
	 * @param   array   $locations  An array of locations.
	 *
	 * @return  object  TspBranchBound instance.
	 *
	 * @throws  Exception if an error occurs.
	 */
	public static function getInstance($name = 'TspBranchBound', $locations = null)
	{
		// Reference to array with instances
		$instances = &self::$instances;

		// Only instantiate if it does not already exist.
		if (!isset($instances[$name]))
		{
			// Instantiate the TspBranchBound.
			$instances[$name] = new TspBranchBound();
		}

		$instances[$name]->locations = array();
		$instances[$name]->costMatrix = array();

		// Load the data.
		if ($locations)
		{
			if ($instances[$name]->load($locations) == false)
			{
				throw new RuntimeException('TspBranchBound::getInstance could not load locations');
			}
		}

		return $instances[$name];
	}

	public function load($locations)
	{
		if (empty($locations))
			return false;

		foreach ($locations as $location)
		{
			if (empty($location))
				return false;

			if ($this->addLocation($location) == false)
				return false;
		}

		return $this->loadMatrix();
	}

	public function loadMatrix()
	{
		if (empty($this->locations))
			return false;

		$this->costMatrix = array();
		$n_locations = count($this->locations);
		// $time4= time();
		for ($i = 0; $i < $n_locations; $i++)
		{
			// echo $i+1 . ". " . $this->locations[$i]->id . "\n";
			for ($j = $i; $j < $n_locations; $j++)
			{
				$distance = INF;
				if ($i!=$j)
				{
					$loc1 = $this->locations[$i];
					$loc2 = $this->locations[$j];
					$distance = TspLocation::distance($loc1->latitude, $loc1->longitude, $loc2->latitude, $loc2->longitude);
				}
				$this->costMatrix[$i][$j] = $distance;
				$this->costMatrix[$j][$i] = $distance;

			}
		}
		// $time5= time();
		// echo "time diff 3: ".($time5-$time4);
		// echo "<br>";
		$this->n = count($this->costMatrix);

		return true;
	}

	public function addLocation($location)
	{
		try
		{
			$location = TspLocation::getInstance($location);
		}
		catch (Exception $e)
		{
			return false;
		}

		$this->locations[] = $location;

		return true;
	}

	protected function rowReduction(&$reducedMatrix, &$row)
	{
		// initialize row array to INF 
		$row = array_fill(0, $this->n, INF);

		// row[i] contains minimum in row i
		for ($i = 0; $i < $this->n; $i++)
			for ($j = 0; $j < $this->n; $j++)
				if ($reducedMatrix[$i][$j] < $row[$i])
					$row[$i] = $reducedMatrix[$i][$j];

		// reduce the minimum value from each element in each row.
		for ($i = 0; $i < $this->n; $i++)
			for ($j = 0; $j < $this->n; $j++)
				if ($reducedMatrix[$i][$j] !== INF && $row[$i] !== INF)
					$reducedMatrix[$i][$j] -= $row[$i];
	}

	protected function columnReduction(&$reducedMatrix, &$col)
	{
		// initialize row array to INF 
		$col = array_fill(0, $this->n, INF);

		// col[i] contains minimum in row i
		for ($i = 0; $i < $this->n; $i++)
			for ($j = 0; $j < $this->n; $j++)
				if ($reducedMatrix[$i][$j] < $col[$j])
					$col[$j] = $reducedMatrix[$i][$j];

		// reduce the minimum value from each element in each row.
		for ($i = 0; $i < $this->n; $i++)
			for ($j = 0; $j < $this->n; $j++)
				if ($reducedMatrix[$i][$j] !== INF && $col[$j] !== INF)
					$reducedMatrix[$i][$j] -= $col[$j];
	}

	protected function calculateCost(&$reducedMatrix)
	{
		// initialize cost to 0
		$cost = 0;

		// Row Reduction
		$row = array();
		$this->rowReduction($reducedMatrix, $row);

		// Column Reduction
		$col = array();
		$this->columnReduction($reducedMatrix, $col);

		// the total expected cost 
		// is the sum of all reductions
		for ($i = 0; $i < $this->n; $i++) {
			$cost += ($row[$i] !== INF) ? $row[$i] : 0;
			$cost += ($col[$i] !== INF) ? $col[$i] : 0;
		}

		return $cost;
	}

	public function printPath($list)
	{	
		// echo "<br> \nPath: <br>";
		// for ($i = 0; $i < count($list); $i++) {
		// 	$start = $list[$i][0] + 1;
		// 	$end = $list[$i][1] + 1;
		// 	echo $start . " -> " . $end . "<br>";
		// }
	}

	public function solve()
	{
		if (empty($this->costMatrix))
		{
			if (!$this->loadMatrix())
				return false;
		}

		$costMatrix = $this->costMatrix;
		// Create a priority queue to store live nodes of
		// search tree;
		$pq = new PqTsp();

		// create a root node and calculate its cost
		// The TSP starts from first city i.e. node 0
		$root = new TspNode($costMatrix, null, 0, -1, 0);
		// get the lower bound of the path starting at node 0
		$root->cost = $this->calculateCost($root->reducedMatrix);

		// Add root to list of live nodes;
		$pq->insert($root, $root->cost);

		// Finds a live node with least cost,
		// add its children to list of live nodes and
		// finally deletes it from the list.
		while($pq->valid())
		{
			// Find a live node with least estimated cost
			$min = $pq->extract();

			// Clear the max estimated nodes
			$pq = new PqTsp();

			// i stores current city number
			$i = $min->vertex;

			// if all cities are visited
			if ($min->level == $this->n - 1)
			{
				// return to starting city
				$min->path[] = array($i, 0);
				// print list of cities visited;
				$this->printPath($min->path);
				// return optimal cost & etc.
				return array ('cost' => $min->cost, 'path' => $min->path, 'locations' => $this->locations);
			}

			// do for each child of min
			// (i, j) forms an edge in space tree
			for ($j = 0; $j < $this->n; $j++)
			{
				if ($min->reducedMatrix[$i][$j] !== INF)
				{
					// create a child node and calculate its cost
					$child = new TspNode($min->reducedMatrix, $min->path, $min->level+1, $i, $j);

					/* Cost of the child = 
						cost of parent node + 
						cost of the edge(i, j) +
						lower bound of the path starting at node j
					*/
					$child->cost = $min->cost + $min->reducedMatrix[$i][$j] + $this->calculateCost($child->reducedMatrix);

					// Add child to list of live nodes
					$pq->insert($child, $child->cost);
				}
			}

			// free node as we have already stored edges (i, j) in vector
			// So no need for parent node while printing solution.
			$min = null;
		}
	}
}
?>
<?php
try
{
	$tsp = TspBranchBound::getInstance();
	
	$i=0;
	// $time1 = time();
	
	for($j=0;$j<count($latitudes);$j++) 
	{
		$tsp->addLocation(array('id'=>$i, 'latitude'=> $latitudes[$i], 'longitude'=> $longitudes[$i]));
		$i++;
	}
	
	$ans = $tsp->solve();
	// $time3 = time();
	// echo "time diff 2: ".($time3-$time1);
	// echo "<br>";
	//echo "\nTotal cost: " . ceil($ans['cost']) . "\n\n";
	
	$ids=[];
	for($k=0;$k<count($ans['path']);$k++) 
	{
		$ids[]=$latitudes[$ans['path'][$k][0]];
		$ids[]=$longitudes[$ans['path'][$k][0]];
		if($k == count($ans['path'])-1)
		{
			$ids[]=$latitudes[$ans['path'][$k][1]];
			$ids[]=$longitudes[$ans['path'][$k][1]];
		}
	}
	$act_path=[];
	for ($i = 0; $i < count($ans["path"]); $i++) {
		$act_path[]= $ans["path"][$i][0];
	}
}
catch (Exception $e)
{
	echo $e;
	exit;
}
?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js"></script>
        <script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-map.js?key=Ry3pRty0H7reDbXBApz4QthSBpdV5tLr"></script>
        <script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-routing.js?key=Ry3pRty0H7reDbXBApz4QthSBpdV5tLr"></script>

		<link rel='stylesheet' href='{{ asset('assets/css/timeline.css') }}' type='text/css' />
		<script type="text/javascript">
			var places = @json($ids);
			var id=[];
			for(i=0;i<places.length;i+=2)
			{
				var x = {lat:parseFloat(places[i]), lng:parseFloat(places[i+1])}
				var a = {latLng: x};
				id.push(a);
			}
            window.onload = function() {
                var map, dir;
				var mapLayer = MQ.mapLayer();
                map = L.map('map', {
                    layers: MQ.mapLayer(),
                    center: [ 18.9200694, 72.82934805000001 ],
                    zoom: 10,
                  	scrollWheelZoom:false
                });
			
				L.control.layers({
					'Map': mapLayer,
					'Hybrid': MQ.hybridLayer(),
					'Satellite': MQ.satelliteLayer(),
					'Dark': MQ.darkLayer(),
					'Light': MQ.lightLayer()
				}).addTo(map);

                CustomRouteLayer = MQ.Routing.RouteLayer.extend({
					createStopMarker: function (location, stopNumber) {
                        var custom_icon;
                        var marker;
						// var ="https://api.distancematrix.ai/maps/api/distancematrix/json?origins=51.4822656,-0.1933769&destinations=51.4822656,-0.1933769&departure_time=now&key=xHhaXS89ZEwV9qAwgAjSucGzmNLnf";
                        custom_icon = L.icon({
                            iconUrl: 'https://www.mapquestapi.com/staticmap/geticon?uri=poi-green_1.png',
                            iconSize: [20, 29],
                            iconAnchor: [10, 29],
                            popupAnchor: [0, -29]
                        });
						// console.log(location.latLng.lat)
                        marker = L.marker(location.latLng, {icon: custom_icon}).bindPopup(location.street + ' ' + location.adminArea5).addTo(map);
                        return marker;
                    },

                    createEndMarker: function (location, stopNumber) {
                        var custom_icon;
                        var marker;

                        custom_icon = L.icon({
                            iconUrl: 'https://www.mapquestapi.com/staticmap/geticon?uri=poi-red_1.png',
                            iconSize: [20, 29],
                            iconAnchor: [10, 29],
                            popupAnchor: [0, -29]
                        });
						// console.log(location);
                        marker = L.marker(location.latLng, {icon: custom_icon}).bindPopup(location.street + ' ' + location.adminArea5).addTo(map);

                        return marker;
                    }
                });
                dir = MQ.routing.directions();

                dir.optimizedRoute({
					locations: id
                });

                map.addLayer(new CustomRouteLayer({
					directions: dir,
					draggable: false,
					fitBounds: true,
					ribbonOptions: {
                        ribbonDisplay: { color: 'purple', opacity: 0.6 }
                    }
				}));

				// var custom_icon;
				// var marker;

				// custom_icon = L.icon({
				// 	iconUrl: 'https://www.mapquestapi.com/staticmap/geticon?uri=poi-red_1.png',
				// 	iconSize: [20, 29],
				// 	iconAnchor: [10, 29],
				// 	popupAnchor: [0, -29]
				// });

				// for(i=0;i<places.length;i+=2)
				// {
				// 	L.marker([parseFloat(places[i]), parseFloat(places[i+1])], {
				// 	icon: L.mapquest.icons.marker(),
				// 	draggable: false
				// 	}).bindPopup('Denver, CO').addTo(map);
				// }
            }
        </script>
    </head>

	<body style='border:0; margin: 0; margin-bottom:50px'>
		<div id='map' style='width: 100%; height:530px;'></div>
		
		<section id="cd-timeline" class="cd-container">
			@foreach ($act_path as $a)
				@php
					$k=0;
				@endphp
				@foreach ($allPlaces as $p)
					@if ($k==$a)
						<div class="cd-timeline-block">
							<div class="cd-timeline-img cd-movie">
							</div>
							<!-- cd-timeline-img -->
				
							<div class="cd-timeline-content">
								<h2 style="font-size: larger">{{$p->name}}</h2>
								<p style="font-size: small; ">{{$p->description}}</p>
								<p style="font-size: small; font-weight: 700; color:rgb(226, 151, 226) ">Address:{{$p->address}}</p>
								<span class="cd-date" style="font-size: medium">Day 1</span>
							</div>
							<!-- cd-timeline-content -->
						</div>
					@endif
					@php
						$k++;
					@endphp
				@endforeach
			@endforeach
			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-movie">
				</div>
				<!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2 style="font-size: larger">{{$getP[0]->name}}</h2>
					<p style="font-size: small">{{$getP[0]->description}}</p>
					<p style="font-size: small; font-weight: 700; color:rgb(226, 151, 226)">Address:{{$getP[0]->address}}</p>
					<span class="cd-date" style="font-size: medium">Day 1</span>
				</div>
				<!-- cd-timeline-content -->
			</div>
		</section>
    </body>
</html>
@endsection