<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
  
    public function home(){

        return Http::get("https://www.omdbapi.com/?apikey=86df9f09&t=frozen+2");


// return view('home');

        // return 'hi';
    }


}
