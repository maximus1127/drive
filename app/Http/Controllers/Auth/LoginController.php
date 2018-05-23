<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';
    protected function authenticated($request, $user)
   {
      $user = Auth::user();
       if($user->role == 'employee') {
           return redirect(route('school'));
       } else if($user->role == 'auditor_admin'){
         return redirect(route('auditor'));
       } else if($user->role == 'auditor'){
         return redirect(route('auditor'));
       } else if($user->role == 'school_admin'){
         return redirect(route('school'));
       }

       return redirect()->route('user');
   }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
