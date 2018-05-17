@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Student Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Welcome {{Auth::user()->name}}. Here you can see the classes you've taken, print completion certificates, and sign up for new classes!

                    @php(
                      $classes = App\Roster::where('user_id', Auth::user()->id)->get()
                    )
                    @if(count($classes) !=0)


                    <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">School</th>
                              <th scope="col">Day 1</th>
                              <th scope="col">Day 2</th>
                              <th scope="col">Day 3</th>
                              <th scope="col">Day 4</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($classes as $class)
                            <tr>
                              <td>{{$class->school->name}}</td>
                              <td>{{$class->day_1}}</td>
                              <td>{{$class->day_2}}</td>
                              <td>{{$class->day_3}}</td>
                              <td>{{$class->day_4}}</td>
                            </tr>
                              @endforeach
                          </tbody>
                        </table>
                      @else
                        <p>
                          You have not enrolled in any classes yet.
                        </p>


                      @endif



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
