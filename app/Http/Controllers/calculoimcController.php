<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculoimcController extends Controller
{
    //
    public function index (Request $req) {
       $altura = $req['altura'] / 100;
       $peso = $req['peso'];
       $imc = $peso / ($altura * $altura);
       return view("calculoimc/resultado", compact("imc"));
    }
}
