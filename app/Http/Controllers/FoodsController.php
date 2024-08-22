<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FoodsController extends Controller
{
    function index() {
      // $foods = DB::table('food_name')->get();
      $foods = DB::select("SELECT * FROM food_name");
      return view('foodsDettail',compact('foods'));
    }
}
