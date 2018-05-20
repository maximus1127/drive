@extends('layouts.schoolDefault')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Welcome To The Dashboard</h1>
        <br />
        {{-- <ol class="breadcrumb">
            <li class="breadcrumb-item pt-1"><a href="index"><i class="fa fa-fw fa-home"></i> Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">UI Features</a>
            </li>
            <li class="breadcrumb-item active">
                Simple Tables
            </li>
        </ol> --}}

    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-6">
                <!-- First Basic Table strats here-->
                <div class="card card-primary">
                    <div class="card-header text-white bg-success">
                        <h3 class="card-title d-inline">
                           Todays Drives
                        </h3>
                        {{-- <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel "></i>
                                </span> --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="table1">
                                <thead>
                                <tr class="text-center">
                                    <th>Time</th>
                                    <th>Student</th>
                                    <th>Instructor</th>
                                    <th>Pickup</th>
                                    <th>Drop Off</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                  @php(
                                    $drives= App\Drive::where([
                                      ['date', DB::raw('CURDATE()')],
                                      ['school_id', Auth::user()->school_id],
                                      ])->get()

                                  )
                                  @foreach ($drives as $drive)

                                    @if ($drive->instructor->drivers_license == Auth::user()->drivers_license)
                                      @php($mine = 'bg-success')
                                    @else
                                      @php($mine = '')
                                    @endif

                                    <tr class="text-center {{$mine}}">
                                      <td>{{date('H:i', strtotime($drive->start_time)).' - '.date('H:i', strtotime($drive->end_time))}}</td>
                                      <td>{{$drive->user->name.' '.$drive->user->last_name}}</td>
                                      <td>{{$drive->instructor->first_name.' '.$drive->instructor->last_name}}</td>
                                      <td>{{$drive->start_location}}</td>
                                      <td>{{$drive->end_location}}</td>
                                      <td>
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#basic_modal" data-id="{{$drive->id}}">Input</button>
                                      </td>
                                    </tr>


                                  @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="basic_modal" class="modal fade animated" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Drive Information</h4>
                                                <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="{{route('completeDrive')}}">

                                      <div class="col-xl-12 col-12">
                                        <div class="card border-success ">

                                            <div class="card-body">

                                                    <div class="form-body">
                                                        <div class="form-group row">
                                                            <label for="inputUsername" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">
                                                                Starting Mileage
                                                            </label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <div class="input-group input-ground-prepend">

                                                                    <input type="text" class="form-control" name="start_mileage"
                                                                           id="inputUsername">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail1" class="col-lg-3 col-12 col-form-label  text-lg-right text-left">
                                                                Ending Mileage
                                                            </label>
                                                            <div class="col-lg-9 col-12 ">
                                                                <div class="input-group input-group-prepend">

                                                                    <input type="text" id="inputEmail1" name="end_mileage"
                                                                           class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                              {{-- <label for="select21" class="control-label">
                                                                  Vehicle Used
                                                              </label> --}}
                                                              <select id="select21" class="form-control select2" name="car">
                                                                  <option value="">Select Car...</option>
                                                                  @foreach($car as $vehicle)
                                                                    <option value="{{$vehicle->id}}">
                                                                      {{$vehicle->vin}}
                                                                    </option>

                                                                  @endforeach
                                                              </select>
                                                          </div>
                                                          <div>
                                                            <input type="hidden" name="driveID"  id="driveID">
                                                          </div>

                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="offset-lg-3 col-lg-9 col-12 ">
                                                                <button type="submit" class="btn btn-primary">Submit
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </div>

                                            </div>
                                        </div>
                                    </div>


                                    @csrf




                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            <div class="col-lg-6">
                <!-- First Basic Table strats here-->
                <div class="card card-primary">
                    <div class="card-header text-white bg-primary">
                        <h3 class="card-title d-inline">
                        Classes
                        </h3>
                        <span class="pull-right">
                                    {{-- <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel"></i> --}}
                            <a href="{{route('createClass')}}" class="btn btn-xs" >
                                <i class="fa fa-plus"></i>
                            </a>
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                  @php(
                                    $courses = App\Course::where('school_id', Auth::user()->school_id)->orderBy('day_1', 'desc')->paginate(10)
                                  )
                                    <th>Day 1</th>
                                    <th>Day 2</th>
                                    <th>Day 3</th>
                                    <th>Day 4</th>
                                    <th>Status</th>
                                    <th>Seats Left</th>
                                </tr>
                                </thead>
                                <tbody>

                              @foreach ($courses as $course)
                                <tr>
                                    <td>{{$course->day_1}} <br /><span class="label-sm">Class Type: {{$course->class_code}}</span></td>
                                    <td>{{$course->day_2}}</td>
                                    <td>{{$course->day_3}}</td>
                                    <td>{{$course->day_4}}</td>
                                    @if ($course->status == 'Closed')
                                      @php($mine = 'bg-danger')
                                    @else
                                      @php($mine = 'bg-success')
                                    @endif
                                    <td><a href="{{route('viewClass', $course->id)}}"><span class="label label-sm {{$mine}}">{{$course->status}}</span> </a></td>
                                    <td>
                                      @php($seats = App\Roster::where('course_id', $course->id))
                                      {{40 - $seats->count()}}
                                    </td>
                                </tr>
                              @endforeach
                              {{ $courses->links() }}

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- First Basic Table Ends Here-->
        <!-- Second Data Table Starts Here-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-info">
                    <div class="card-header text-white bg-info">
                        <h3 class="card-title d-inline">
                            <i class="fa fa-fw fa-list-alt"></i> Cars
                        </h3>
                        <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>email</th>
                                    <th>Phone</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Ambrose Schulist</td>
                                    <td>Ambrose.Schulist@hotmail.com</td>
                                    <td>098-354-8863</td>
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

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title custom_align" id="Heading">Edit Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="Joseph Lynch">
                        </div>
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="joseph34@testmail.com">
                        </div>
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="456-632-5687">
                        </div>
                    </div>
                    <div class="modal-footer ">
                        <button type="button" class="btn btn-success" data-dismiss="modal">
                            <span class="fa fa-check"></span> Update
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
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
        <!-- second row ends here -->
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header text-white bg-primary">
                        <h3 class="card-title d-inline">
                            <i class="fa fa-fw fa-list-ol"></i> Basic Table 2
                        </h3>
                        <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>User Name</th>
                                    <th>Phone</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header text-white bg-primary">
                        <h3 class="card-title d-inline">
                            <i class="fa fa-fw fa-list-ol"></i> Basic Table 3
                        </h3>
                        <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Salary</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row span table ends here-->
        <!-- Fourth Basic Table Starts Here-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card-header text-white bg-primary">
                        <h3 class="card-title d-inline">
                           Responsive Table
                        </h3>
                        {{-- <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span> --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Company</th>
                                    <th>email</th>
                                    <th>Phone</th>
                                    <th>Department</th>
                                    <th>Salary</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--row end-->
        @include('layouts.right_sidebar')
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js -->
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/custom_js/simple-table.js')}}"></script>
     <script type="text/javascript" src="{{asset('assets/vendors/iCheck/js/icheck.js')}}"></script>
         <script type="text/javascript" src="{{asset('assets/vendors/moment/js/moment.min.js')}}"></script>
         <script>
         $(function() {
             $('#basic_modal').on("show.bs.modal", function (e) {
                  $("#driveID").val($(e.relatedTarget).data('id'));
             });
         });


         </script>

    <!-- end of page level js -->
@stop
