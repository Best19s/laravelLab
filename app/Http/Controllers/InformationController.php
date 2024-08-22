<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index($name,$dept) {
        $name_user = $name;
        $dept_user = $dept;
        $items = ["IT","CS","GIS","AI","CY"];
        return view('information')->with('name', $name_user)->with('items', $items)->with('dept', $dept_user);
    }
}
