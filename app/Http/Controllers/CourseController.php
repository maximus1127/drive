<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Auth;
use Session;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('school_pages.register_class');
    }

    public function addStudent()
    {
      return view('school_pages.student_search');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->day_1 = date('Y-m-d', strtotime($request->day_1));
      $request->day_2 = date('Y-m-d', strtotime($request->day_2));
      $request->day_3 = date('Y-m-d', strtotime($request->day_3));
      $request->day_4 = date('Y-m-d', strtotime($request->day_4));
        $course = new Course();
        $course->day_1 = $request->day_1;
        $course->day_2 = $request->day_2;
        $course->day_3 = $request->day_3;
        $course->day_4 = $request->day_4;
        $course->instructor_day_1 = $request->day_1_instructor;
        $course->instructor_day_2 = $request->day_2_instructor;
        $course->instructor_day_3 = $request->day_3_instructor;
        $course->instructor_day_4 = $request->day_4_instructor;
        $course->class_code = $request->class_type;
        $course->school_id = Auth::user()->school_id;
        $course->status = "Open";

        if($course->save()){
          Session::flash('success', 'New Class Added Successfully');
        }

        return redirect(route('createClass'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $course = Course::findOrFail($id);
        return view('class_profile')->with('course', $course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);

        return view('school_pages.edit_class')->with('course', $course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->day_1 = date('Y-m-d', strtotime($request->day_1));
      $request->day_2 = date('Y-m-d', strtotime($request->day_2));
      $request->day_3 = date('Y-m-d', strtotime($request->day_3));
      $request->day_4 = date('Y-m-d', strtotime($request->day_4));
      $course = Course::find($id);
        $course->day_1 = $request->day_1;
        $course->day_2 = $request->day_2;
        $course->day_3 = $request->day_3;
        $course->day_4 = $request->day_4;
        $course->instructor_day_1 = $request->day_1_instructor;
        $course->instructor_day_2 = $request->day_2_instructor;
        $course->instructor_day_3 = $request->day_3_instructor;
        $course->instructor_day_4 = $request->day_4_instructor;
        $course->class_code = $request->class_type;
        $course->school_id = Auth::user()->school_id;
        $course->status = "Open";

        if($course->save()){
          Session::flash('success', 'Class Edited Successfully');
        }

        return redirect(route('viewClass', $course->id));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
