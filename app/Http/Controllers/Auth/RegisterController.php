<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'last_name' => 'required|string',
            'middle_name' => 'min:2|string',
             'parent_first_name' => 'required|string',
             'parent_last_name' => 'required|string',
             'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'required|string',
             'dob' => 'required|string',
            'phone_1' => 'required|string',
            'phone_2' => 'min:7|string',
             'email_2' => 'email|string',
             'permit_number' => 'required|string',
              'school_id' => 'required',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'last_name' => $data['last_name'],
            'middle_name' => $data['middle_name'],
             'parent_first_name' => $data['parent_first_name'],
             'parent_last_name' => $data['parent_last_name'],
             'address_1' => $data['address'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip_code' => $data['zip_code'],
             'dob' => $data['dob'],
            'phone_1' => $data['phone_1'],
            'phone_2' => $data['phone_2'],
             'email_2' => $data['email_2'],
             'student_id' => $data['permit_number'],
              'school_id' => $data['school_id'],

        ]);


    }
}
