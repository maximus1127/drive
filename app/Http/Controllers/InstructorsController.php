<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;
use Auth;

class InstructorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function auditor_index()
    {
        $instructors = Instructor::all();
        return view('auditor_pages.all_instructors', compact('instructors'));
    }

    public function school_index()
    {
        $instructors = Instructor::where('school_id', Auth::user()->school_id)->get();
        return view('school_pages.all_instructors', compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function saveNotes(Request $request, $id)
    {
      $instructor = Instructor::findOrFail($id);
      $instructor->notes = $request->instructor_notes;
      $instructor->save();
      return redirect(route('auditor'));
    }

    public function activate($id)
    {
      $instructor = Instructor::findOrFail($id);
      $instructor->status = 1;
      $instructor->save();
      return redirect(route('instructor.profile', $id));
    }
    public function deactivate($id)
    {
      $instructor = Instructor::findOrFail($id);
      $instructor->status = 0;
      $instructor->save();
      return redirect(route('instructor.profile', $id));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function auditor_show($id)
    {
        $instructor = Instructor::find($id);
        return view('auditor_pages.instructor_profile', compact('instructor'));

    }
    public function school_show($id)
    {
        $instructor = Instructor::find($id);
        return view('school_pages.instructor_profile', compact('instructor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
