@extends('layouts.schoolDefault')


@section('header_styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datetime/css/jquery.datetimepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/airdatepicker/css/datepicker.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/bootstrap-multiselect/css/bootstrap-multiselect.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/select2/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/select2/css/select2-bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/selectize/css/selectize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/selectric/css/selectric.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/selectize/css/selectize.bootstrap3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/daterangepicker/css/daterangepicker.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/prettycheckable/css/prettyCheckable.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/jquerylabel/css/jquery-labelauty.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/select2/css/select2.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/select2/css/select2-bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/iCheck/css/all.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/iCheck/css/square/green.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/clockpicker/css/bootstrap-clockpicker.min.css')}}">
    <link media="all" rel="stylesheet" type="text/css" href="{{asset('assets/vendors/bootstrap-fileinput/css/fileinput.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/awesomebootstrapcheckbox/css/awesome-bootstrap-checkbox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/awesomebootstrapcheckbox/css/build.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom_css/radio_checkbox.css')}}">

    <!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')

        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-info">
                        <div class="card-header bg-info text-white ">

                        <form method="post" action= '{{ route('editClass', $course->id)}}'>

                              {{ csrf_field() }}
                            <h3 class="card-title d-inline">
                                <i class="fa fa-fw fa-calendar"></i> Edit Class
                            </h3>
                            @php(
                              $instructors = App\Instructor::where('school_id', Auth::user()->school_id)->get()
                            )
                            {{-- <a class=" text-white" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="true" aria-controls="collapseExample1">

                            <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel "></i>
                                </span>
                            </a> --}}
                        </div>
                        <div class="collapse show" id="collapseExample1">

                        <div class="card-body">
                            <div class="box-body row">
                                <!-- /.form group -->
                                <!-- Date and time range -->
                                <div class="form-group col-sm-3">
                                    <label for='datetimepicker1'>
                                        Day 1:
                                    </label>
                                    <div class="input-group  ">
                                        <input type="text" class="form-control" id="datetimepicker1" name="day_1" value="{{$course->day_1}}">

                                        <span class="input-group-addon">
                                                <i class="fa fa-fw fa-calendar"></i>
                                            </span>
                                              <select id="select21" class="form-control select2" style="width:100%" name="day_1_instructor" >
                                              <option value="{{$course->instructor_day_1}}" hidden selected>{{$course->instructorDay1->first_name.' '.$course->instructorDay1->last_name}}</option>

                                                @foreach($instructors as $instructor)
                                                  <option value="{{$instructor->id}}">
                                                    {{$instructor->first_name.' '.$instructor->last_name}}
                                                  </option>

                                                @endforeach

                                            </select>
                                    </div>
                                </div>

                                @if ($course->class_code == "38 Hour")


                                <div class="form-group col">
                                    <label for='datetimepicker1_2'>
                                        Day 2:
                                    </label>
                                    <div class="input-group  ">
                                        <input type="text" class="form-control" id="datetimepicker1_2" name="day_2" value="{{$course->day_2}}">
                                        <span class="input-group-addon">
                                                <i class="fa fa-fw fa-calendar"></i>
                                            </span>
                                            <select id="select21" class="form-control select2" style="width:100%" name="day_2_instructor" >
                                              <option value="{{$course->instructor_day_2}}" hidden selected>{{$course->instructorDay2->first_name.' '.$course->instructorDay2->last_name}}</option>


                                                @foreach($instructors as $instructor)
                                                  <option value="{{$instructor->id}}">
                                                    {{$instructor->first_name.' '.$instructor->last_name}}
                                                  </option>

                                                @endforeach

                                            </select>
                                    </div>
                                </div>
                                <div class="form-group col">
                                    <label for='datetimepicker1_3'>
                                        Day 3:
                                    </label>
                                    <div class="input-group  ">
                                        <input type="text" class="form-control" id="datetimepicker1_3" name="day_3" value="{{$course->day_3}}">
                                        <span class="input-group-addon">
                                                <i class="fa fa-fw fa-calendar"></i>
                                            </span>
                                            <select id="select21" class="form-control select2" style="width:100%" name="day_3_instructor" >
                                              <option value="{{$course->instructor_day_3}}" hidden selected>{{$course->instructorDay3->first_name.' '.$course->instructorDay3->last_name}}</option>



                                                @foreach($instructors as $instructor)
                                                  <option value="{{$instructor->id}}">
                                                    {{$instructor->first_name.' '.$instructor->last_name}}
                                                  </option>

                                                @endforeach

                                            </select>
                                    </div>
                                </div>
                                <div class="form-group col">
                                    <label for='datetimepicker1_4'>
                                        Day 4:
                                    </label>
                                    <div class="input-group  ">
                                        <input type="text" class="form-control" id="datetimepicker1_4" name="day_4" value="{{$course->day_4}}">
                                        <span class="input-group-addon">
                                                <i class="fa fa-fw fa-calendar"></i>
                                            </span>
                                            <select id="select21" class="form-control select2" style="width:100%" name="day_4_instructor" >
                                              <option value="{{$course->instructor_day_4}}" hidden selected>{{$course->instructorDay4->first_name.' '.$course->instructorDay4->last_name}}</option>



                                                @foreach($instructors as $instructor)
                                                  <option value="{{$instructor->id}}">
                                                    {{$instructor->first_name.' '.$instructor->last_name}}
                                                  </option>

                                                @endforeach

                                            </select>
                                    </div>
                                </div>
                                    @endif
                                {{-- <div class="form-group">
                                    <label for="datetimepicker2">
                                        Time Picker:
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-clock-o"></i>
                                        </div>
                                        <input id="datetimepicker2" size="30" value="" class="form-control">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <!-- Date and time range -->
                                <div class="form-group">
                                    <label for="datetimepicker_unixtime">
                                        Date Time Picker from Unixtime:
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-calendar"></i>
                                        </div>
                                        <input id="datetimepicker_unixtime" class="form-control" value="">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="datetimepicker7">
                                        MinDate and MaxDate:
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-calendar"></i>
                                        </div>
                                        <input class="form-control" id="datetimepicker7" value="">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group">
                                    <label for="datetimepicker8">
                                        Invert settings minDate and maxDate:
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-calendar"></i>
                                        </div>
                                        <input class="form-control" id="datetimepicker8">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="check_in_date">Check-In, Check-out Date Picker:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group m-t-10">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-calendar"></i></div>
                                            <input class="form-control" id="check_in_date" placeholder="Check-In Date">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group m-t-10">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-calendar"></i></div>
                                            <input class="form-control" id="check_out_date"
                                                   placeholder="Check Out Date">
                                        </div>
                                    </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                            </div>
                            <!-- /.form group -->
                            <!-- time picker --> --}}

                        </div><br />
                        <h3>Class Type</h3>

                        <div class="row col-sm-3">
                          <select id="select21" class="form-control select2" style="width:100%" name="class_type">
                            <option>38 Hour</option>
                            <option>14 Hour</option>
                            <option>Defensive Driving</option>
                            <option>Driver Improvement</option>
                            <option>Alcohol Education</option>

                          </select>

                        </div>
                {{-- <div class="col-md-6">
                    <div class="card border-warning">
                        <div class="card-header text-white bg-warning">
                            <h3 class="card-title d-inline">
                                <i class="fa fa-fw fa-calendar"></i> Air Date Picker
                            </h3>

                            <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel"></i>
                                </span>

                        </div>

                        <div class=" card-body">
                            <div class="box-body">
                                <!-- Date range -->
                                <div class="form-group">
                                    <label for="my-element">
                                        Date Picker:
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" data-language='en'
                                               id="my-element"/>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <!-- Date and time range -->
                                <div class="form-group">
                                    <label for="my-element1">
                                        Multiple Date Picker:
                                    </label>
                                    <div class="input-group clockpicker" data-placement="left" data-align="top"
                                         data-autoclose="true">
                                        <input type="text" class="form-control" data-language='en'
                                               data-multiple-dates="3" data-multiple-dates-separator=", "
                                               id="my-element1"/>
                                        <span class="input-group-addon">
                                            <i class="fa fa-fw fa-calendar"></i>
                                            </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="monthpicker">
                                        Month and Year selection:
                                    </label>
                                    <div class="input-group clockpicker-with-callbacks">
                                        <input type="text" class="form-control" data-language='en'
                                               data-min-view="months" data-view="months" data-date-format="MM yyyy"
                                               id="monthpicker"/>
                                        <span class="input-group-addon">
                                            <i class="fa fa-fw fa-calendar-o"></i>
                                            </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="minMaxExample">
                                        Minimum and Maximum Dates:
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-clock-o"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="minMaxExample">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <!-- Date and time range -->
                                <div class="form-group">
                                    <label for="timepick">
                                        Date and Time Picker:
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-calendar-o"></i>
                                        </div>
                                        <input id="timepick" class="form-control pull-right" data-language='en'
                                               data-timepicker="true" data-time-format='hh:ii aa'/>
                                    </div>
                                </div>
                                <!-- /.form group -->
                                <!-- time picker -->
                                <!-- range of dates -->
                                <div class="form-group">
                                    <label for="dateranges">
                                        Range of Dates:
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-calendar"></i>
                                        </div>
                                        <input type="text" data-range="true" data-multiple-dates-separator=" - "
                                               data-language="en" class="form-control" id="dateranges"/>
                                    </div>
                                </div>
                                <!-- /.form group -->
                                <!-- Disable days of week -->
                                <div class="form-group">
                                    <label for="disabled-days">
                                        Disable Days of Week:
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control" id="disabled-days"/>
                                    </div>
                                </div>
                                <!-- /.end Disable days of week -->
                                <!-- Modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#large_modal">Date Time picker Modal
                                </button>
                                <div id="large_modal" class="modal fade animated " role="dialog">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Date and Time Picker</h4>

                                                <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="input-group">
                                                    <input data-format="dd/MM/yyyy hh:mm:ss" type="text"
                                                           id="datetimepicker12" class="form-control"/>
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-fw fa-calendar"></i>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}




            </div>
            <div class="col-xl-6 col-lg-6 col-lg-6 col-12 col-sm-3 col-12">
                  <button type="submit"  class="btn btn-info btn_selection" id="set_first_option">
                          Update Class
                </button>
            </div>
</form>
<div class="bg-success">
    {{  Session::get('success')}}
</div>

            <!--main content ends-->
        </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js -->
<script type="text/javascript" src="{{asset('assets/vendors/moment/js/moment.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('assets/vendors/datetime/js/jquery.datetimepicker.full.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('assets/vendors/airdatepicker/js/datepicker.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('assets/vendors/airdatepicker/js/datepicker.en.js')}}" ></script>
<script type="text/javascript" src="{{asset('assets/js/custom_js/advanceddate_pickers.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/bootstrap-multiselect/js/bootstrap-multiselect.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/prettycheckable/js/prettyCheckable.min.js')}}"></script>
   <!--- labelauty -->
   <script type="text/javascript" src="{{asset('assets/vendors/jquerylabel/js/jquery-labelauty.js')}}"></script>
   <script type="text/javascript" src="{{asset('assets/vendors/iCheck/js/icheck.js')}}"></script>
   <script type="text/javascript" src="{{asset('assets/js/custom_js/radio_checkbox.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/select2/js/select2.js')}}"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>--}}
<script type="text/javascript" src="{{asset('assets/vendors/selectize/js/standalone/selectize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/iCheck/js/icheck.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/selectric/js/jquery.selectric.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom_js/custom_elements.js')}}"></script>
<!-- end of page level js -->
@stop
