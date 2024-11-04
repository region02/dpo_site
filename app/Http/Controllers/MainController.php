<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackFormRequest;
use App\Mail\NotificationOfFeedback;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;

class MainController extends Controller
{
    public function show()
    {
        $courses = Course::all();
        $types = CourseType::all();
        return view('main.index', compact('courses','types'));
    }

    public function feedback(FeedbackFormRequest $request)
    {

        if (!($request->agreement_1 || $request->agreement_2)) {

            return Redirect::to(url()->previous() . '#feedback')->with('status', 'feedback-not-ok');
        };
        $validated = $request->validated();

        $feedback = Feedback::create($validated);

        Mail::send(new NotificationOfFeedback($feedback));

        return response()->json(['status' => 'feedback-ok']);
    }
}
