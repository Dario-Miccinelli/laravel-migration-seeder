<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index (){

      $train = Train::all();
        return view('pages.welcome' , compact('train'));
   }
}
