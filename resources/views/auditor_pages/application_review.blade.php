@extends('layouts.auditorDefault')


@section('content')

  <div class="container">


    <div class="row">


      <h1>{{$application->fname.' '.$application->mname}} {{$application->lname}}</h1>
      <div class="col-xs-6 info-block">
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
      <div class="col-xs-4 info-block">
        <div>
          @if($application->bg_check_submitted_by == "")
          <button class="btn btn-lg btn-primary" id="bgSubmit">Background Check Submitted</button>
        @else
          <p>
            Background Application Submitted By: <br /> {{$application->user_submitted->name.' '.$application->user_submitted->last_name}} on {{$application->bg_submitted_on}}


          </p>
        @endif
        </div>
        <br />
        <div >
          @if($application->bg_check_received_by == "")
          <button class="btn btn-lg btn-primary" id="bgReceive">Background Check Received</button>
        @else
          <p>
            Background Application Received and Verified By: <br /> {{$application->user_received->name.' '.$application->user_received->last_name}} on {{$application->bg_received_on}}


          </p>
        @endif

        </div>

      </div>
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
      <br />
<h3>Notes</h3>

      <button class="btn btn-sm btn-primary" id="ajaxSubmit">Submit</button>

      <textarea rows="4" class="form-control resize_vertical" id="application_notes" name="application_notes" placeholder="Notes">{{$application->notes}}</textarea>

        </div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  var url1 = "/application-notes-save/{{$application->id}}"

  var url3 = "/application-background-received/{{$application->id}}"
      $(document).ready(function(){
         $('#ajaxSubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
            $.ajax({

                  url: url1,
                  method: 'post',
                  data: {
                     application_notes: jQuery('#application_notes').val(),
                  },
                  success: function(){
                     alert('Note Saved');
                  }});
               });
            });


var url2 = "/application-background-sent/{{$application->id}}";
            $(document).ready(function(){
               $('#bgSubmit').click(function(){
                 $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                 $.ajax({
                          url: url2,
                          error: function(xhr, statusText, err) {
                            alert("error"+xhr.status);
                          },

                          success: function() {
                            $('#bgSubmit').attr('disabled', true);
                            $('#bgSubmit').removeClass('bg-primary').addClass('bg-success');
                          },
                          type: 'post'
                       });
                     });
                  });
                  var url3 = "/application-background-received/{{$application->id}}";
                              $(document).ready(function(){
                                 $('#bgReceive').click(function(){
                                   $.ajaxSetup({
                                      headers: {
                                          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                      }
                                  });
                                   $.ajax({
                                            url: url3,
                                            error: function(xhr, statusText, err) {
                                              alert("error"+xhr.status);
                                            },

                                            success: function() {
                                              $('#bgReceive').attr('disabled', true);
                                              $('#bgReceive').removeClass('bg-primary').addClass('bg-success');
                                            },
                                            type: 'post'
                                         });
                                       });
                                    });

                  // $(document).ready(function(){
                  //    $('#ajaxReceive').click(function(e){
                  //          e.preventDefault();
                  //          $.ajaxSetup({
                  //             headers: {
                  //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  //             }
                  //         });
                  //       $.ajax({
                  //
                  //             url: url,
                  //             method: 'post',
                  //             data: {
                  //                application_notes: jQuery('#application_notes').val(),
                  //             },
                  //             success: function(){
                  //                alert('Note Saved');
                  //             }});
                  //          });
                  //       });
</script>

@endsection
