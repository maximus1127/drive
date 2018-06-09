
<head>
    <title>::Admin Login::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}"/>
    <!-- Bootstrap -->
    <link href="{{asset('assets/css/app.css')}}" rel="stylesheet">

    <!-- end of bootstrap -->
    <!--page level css -->
    <link type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/vendors/iCheck/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/login.css')}}" rel="stylesheet">
    <!--end page level css-->
</head>

<body>
<div class="preloader">
    <div class="loader_img"><img src="{{asset('assets/img/loader.gif')}}" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">

        <div class="card-header nocolor">
            <h2 class="text-center">
                Log In or
                <a href="register2">Sign Up</a>
            </h2>
        </div>
    <div class="row">
    <div class="col-md-10 ml-auto">
        <div class="card-body social">
            {{-- <div class="row">
            <div class="col-12 col-sm-3">
                <a href="#" class="btn btn-lg btn-block btn-facebook"> <i class="fa fa-facebook-square fa-lg"></i>
                    <span class="hidden-sm hidden-xs">Facebook</span>
                </a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="#" class="btn btn-lg btn-block btn-twitter"> <i class="fa fa-twitter-square fa-lg"></i>
                    <span class="hidden-sm hidden-xs">Twitter</span>
                </a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="#" class="btn btn-lg btn-block btn-google">
                    <i class="fa fa-google-plus-square fa-lg"></i>
                    <span class="hidden-sm hidden-xs">Google+</span>
                </a>
            </div>
            </div> --}}
            <div class="clearfix">
                {{-- <div class="col-12 col-sm-9">
                    <hr class="omb_hrOr">
                    <span class="omb_spanOr">or</span>
                </div> --}}
                <div class="clearfix"></div>
                <div class="col-12 col-sm-6 form_width">
                  <form method="POST" action="{{ route('login') }}">
                      @csrf

                      <div class="form-group row">
                          <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                              @if ($errors->has('email'))
                                  <span class="invalid-feedback">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>


                      <div class="form-group row">
                          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                              @if ($errors->has('password'))
                                  <span class="invalid-feedback">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-md-6 offset-md-4">
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                  </label>
                              </div>
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Login') }}
                              </button>

                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                  {{ __('Forgot Your Password?') }}
                              </a>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
            </div>
        </div>
    </div>

</div>
<!-- global js -->
<script src="{{asset('assets/js/app.js')}}" type="text/javascript"></script>

<!-- end of global js -->
<!-- page level js -->
<script type="text/javascript" src="{{asset('assets/vendors/iCheck/js/icheck.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('assets/js/custom_js/login2.js')}}"></script>
<!-- end of page level js -->
</body>
