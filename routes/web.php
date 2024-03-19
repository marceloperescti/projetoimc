<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post("/calculoimc", 
   ["uses"=>"App\Http\Controllers\calculoimcController@index"]
);
