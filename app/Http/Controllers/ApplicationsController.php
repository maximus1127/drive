<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use Auth;
use Session;
use Carbon\Carbon;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = Application::where('status', 'Pending')->get();
        return view('auditor_pages.all_applications', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('school_pages.instructor_state_application');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $app = new Application();
        $app->fname = $request->fname;
        $app->mname = $request->mname;
        $app->lname = $request->lname;
        $app->dob = $request->dob;
        $app->ssn = $request->ssn;
        $app->race = $request->race;
        $app->height = $request->height;
        $app->weight = $request->weight;
        $app->hair = $request->hair;
        $app->eyes = $request->eyes;
        $app->position = $request->position;
        $app->drivers_license = $request->dlnum;
        $app->drivers_license_state = $request->dlstate;
        $app->sex = $request->sex;
        $app->school_id = Auth::user()->school_id;
        $app->status = "Pending";

        if($app->save()){
          Session::flash('success', 'Application Submitted Successfully');
        }
        return redirect(route('school'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $application = Application::findOrFail($id);
        return view('auditor_pages.application_review', compact('application'));
    }

    public function approved($id)
    {
      $application = Application::findOrFail($id);
      $application->status = 'Approved';
      $application->save();
      return redirect(route('instructor.applications'));
    }
    public function denied($id)
    {
      $application = Application::findOrFail($id);
      $application->status = 'Denied';
      $application->save();
      return redirect(route('instructor.applications'));
    }
    public function saveNotes(Request $request, $id)
    {
      $application = Application::findOrFail($id);
      $application->notes = $request->application_notes;
      $application->save();
      return response()->json(['success'=>'Data is successfully added']);
    }

    public function backgroundSent($id)
    {
      $application = Application::findOrFail($id);
      $application->bg_check_submitted_by = Auth::user()->id;
      $application->bg_submitted_on = Carbon::now();
      $application->save();
      return response()->json(['success'=>'Data is successfully added']);
    }

    public function backgroundReceived($id)
    {
      $application = Application::findOrFail($id);
      $application->bg_check_received_by = Auth::user()->id;
      $application->bg_received_on = Carbon::now();
      $application->save();
      return response()->json(['success'=>'Data is successfully added']);
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
