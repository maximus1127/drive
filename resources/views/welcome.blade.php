@extends('layouts.app')


@section('content')

  <div class="container">
    <div class="half">

              <div class="card">
                  <div class="card-header">{{ __('Login') }}</div>

                  <div class="card-body">
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



{{-- registration form --}}


      <div class="half">

              <div class="card">
                  <div class="card-header">{{ __('Register') }}</div>

                  <div class="card-body">
                      <form method="POST" action="{{ route('register') }}">
                          @csrf

                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

                                  @if ($errors->has('name'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                              <div class="col-md-6">
                                  <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required>

                                  @if ($errors->has('last_name'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('last_name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

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
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                              <div class="col-md-6">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="middle_name" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                              <div class="col-md-6">
                                  <input id="middle_name" type="text" class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}" name="middle_name" value="{{ old('middle_name') }}">

                                  @if ($errors->has('middle_name'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('middle_name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="parent_first_name" class="col-md-4 col-form-label text-md-right">{{ __('Parent First Name') }}</label>

                              <div class="col-md-6">
                                  <input id="parent_first_name" type="text" class="form-control{{ $errors->has('parent_first_name') ? ' is-invalid' : '' }}" name="parent_first_name" value="{{ old('parent_first_name') }}" required>

                                  @if ($errors->has('parent_first_name'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('parent_first_name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="parent_last_name" class="col-md-4 col-form-label text-md-right">{{ __('Parent Last Name') }}</label>

                              <div class="col-md-6">
                                  <input id="parent_last_name" type="text" class="form-control{{ $errors->has('parent_last_name') ? ' is-invalid' : '' }}" name="parent_last_name" value="{{ old('parent_last_name') }}" required>

                                  @if ($errors->has('parent_last_name'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('parent_last_name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>


                          <div class="form-group row">
                              <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                              <div class="col-md-6">
                                  <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>

                                  @if ($errors->has('address'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('address') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                              <div class="col-md-6">
                                  <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required>

                                  @if ($errors->has('city'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('city') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                              <div class="col-md-6">
                                  <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="Louisiana" required>

                                  @if ($errors->has('state'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('state') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>


                          <div class="form-group row">
                              <label for="zip_code" class="col-md-4 col-form-label text-md-right">{{ __('Zip Code') }}</label>

                              <div class="col-md-6">
                                  <input id="zip_code" type="text" class="form-control{{ $errors->has('zip_code') ? ' is-invalid' : '' }}" name="zip_code" value="{{ old('zip_code') }}" required>

                                  @if ($errors->has('zip_code'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('zip_code') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                            <div class="form-group row">
                              <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Birthday') }}</label>

                              <div class="col-md-6">
                                  <input id="dob" type="text" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" required>

                                  @if ($errors->has('dob'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('dob') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="phone_1" class="col-md-4 col-form-label text-md-right">{{ __('Phone 1') }}</label>

                              <div class="col-md-6">
                                  <input id="phone_1" type="text" class="form-control{{ $errors->has('phone_1') ? ' is-invalid' : '' }}" name="phone_1" value="{{ old('phone_1') }}" required>

                                  @if ($errors->has('phone_1'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('phone_1') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="phone_2" class="col-md-4 col-form-label text-md-right">{{ __('Phone 2') }}</label>

                              <div class="col-md-6">
                                  <input id="phone_2" type="text" class="form-control{{ $errors->has('phone_2') ? ' is-invalid' : '' }}" name="phone_2" value="{{ old('phone_2') }}">

                                  @if ($errors->has('phone_2'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('phone_2') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="email_2" class="col-md-4 col-form-label text-md-right">{{ __('Email 2') }}</label>

                              <div class="col-md-6">
                                  <input id="email_2" type="text" class="form-control{{ $errors->has('email_2') ? ' is-invalid' : '' }}" name="email_2" value="{{ old('email_2') }}">

                                  @if ($errors->has('email_2'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('email_2') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="permit_number" class="col-md-4 col-form-label text-md-right">{{ __('Permit Number') }}</label>

                              <div class="col-md-6">
                                  <input id="permit_number" type="text" class="form-control{{ $errors->has('permit_number') ? ' is-invalid' : '' }}" name="permit_number" value="{{ old('permit_number') }}" required>

                                  @if ($errors->has('permit_number'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('permit_number') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          @php(
                            $school = rand(1,5)
                          )
                                  <input id="school_id" type="hidden" name="school_id" value="{{ $school }}">



                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Register') }}
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>





@endsection
