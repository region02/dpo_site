<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpFormRequest;
use App\Mail\NotificationOfSignUp;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\UserCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

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

                'soon_started' => $courses->where('start_at','>', Carbon::now()),

                'application_acceptance' => $courses->whereNull('start_at'),
            };
        }

        $courses = $courses->get();

        return view('main.courses', compact('courses', 'types', 'old_values'));

    }
    public function show(Course $course)
    {
        $types = CourseType::all();

        return view('main.course_page', compact('course', 'types',));
    }


    public function userPut(Course $course, SignUpFormRequest $request)
    {
        $validated = $request->validated();

        $userCourse = UserCourse::create(array_merge($validated,['course_id' => $course->id]));

        Mail::send(new NotificationOfSignUp($userCourse));

        return Redirect::back()->with('status','registered');
    }
}
