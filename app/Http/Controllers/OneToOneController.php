<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;

class OneToOneController extends Controller
{
    public function oneToOne () 
    {
        $country = Country::where('name', 'China')->get()->first();
        $location = $country->location;

        echo "País: $country->name<br>";
        echo "<hr>Latitude: $location->latitude<br>";
        echo "<hr>Longitude: $location->longitude<br>";

    }

    public function oneToOneInverse()
    {
        $latitude = 456;
        $longitude = 654;

        $location = Location::where('latitude', $latitude)->where('longitude', $longitude)->get()->first();

        $country = $location->country;
        echo $country->name;
    }
}
