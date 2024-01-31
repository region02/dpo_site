<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show(/*Course $course*/)
    {
        return view('main.course_page'/*, compact('course')*/);
    }
}
