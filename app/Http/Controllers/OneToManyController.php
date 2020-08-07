<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;

use Illuminate\Http\Request;

class OneToManyController extends Controller
{
    public function oneToMany()
    {
        // $country = Country::where('name', 'Brasil')->get()->first();
        // $keySearch = 'a';

        // $countries = Country::where('name', 'LIKE', "%{$keySearch}%")->get();
        $countries = Country::all();
       

        foreach($countries as $country)
        {
            echo "<b>{$country->name}</b>";

            $states = $country->states()->get();

            foreach ($states as $state) {
                echo "<br>{$state->name} - {$state->initials}";
            }

            echo '<hr>';
        }


        
        

     
    }
}
