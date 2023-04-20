<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courses\CourseOutline;
use Illuminate\Http\Request;

class CourseOutlineController extends Controller
{
    //show all courses
    public function index()
    {
        $course_outline = CourseOutline::all(); //to desplay all courses outlines
        return view('dashboard.course_outline.view_course_outlines',compact('course_outline'));
    }

    //show add course outline form
    public function create()
    {
        return view('dashboard.course_outline.add_course_outline');
    }

    //store course outline
    public function store(Request $request)
    {
        $course_outline = new CourseOutline();
        $course_outline->course_id = $request->course_id;
        $course_outline->outline= $request->outline;
        $course_outline->save();
        return view('dashboard.course_outline.add_course_outline');
    }

    //show edit course page
    public function edit($id)
    {
        $course_outline = CourseOutline::findOrFail($id); // to edit specific course outline
        return view('dashboard.course_outline.edit_course_outline',compact('course_outline'));
    }

    //update date of spesific course
    public function update(Request $request, $id)
    {
        CourseOutline::whereId($id)->update($request->except('_token','_method'));
        return redirect(route('admin.view_course_outlines'));
    }

    //delete specific course
    public function destroy($id)
    {
        $course_outline = CourseOutline::findOrFail($id);
        $course_outline->delete();
        return redirect(route('admin.view_course_outlines'));
    }
}
