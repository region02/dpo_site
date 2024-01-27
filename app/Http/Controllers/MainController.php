<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseType;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function show()
    {
        $courses = Course::all();
        $types = CourseType::all();
        return view('main.index', compact('courses'));
    }
}
