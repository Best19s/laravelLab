<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index() {
        return "Hello, from FirstController.";
    }

    public function getParams($number) {
        return "Hello, we got $number";
    }

    public function dashboard() {
        return view("FirstController");
    }

    public function showLayout() {
        return view("child");
    }

}
