@extends('layouts.schoolDefault')


@section('content')
    <div class="container">

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
        <p>
          Notes: {{$instructor->notes}}
        </p>
        </div>
        <hr>
      </div>


@endsection
