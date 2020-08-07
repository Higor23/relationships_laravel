<?php

use Illuminate\Support\Facades\Route;

// One to one 

Route::get('one-to-one', 'OneToOneController@oneToOne');
Route::get('one-to-one-inverse', 'OneToOneController@oneToOneInverse');

// One to many

Route::get('one-to-many', 'OneToManyController@oneToMany');

Route::get('/', function () {
    return view('welcome');
});
