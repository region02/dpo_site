<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseType;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function show(Request $request)
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
            $courses->where('started',$request->boolean('filter_started'));
        }

        $courses = $courses->get();

        return view('main.courses', compact('courses', 'types', 'old_values'));

    }
}
