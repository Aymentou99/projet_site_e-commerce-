<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function storeUser(Request $request)
    {
        Session::forget('error_message');
        Session::forget('success_message');
        $validate = Validator::make(
            $request->all(),
            [

                'check-register' => 'required',
                'name' => 'required|string|max:191',
                'lname' => 'required|string|max:191',
                'email' => 'required|email|string|unique:users',
                'password' => 'required|min:6|max:8',

                'phone' => 'required',


                'password_confirmation' => 'required|min:8|same:password',
            ],
            [

                'check-register.required'  => 'privacy policy is required  ',
                'email.email'    => 'must be correct email ',
                'name.max'    => 'name too long ',
                'name.string'    => 'name is must be string',
                'email.string' => 'email is  must be string',
                'email.unique' => 'email is unique',
                'lname.string' => 'lname is must be string',
                'lname.max' => 'lname is  too long',

                'phone.numeric' => 'phone must be numeric',

                'password.max' => 'password is  must be at most 8 characters',
                'password.min' => 'password is  must be at least 6 characters',


                'password_confirmation.same' => 'Password Confirmation should match the Password',
                'password_confirmation.max' => 'password is  must be at most 8 characters',
                'password_confirmation.min' => 'password is  must be at least 6 characters',

                'name.required'    => 'name is required',
                'email.required' => 'email is required',
                'password.required' => 'password is required',
                'lname.required' => 'lname is required',
                'phone.required' => 'phone is required',


                'password_confirmation.required' => 'password_confirmation is required',



            ]
        );

        if ($validate->fails()) {
            return redirect('register1')
                ->withErrors($validate)
                ->withInput();
        }



        User::create([
            'name' => $request->name,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,

            'password' => Hash::make($request->password),
        ]);


        $email
            = $request->email;

        $messageData = [
            'email' => $request->email,
            'name' => $request->name,
            'lname' => $request->lname,
            'code' => base64_encode($request->email)

        ];



        Mail::send('email.registerconfirmation',  $messageData, function ($message) use ($email) {


            $message->to($email)->subject('confirm your E-commerce Account');
        });


        $message = "Please confirm  your email  to activate your account!!";

        Session::put('success_message', $message);




        return redirect()->back();
    }
}
