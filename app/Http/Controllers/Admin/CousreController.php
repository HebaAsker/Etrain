<?php

namespace App\Http\Controllers\Admin;

use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Courses\CourseDetail;
use App\Http\Requests\ValidationRequest;

class CousreController extends Controller
{
    use ImageTrait;


    //show all courses
    public function index()
    {
        $courses = CourseDetail::all();
        return view('dashboard.course.view_courses',compact('courses'));
    }

    //show add course form
    public function create()
    {
        return view('dashboard.course.add_course');
    }

    //show add course form
    public function store(ValidationRequest $request)
    {
        $file_name = $this->saveImage($request->image, 'images/courses');

        CourseDetail::create(
            [
                'course_name' => $request['course_name'],
                'course_category' => $request['course_category'],
                'description' => $request['description'],
                'teacher_name' => $request['teacher_name'],
                'created_by' => Auth()->id(),
                'course_fee' => $request['course_fee'],
                'available_seats' => $request['available_seats'],
                'schedule' => $request->input('schedule'),
                'image' => $file_name,
            ]
        );

        return view('dashboard.course.add_course');
    }

    //show edit course page
    public function edit($id)
    {
        $course = CourseDetail::findOrFail($id);
        return view('dashboard.course.edit_course',compact('course'));
    }

    //update date of spesific course
    public function update(ValidationRequest $request, $id)
    {
        CourseDetail::whereId($id)->update($request->except('_token','_method'));
        return redirect(route('admin.view_courses'));
    }

    //delete specific course
    public function destroy($id)
    {
        $course = CourseDetail::findOrFail($id);
        $course->delete();
        return redirect(route('admin.view_courses'));
    }

}
