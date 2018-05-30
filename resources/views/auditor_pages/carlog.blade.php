@extends('layouts.auditorDefault')


@section('content')

<div class="container">

<a href="javascript:history.back()" class="btn btn-primary">Back</a>
@if(count($drives) != 0)
<table class="table table-striped table-light">
              <thead>
                  <h2>Car Log For {{$drives[0]->car->vin}}</h2>
                        <tr>
                          <th scope="col">Date</th>
                          <th scope="col">Starting Mileage</th>
                          <th scope="col">Ending Mileage</th>
                          <th scope="col">Student</th>
                            <th scope="col">Instructor</th>

                        </tr>
              </thead>
              <tbody>
                     @foreach ($drives as $trip)
               <tr>
                        <td>{{$trip->date}}</td>
                        <td>{{$trip->start_mileage}}</td>
                        <td>{{$trip->end_mileage}}</td>
                        <td>{{$trip->user->name.' '.$trip->user->last_name}}</td>
                        <td>{{$trip->instructor->first_name.' '.$trip->instructor->last_name}}<br>{{$trip->instructor->drivers_license}}</td>
                    </tr>
                @endforeach



              </tbody>
               </table>
             @else
               <p>
                 This car has no drives yet.
               </p>
@endif
  </div>
@endsection
