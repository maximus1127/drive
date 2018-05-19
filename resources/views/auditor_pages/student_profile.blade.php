@extends('layouts.auditorDefault')


@section('content')
    <div class="container">

        <h1>{{$results->name}} {{$results->last_name}}</h1>
        <div class="info-block">
        <p>License/Permit Number: {{$results->drivers_license}}</p>
        <p>Date of Birth: {{$results->dob}}</p>
        <p>Address: {{$results->address_1}}<br> {{$results->city.', '.$results->state.' '.$results->zip_code}}</p>
            <p>Phone: {{$results->phone_1}}</p>
            <p>Email: {{$results->email}}</p>
        </div>
        <hr>
        <div class="table-block">
     <table class="table text-center">
  <thead class="thead-dark">
    <tr>

      <th scope="col">Class Grade</th>
      <th scope="col">State Test Grade</th>
      <th scope="col">4th Day Drive Assessment</th>
      <th scope="col">Road Skills Grade</th>

    </tr>
  </thead>
  <tbody>
    <tr>
     @if($final_grade != 0)
        <td class="{{(($final_grade > 80)?'passed':'failed')}} text-center"><h3>{{$final_grade}}</h3></td>
        <td class="{{(($results->grade->state_test > 80)?'passed':'failed')}} text-center"><h3>{{$results->grade->state_test}}</h3></td>
        <td class="{{(($results->grade->day_4_assessment > 70)?'passed':'failed')}} text-center"><h3>{{$results->grade->day_4_assessment}}</h3></td>
        <td class="{{(($results->grade->road_skills > 80)?'passed':'failed')}} text-center"><h3>{{$results->grade->road_skills}}</h3> </td>

    </tr>

        </tbody>
</table>





        <button id="expand" class="btn btn-info">Expand</button>
        <br><br>

          <div id="additional_info">

   <table class="table text-center">

    <tr class="thead-dark">

      <th scope="col">Chapter Grades</th>
      <th scope="col">Successful Completion Certificate</th>
      <th scope="col">4th Day Drive Assessment Page</th>
      <th scope="col">Road Skills Page </th>
        <th scope="col">Miscellaneous</th>

    </tr>
       <tbody>
              <tr>

        <td><ul>
            <li>Chapter One: {{$results->grade->chapter_1}}</li>
             <li>Chapter Two: {{$results->grade->chapter_2}}</li>
             <li>Chapter Three: {{$results->grade->chapter_3}}</li>
             <li>Chapter Four: {{$results->grade->chapter_4}}</li>
             <li>Chapter Five: {{$results->grade->chapter_5}}</li>
             <li>Chapter Six: {{$results->grade->chapter_6}}</li>
             <li>Chapter Seven: {{$results->grade->chapter_7}}</li>
             <li>Chapter Eight: {{$results->grade->chapter_8}}</li>
             <li>Chapter Nine: {{$results->grade->chapter_9}}</li>
            </ul></td>
        <td>(No image)</td>
        <td>(No image)</td>
        <td>(No image)</td>

    </tr>

         </tbody>
</table>

      </div>

      @else
        <td>No Grade Information Available</td>

        @endif

  <br><br>
        <h2>{{$school->name}}</h2>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Drive Date</th>
      <th scope="col">Starting Miles</th>
      <th scope="col">Ending Miles</th>
      <th scope="col">VIN</th>
      <th scope="col">Starting Time</th>
      <th scope="col">Ending Ending Time</th>
      <th scope="col">Instructor</th>
    </tr>
  </thead>
  <tbody>
    @foreach($drives as $drive)
    <tr>
      <th scope="row">{{$drive->date}}</th>
      <td>{{$drive->start_mileage}}</td>
        <td>{{$drive->end_mileage}}</td>
      <td>{{$drive->vin}}</td>
      <td>{{$drive->start_time}}</td>
      <td>{{$drive->end_time}}</td>
      <td>{{$drive->instructor->first_name.' '.$drive->instructor->last_name}}<br>{{ $drive->instructor->state_license}}</td>
    </tr>
 @endforeach


  </tbody>
</table>

        </div>


</div>


@endsection
