@extends('layouts.auditorDefault')


@section('content')

  <div class="container">

      <h1>{{$application->fname.' '.$application->mname}} {{$application->lname}}</h1>
      <div class="info-block">
      <p>Drivers License Number: {{$application->drivers_license}}</p>
      <p>Date of Birth: {{$application->dob}}</p>
      <p>Employer: {{$application->school->name}}</p>
      <p>Social Security Number: {{$application->ssn}}</p>
      <p>Sex: {{$application->sex}}</p>
      <p>Race: {{$application->race}}</p>
      <p>Height/Weight: {{$application->height.' / '. $application->weight}}</p>
      <p>Hair/Eyes: {{$application->hair.' / '. $application->eyes}}</p>
      <p>Position Applied For: {{$application->position}}</p>


      </div>
      <hr>
      <a href="{{route('application.approve' , $application->id)}}" class="btn btn-sm btn-success">Approve</a>
      <a href="{{route('application.deny' , $application->id)}}" class="btn btn-sm btn-danger">Deny</a>

      {{-- <form method="post" action="{{route('application.save.note', $application->id)}}">
        <h3>Notes</h3>
        @csrf
          <button type="submit" class="btn btn-sm btn-primary">Save Notes</button>
                <textarea rows="4" class="form-control resize_vertical" name="application_notes" placeholder="Notes">{{$application->notes}}</textarea>

            </div>
      </form> --}}


      <button class="btn btn-sm btn-primary" id="ajaxSubmit">Submit</button>

      <textarea rows="4" class="form-control resize_vertical" id="application_notes" name="application_notes" placeholder="Notes">{{$application->notes}}</textarea>

        </div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  var url = "/instructor-notes-save/{{$application->id}}"

      $(document).ready(function(){
         $('#ajaxSubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
            $.ajax({

                  url: url,
                  method: 'post',
                  data: {
                     application_notes: jQuery('#application_notes').val(),
                  },
                  success: function(response){
                     console.log(response);
                  }});
               });
            });
</script>

@endsection
