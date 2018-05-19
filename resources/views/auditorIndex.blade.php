@extends('layouts.auditorDefault')

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

    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
                <div class="col-lg-6">
                    <div class="card border-primary">
                        <div class="card-header text-white bg-primary">
                            <h3 class="card-title d-inline">
                                <i class="fa fa-fw fa-align-justify"></i> School Directory
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table horizontal_table table-striped" cellspacing="0" id="table1">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>

                                </tr>
                                </thead>
                                <tbody>
                                  @foreach ($schools as $school)
                                    <tr>
                                      <td>
                                        {{$school->name}}
                                      </td>
                                      <td>
                                        {{$school->address_1.', '.$school->city}}
                                      </td>
                                      <td>
                                        {{$school->phone}}
                                      </td>
                                    </tr>


                                  @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                   <div class="card border-success filterable">
                       <div class="card-header text-white bg-success">
                           <h3 class="card-title d-inline">
                               <i class="fa fa-fw fa-paragraph"></i> Students
                           </h3>
                       </div>
                       <div class="card-body">
                           <div class="table-responsive">
                               <table class="table table-striped table-bordered" cellspacing="0" id="table2" >
                                   <thead>
                                   <tr>
                                       <th>Name</th>
                                       <th>Birthday</th>
                                       <th>Permit Number</th>
                                       <th>

                                       </th>

                                   </tr>
                                   </thead>
                                   <tbody>
                                     @foreach ($students as $student)
                                       <tr>
                                         <td>
                                           {{$student->name.' '.$student->last_name}}
                                         </td>
                                         <td>
                                           {{$student->dob}}
                                         </td>
                                         <td>
                                           {{$student->drivers_license}}
                                         </td>
                                         <td>
                                        <a href="{{route('student.profile' , $student->id)}}" class="btn btn-sm btn-primary">View Details</a>
                                         </td>
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
