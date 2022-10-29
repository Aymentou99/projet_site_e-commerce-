<?php

namespace App\Http\Controllers\Auth;

use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    // protected $redirectTo = '/home';


    // Use ANY ONE ===> the above code OR below code

    //Second method to Redirect with Message ("STATUS") eg: welcome to dashboard
    protected function authenticated(Request $request)
    {
        Session::forget('error_message');
        Session::forget('success_message');

        $user = User::where('email', $request->email)->first();
        $request->session()->put('user', $user);






        $validate = Validator::make(
            $request->all(),
            [

                'email' => 'required|email',
                'password' => 'required',


            ],
            [




                'email.email'    => 'must be correct email ',
                'email.required' => 'email is required',
                'password.required' => 'password is required',

            ]
        );

        if ($validate->fails()) {
            return redirect('login')
                ->withErrors($validate)
                ->withInput();
        }



        if (Auth::user()->status == 0) {
            Auth::logout();
            $message = "Your Account is not activated yet ! please confirm your email to activate";
            Session::put('error_message', $message);
            return redirect()->back();
        }




        if (Auth::user()->role_as == '1') //1 = Admin Login
        {

            return redirect('/dashboard')->with('status', 'Logged in successfully');
        } elseif (Auth::user()->role_as == '0') // Normal or Default User Login
        {
            return redirect('/')->with('status', 'Logged in successfully');
        }
    }
}
