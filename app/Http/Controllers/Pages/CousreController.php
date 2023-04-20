<?php

namespace App\Http\Controllers\Pages;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Courses\CourseDetail;
use App\Models\Courses\CourseOutline;
use App\Models\Review;

class CousreController extends Controller
{

    //desplay all courses
    public function index()
    {
        $courses = CourseDetail::all(); //desplay all courses
        return view('pages.courses',compact('courses'));
    }

    //desplay specific course
    public function show($id)
    {
        $course = CourseDetail::findOrFail($id);
        $reviews = Review::where('course_id',$id)->take(5)->get(); //desplay some reviews reviews
        $course_outlines = CourseOutline::where('course_id',$id)->get(); //desplay some reviews reviews
        return view('pages.course_details',compact('course','reviews','course_outlines'));
    }

}
