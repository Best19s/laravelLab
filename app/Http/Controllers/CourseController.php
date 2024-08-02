<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getCourse($nameCourse) {
        return "My course is $nameCourse";
    }
}
