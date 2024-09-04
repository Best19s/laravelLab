<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;


class CompanyController extends Controller
{
    function index(){
      $users = User::all();

      return view("test",compact("users"));
    }
}
