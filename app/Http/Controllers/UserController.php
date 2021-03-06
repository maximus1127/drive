<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Drive;
use App\School;
use App\Instructor;
use App\Grade;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userIndex');
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
    public function show($id)
    {
      $results = User::find($id);
        $check = Grade::where('user_id', $id)->get();
        if ($check->count() != 0){
        $final_grade = round((($results->grade->chapter_1 + $results->grade->chapter_2 + $results->grade->chapter_3 + $results->grade->chapter_4 + $results->grade->chapter_5 + $results->grade->chapter_6 + $results->grade->chapter_7 + $results->grade->chapter_8 + $results->grade->chapter_9)/900)*100,1);
        }
        else {
            $final_grade = 0;
        }
        $drives = Drive::with(['instructor'])->where('student_id', $id)->get();
      $school=School::find($results->school_id);


//        print_r ($drives); exit;
      return view('auditor_pages.student_profile')->with(['results'=> $results, 'final_grade'=> $final_grade, 'school'=>$school, 'drives'=>$drives]);

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
