<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $courses = Course::query()->with('courseType');
        $types = CourseType::all();



        $old_values = $request->query();


        if($request->get('sort')){
            match ($request->get('sort')){
                'cost' => $courses->orderBy('cost','asc'),
                '-cost' => $courses->orderBy('cost','desc'),

                'title' => $courses->orderBy('title','asc'),
                '-title' => $courses->orderBy('title','desc')
            };
        }


        if($request->get('filter_type')){
            foreach ($request->get('filter_type') as $filter_type){
                $courses->orWhere('course_type_id',intval($filter_type));
            }
        }

        if($request->get('filter_started')){
            match ($request->get('filter_started')){
                'started' => $courses->where('start_at','<=', Carbon::now()),

                'soon_started' => $courses->where('start_at','>', Carbon::now()),

                'without_date' => $courses->whereNull('start_at'),
            };
        }

        $courses = $courses->get();

        return view('main.courses', compact('courses', 'types', 'old_values'));

    }
    public function show(Course $course)
    {
        return view('main.course_page', compact('course'));
    }
}
