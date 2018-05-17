@extends('layouts.userDefault')

@section("content")
<div class="container ">
  <h1 class="text-center">Welcome to your dashboard. Here you can view your class schedule and payment history.</h1>

  <div class="card-body">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif


      @php(
        $classes = App\Roster::where('user_id', Auth::user()->id)->get()
      )
      @if(count($classes) !=0)


      <table class="table">
            <thead>
              <h2>Classes</h2>
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

        @php(
          $drives = App\Drive::where('student_id', Auth::user()->id)->get()
        )
        @if(count($drives) !=0)

        <table class="table">
              <thead>
                <h2>Drives</h2>
              </thead>
              <tbody>
                  @foreach ($drives as $drive)
                <tr>
                  <td>{{$drive->date}}</td>
                  <td>{{$drive->instructor->first_name.' '.$drive->instructor->last_name}}</td>
                  <td>{{$drive->start_time}}</td>
                  <td>{{$drive->end_time}}</td>

                </tr>
                  @endforeach
              </tbody>
            </table>
          @else
            <p>
              You have not taken any drives yet.
            </p>


          @endif

          @php(
            $payments = App\Payment::where('student_id', Auth::user()->id)->get()
          )
          @if(count($payments) !=0)

          <table class="table">
                <thead>
                  <h2>Payments</h2>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)
                  <tr>
                    <td>{{$payment->created_at}}</td>

                    <td>{{$payment->school->name}}</td>
                    <td>{{$payment->amount}}</td>

                  </tr>
                    @endforeach
                </tbody>
              </table>
            @else
              <p>
                You have not made any payments yet.
              </p>


            @endif



  </div>








</div>


@endsection
