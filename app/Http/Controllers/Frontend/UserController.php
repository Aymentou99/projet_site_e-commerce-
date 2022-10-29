<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {

        $orders = Order::where('user_id', Auth::id())->get();

        return view('FrontEnd.order.index', compact('orders'));
    }
    public function view($id)
    {



        $orders
            = Order::where('id', $id)->where('user_id', Auth::id())->first();



        return view('FrontEnd.order.view', compact('orders'));
    }

    public function cartcount()
    {

        $cartcount = Cart::where('user_id', Auth::id())->count();



        return response()->json(['count' => $cartcount]);
    }




    public function editprofil(Request $request, $id)
    {
        $admin = User::find($id);
        $admin->email = $request->input('email');
        $admin->email = Hash::make($request->input('password'));

        $admin->update();

        return redirect('/dashboard')->with('status', "profil  Update successfully");
    }

    public function confirm($email)
    {

        $email = base64_decode($email);


        $usercount = User::where('email', $email)->count();

        if ($usercount > 0) {
            $user = User::where('email', $email)->first();


            if ($user->status == 1) {


                $message = "  your email  is alerday activated  please login";

                Session::put('success_message', $message);


                return redirect('login');
            } else {

                $message = "  your email  account is activated please login";

                $user = User::where('email', $email)->update(['status' => 1]);

                Session::put('success_message', $message);


                return redirect('login');
            }
        } else {



            abort(404);
        }
    }
}
