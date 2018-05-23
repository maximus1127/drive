@extends('layouts.auditorDefault')


@section('content')
    <div class="container" style="font-size: 18pt;">

        <h1>{{$instructor->first_name}} {{$instructor->last_name}}</h1>
        <div class="info-block">
        <p>Drivers License Number: {{$instructor->drivers_license}}</p>
        <p>Date of Birth: {{$instructor->dob}}</p>
        <p>Address: {{$instructor->address_1}}<br> {{$instructor->city.', '.$instructor->state.' '.$instructor->zip_code}}</p>
        <p>Phone: {{$instructor->phone}}</p>
        <p>Employer: {{$instructor->school->name}}</p>
        <p>State License Number: {{$instructor->state_license}}</p>
        <p>State License Expiration: {{$instructor->state_license_exp}}</p>
        <p>Employed Since: {{$instructor->hire_date}}</p>
        <p>Status: {{$instructor->status ? 'Active' : 'Deactivated'}}</p>

        </div>
        @if($instructor->status == 0)
          <a href="{{route('instructor.activate' , $instructor->id)}}" class="btn btn-sm btn-success">Activate</a>

      @else
          <a href="{{route('instructor.deactivate' , $instructor->id)}}" class="btn btn-sm btn-danger">Deactivate</a>

        @endif


      </div>

      <hr>

<form method="post" action="{{route('instructor.save.note', $instructor->id)}}">
  <h3>Notes</h3>
  @csrf
    <button type="submit" class="btn btn-sm btn-primary">Save Notes</button>
          <textarea rows="4" class="form-control resize_vertical" name="instructor_notes" placeholder="Notes">{{$instructor->notes}}</textarea>

      </div>
</form>


@endsection
