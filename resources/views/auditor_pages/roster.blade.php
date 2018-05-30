@extends('layouts.auditorDefault')


@section('content')

<div class="container">

<a href="javascript:history.back()" class="btn btn-primary">Back</a>
  <table class="table table-striped table-light">
                <thead>
                    <h2>Classes</h2>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Date 1</th>
                            <th scope="col">Date 2</th>
                            <th scope="col">Date 3</th>
                              <th scope="col">Date 4</th>

                          </tr>
                </thead>
                <tbody>
                       @foreach ($roster as $child)
                 <tr>
                 @php (
                  $student = App\User::find($child->user_id)
                 )
                     <td>{{$student->name.' '.$student->last_name}}</td>
                     <td>{{$child->day_1}}</td>
                     <td>{{$child->day_2}}</td>
                     <td>{{$child->day_3}}</td>
                     <td>{{$child->day_4}}</td>

                  @endforeach
                 </tr>


                </tbody>
                 </table>

  </div>
@endsection
