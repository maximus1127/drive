@extends('layouts.schoolDefault')
@section('header_styles')
    <!--page level css -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/select2/css/select2.min.css')}}" >
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/select2/css/select2-bootstrap.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" >
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/iCheck/css/all.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom_css/wizard.css')}}" >
    <!--end of page level css-->
@stop

@section('content')

  <div class="card-body">
                              <div class="stepwizard">
                                  <div class="stepwizard-row setup-panel">
                                      <div class="stepwizard-step">
                                          <a href="#step-1" class="btn btn-primary btn-circle ">1</a>
                                          <p>Step 1</p>
                                      </div>
                                      <div class="stepwizard-step">
                                          <a href="#step-2" class="btn btn-default btn-circle ">2</a>
                                          <p>Step 2</p>
                                      </div>
                                      <div class="stepwizard-step">
                                          <a href="#step-3" class="btn btn-default btn-circle ">3</a>
                                          <p>Step 3</p>
                                      </div>
                                  </div>
                              </div>
                              <form role="form" method="post" action="{{route('submit.application')}}">
                                  <div class="row setup-content" id="step-1">
                                      <div class="col-12">
                                          <div class="col-md-6">
                                              <h3> Step 1</h3>
                                              <div class="form-group">
                                                  <label for="step_fname" class="control-label">First Name</label>
                                                  <input id="step_fname" maxlength="100" type="text" class="form-control" name="fname"
                                                         placeholder="Enter First Name"/>
                                              </div>
                                              <div class="form-group">
                                                  <label for="step_mname" class="control-label">Middle Name</label>
                                                  <input id="step_mname" maxlength="100" type="text" class="form-control" name="mname"
                                                         placeholder="Enter Middle Name"/>
                                              </div>
                                              <div class="form-group">
                                                  <label for="step_lname" class="control-label">Last Name</label>
                                                  <input id="step_lname" maxlength="100" type="text" class="form-control" name="lname"
                                                         placeholder="Enter Last Name"/>
                                              </div>
                                              <div class="form-group">
                                                  <label for="step_dob" class="control-label">Date of Birth</label>
                                                  <input id="step_dob" maxlength="100" type="text" class="form-control" name="dob"
                                                         placeholder="MM/DD/YYYY"/>
                                              </div>
                                              <div class="form-group">
                                                  <label for="step_social" class="control-label">Social Security Number</label>
                                                  <input id="step_social" maxlength="100" type="text" class="form-control" name="ssn"
                                                         placeholder="xxx-xxx-xxxx"/>
                                              </div>



                                          <button class="btn btn-primary nextBtn pull-right" type="button">
                                              Next
                                          </button>
                                            </div>
                                      </div>
                                  </div>
                                  <div class="row setup-content" id="step-2">
                                      <div class="col-12">
                                          <div class="col-md-6">
                                              <h3> Step 2</h3>
                                              <div class="form-group">
                                                  <label for="step_dlnum" class="control-label">Drivers License Number</label>
                                                  <input id="step_dlnum" maxlength="100" type="text" name="dlnum"
                                                         class="form-control"
                                                         placeholder="Drivers License Number"/>
                                              </div>
                                              <div class="form-group">
                                                  <label for="step_dlstate" class="control-label">Drivers License State Issued</label>
                                                  <input id="step_dlstate" maxlength="100" type="text" name="dlstate"
                                                         class="form-control"
                                                         placeholder="State of Issuance"/>
                                              </div>
                                              <div class="form-group row">
                                                  <label class="col-lg-2 col-md-2  col-sm-12 col-12 col-form-label m-t-ng-8 text-lg-right text-md-right text-left">Race</label>
                                                  <div class="col-lg-10 col-md-10  col-sm-12 col-12">
                                                      <div class="iradio">
                                                          <label>
                                                              <input type="radio" id="optionsRadios1" name="race"
                                                                     value="Caucasian"> Caucasian
                                                          </label>
                                                      </div>
                                                      <div class="iradio">
                                                          <label>
                                                              <input type="radio"  id="optionsRadios2" name="race"
                                                                     value="African-American"> African-American
                                                          </label>
                                                      </div>
                                                      <div class="iradio">
                                                          <label>
                                                              <input type="radio"  id="optionsRadios3" name="race"
                                                                     value="Hispanic"> Hispanice
                                                          </label>
                                                      </div>
                                                      <div class="iradio">
                                                          <label>
                                                              <input type="radio"  id="optionsRadios4" name="race"
                                                                     value="option2"> Asian
                                                          </label>
                                                      </div>
                                                  </div>
                                                  <br /><hr /><br />

                                              </div>
                                              <div class="form-group row">
                                            <label class="col-lg-2 col-md-2  col-sm-12 col-12 col-form-label m-t-ng-8 text-lg-right text-md-right text-left">Sex</label>
                                            <div class="col-lg-10 col-md-10  col-sm-12 col-12">
                                                <div class="iradio">
                                                    <label>
                                                        <input type="radio" name="sex" id="optionsRadios4"
                                                               value="Male"> Male
                                                    </label>
                                                </div>
                                                <div class="iradio">
                                                    <label>
                                                        <input type="radio" name="sex" id="optionsRadios5"
                                                               value="Female"> Female
                                                    </label>
                                                </div>

                                            </div>
                                          </div>
                                              <div class="form-group">
                                                  <label for="step_cpwd" class="control-label">Position Applied For:</label>
                                                  <input id="step_cpwd" maxlength="50" type="text" name="position"
                                                         class="form-control"
                                                         placeholder="Ex: In-car Instructor, Classroom Instructor, Road Skills Testor"/>
                                              </div>
                                              <button class="btn btn-primary prevBtn pull-left" type="button">
                                                  Previous
                                              </button>
                                              <button class="btn btn-primary nextBtn pull-right" type="button">
                                                  Next
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row setup-content" id="step-3">
                                      <div class="col-12">
                                          <div class="col-md-6 ">
                                              <h3> Step 3</h3>
                                              <div class="form-group">
                                                <div class="form-group">
                                                    <label for="step_height" class="control-label">Height</label>
                                                    <input id="step_height" maxlength="100" type="text" class="form-control" name="height"
                                                           />
                                                </div>
                                                <div class="form-group">
                                                    <label for="step_weight" class="control-label">Weight</label>
                                                    <input id="step_weight" maxlength="100" type="text" class="form-control" name="weight"
                                                           />
                                                </div>
                                                <div class="form-group">
                                                    <label for="step_haircolor" class="control-label">Hair Color</label>
                                                    <input id="step_haircolor" maxlength="100" type="text" class="form-control" name="hair"
                                                           />
                                                </div>
                                                <div class="form-group">
                                                    <label for="step_eyecolor" class="control-label">Eye Color</label>
                                                    <input id="step_eyecolor" maxlength="100" type="text" class="form-control" name="eyes"
                                                           />
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                  <button class="btn btn-primary prevBtn pull-left" type="button">
                                                      Previous
                                                  </button>
                                                  <button class="btn btn-success pull-right" type="submit">
                                                      Finish!
                                                  </button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  @csrf
                              </form>
                          </div>




@endsection

@section('footer_scripts')
    <!-- begining of page level js -->
<script type="text/javascript" src="{{asset('assets/vendors/iCheck/js/icheck.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/moment/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/select2/js/select2.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/bootstrapwizard/js/jquery.bootstrap.wizard.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom_js/form_wizards.js')}}"></script>
    <!-- end of page level js -->
@stop
