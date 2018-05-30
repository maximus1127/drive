@extends('layouts.auditorDefault')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">

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

        <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/datatables/css/rowReorder.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/datatables/css/colReorder.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/datatables/css/scroller.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datatablesmark.js/css/datatables.mark.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom_css/responsive_datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatable.css')}}">

    </section>
    <!-- Main content -->
    <section class="content">

      <h1>{{$school->name}}</h1>
    <div class="info-block">
<p>{{$school->address_1}}<br>{{$school->city.', '.$school->state.' '.$school->zip_code}}</p>
    <p><b>Phone:</b> {{$school->phone}}</p>
<p><b>State License Number:</b> {{$school->school_id}} </p>

    </div>
      <div class="row">
                <div class="col-lg-12">
                    <div class="card border-primary">
                        <div class="card-header text-white bg-primary">
                            <h3 class="card-title d-inline">
                                <i class="fa fa-fw fa-align-justify"></i> Classes
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table horizontal_table table-striped" cellspacing="0" id="table1">
                                <thead>
                                <tr>
                                  <th>Class Type</th>
                                  <th>Date 1</th>
                                  <th>Date 2</th>
                                  <th>Date 3</th>
                                  <th>Date 4</th>
                                  <th>Number Enrolled </th>

                                </tr>
                                </thead>
                                <tbody>
                                  @foreach ($school->course as $class)
                                    @php ($number = count($class->roster()->get()))


                                     <tr>
                                         <td>{{$class->class_code}}</td>
                                         <td>{{$class->day_1}}</td>
                                          <td>{{$class->day_2}}</td>
                                          <td>{{$class->day_3}}</td>
                                          <td>{{$class->day_4}}</td>
                                         <td><a href="{{route('rosterView', $class->id)}}">{{$number}}</a></td>


                                       </tr>
                                      @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row">

                <div class="col-lg-12">
                   <div class="card border-success filterable">
                       <div class="card-header text-white bg-success">
                           <h3 class="card-title d-inline">
                               <i class="fa fa-fw fa-paragraph"></i> Instructors
                           </h3>
                       </div>
                       <div class="card-body">
                           <div class="table-responsive">
                               <table class="table table-striped table-bordered" cellspacing="0" id="table2" >
                                   <thead>
                                     <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Drivers License</th>
                                        <th scope="col">State License</th>
                                        <th scope="col">State License Exp</th>
                                          <th scope="col">Phone</th>
                                      </tr>
                                   </thead>
                                   <tbody>
                                     @foreach($school->instructor as $employee)
                                        <tr>
                                            <td>{{$employee->first_name.' '.$employee->last_name}}</td>
                                         <td>{{$employee->drivers_license}}</td>
                                         <td>{{$employee->state_license}}</td>
                                            <td>{{$employee->state_license_exp}}</td>
                                            <td>{{$employee->phone}}</td>

                                          </tr>
                                         @endforeach

                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>

             </div>
               <div class="row">
                          <div class="col-lg-12">
                              <div class="card card-primary">
                                  <div class="card-header text-white bg-primary">
                                      <h3 class="card-title d-inline">
                                          <i class="fa fa-fw fa-table"></i> Cars
                                      </h3>
                                      <span class="pull-right">
                                                  <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                  <i class="fa fa-fw fa-times removepanel clickable"></i>
                                              </span>
                                  </div>
                                  <div class="card-body">
                                      <div class="table-responsive">
                                          <table class="table table-bordered table-striped">
                                              <thead>
                                                <tr>
                                                  <th scope="col">Make</th>
                                                  <th scope="col">Model</th>
                                                  <th scope="col">Year</th>
                                                  <th scope="col">Plate</th>
                                                    <th scope="col">Last 6 Vin</th>
                                                    <th scope="col">Start Mileage</th>
                                                    <th scope="col">Logged Mileage Total</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                @foreach($school->car as $car)
                                                   <tr>
                                                    <td>{{$car->make}}</td>
                                                    <td>{{$car->model}}</td>
                                                    <td>{{$car->year}}</td>
                                                       <td>{{$car->plate}}</td>
                                                       <td><a href="{{route('carLog', $car->id)}}">{{$car->vin}}</a></td>
                                                       <td>{{$car->start_mileage}}</td>
                                                       <td>{{$car->logged_miles}}</td>


                                                     </tr>
                                                    @endforeach
                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>








        <!-- First Basic Table Ends Here-->
        <!-- Second Data Table Starts Here-->

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
 <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}"></script>
 <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap4.js') }}"></script>
 <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.rowReorder.js') }}"></script>
 <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.scroller.js') }}"></script>
 <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.buttons.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.colReorder.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.responsive.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.colVis.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.html5.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.bootstrap4.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.print.js')}}"></script>
 <script charset="UTF-8" src="{{asset('assets/vendors/mark_js/js/jquery.mark.js')}}"></script>
 <script charset="UTF-8" src="{{asset('assets/vendors/datatablesmark.js/js/datatables.mark.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/js/custom_js/responsive_datatables.js')}}"></script>

    <!-- end of page level js -->
@stop
