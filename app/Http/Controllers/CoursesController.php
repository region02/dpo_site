<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function show()
    {
        $courses = Course::all();
        return view('main.courses', compact('courses'));

    }
}
