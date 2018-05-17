@extends('layouts.schoolDefault')

@section('content')

  <div class="card col-md-4">
    <h5 class="card-header">{{$course->class_code}} class #{{$course->id}}</h5>
    <div class="card-body">
      {{-- <h5 class="card-title">Special title treatment</h5> --}}
      @if ($course->class_code == "38 Hour")
      <p class="card-text">{{ \Carbon\Carbon::parse($course->day_1)->format('m/d/Y')}} assigned to {{$course->instructorDay1->first_name.' '.$course->instructorDay1->last_name}}</p>
      <p class="card-text">{{ \Carbon\Carbon::parse($course->day_2)->format('m/d/Y')}} assigned to {{$course->instructorDay2->first_name.' '.$course->instructorDay2->last_name}}</p>
      <p class="card-text">{{ \Carbon\Carbon::parse($course->day_3)->format('m/d/Y')}} assigned to {{$course->instructorDay3->first_name.' '.$course->instructorDay3->last_name}}</p>
      <p class="card-text">{{ \Carbon\Carbon::parse($course->day_4)->format('m/d/Y')}} assigned to {{$course->instructorDay4->first_name.' '.$course->instructorDay4->last_name}}</p>
    @else
      <p class="card-text">{{ \Carbon\Carbon::parse($course->day_1)->format('m/d/Y')}} assigned to {{$course->instructorDay1->first_name.' '.$course->instructorDay1->last_name}}</p>
    @endif
      <a href="{{route('editClass', $course->id)}}" class="btn btn-primary">Edit Class</a>
      <a  class="btn btn-primary">Add Student</a>
      <a type="button" class="btn btn-info" data-toggle="modal" href="{{route('addStudent')}}"
                                  data-target="#multiple_modal1">Multiple Modals
                          </a>
                          <div id="multiple_modal1" class="modal fade animated" role="dialog">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h4 class="modal-title">Search For A Student</h4>

                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      <div class="modal-body">
                                          <input type="text" class="form-control" id="search" name="search" value="{{$course->day_3}}">
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-info" data-target="#multiple_modal2"
                                                  data-toggle="modal" data-dismiss="modal">Find
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div id="multiple_modal2" class="modal fade animated" role="dialog">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h4 class="modal-title">Modal 2</h4>

                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      <div class="modal-body">
                                          This is the second modal
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
    </div>
  </div>


  <div class="card-body">
      <div class="table-responsive">
          <table id="mytable" class="table table-bordred table-striped">
              <thead>
              <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>School</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </tr>
              </thead>
              <tbody>
                @php($kids = App\Roster::where('course_id', $course->id)->get())



                @foreach ($kids as $kid)


              <tr>
                  <td>{{$kid->user->name.' '.$kid->user->last_name}}</td>
                  <td>{{$kid->user->email}}</td>
                  <td>{{$kid->user->phone_1}}</td>
                  <td>{{$kid->user->educational_school}}</td>
                  <td>

                          <button class="btn btn-primary btn-xs" data-toggle="modal"
                                  data-target="#edit" data-placement="top"><span
                                      class="fa fa-pencil"></span></button>

                  </td>
                  <td>

                          <button class="btn btn-danger btn-xs" data-toggle="modal"
                                  data-target="#delete" data-placement="top"><span
                                      class="fa fa-trash"></span></button>

                  </td>
              </tr>
@endforeach
              </tbody>
          </table>
      </div>
  </div>

  <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title custom_align" id="Heading5">Delete this entry</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                  <div class="alert alert-info">
                      <span class="glyphicon glyphicon-info-sign"></span>&nbsp; Are you sure you want to
                      delete this record ?
                  </div>
              </div>
              <div class="modal-footer ">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">
                      <span class="fa fa-check"></span> Yes
                  </button>
                  <button type="button" class="btn btn-success" data-dismiss="modal">
                      <span class="glyphicon glyphicon-remove"></span> No
                  </button>
              </div>
          </div>
          <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>

@endsection
