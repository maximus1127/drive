<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use Auth;

class ApplicationsController extends Controller
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

        $app->save();

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
        //
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
