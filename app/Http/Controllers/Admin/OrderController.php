<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{


    public function index()
    {
        $orders = Order::where('status', '0')->paginate('6');



        return view('adminf.orders.index', compact('orders'));
    }



    public function views($id)
    {
        $orders = Order::where('id', $id)->first();



        return view('adminf.orders.view', compact('orders'));
    }


    public function UpdateOrder(Request $request, $id)
    {
        $orders = Order::find($id);
        $orders->status
            = $request->input('order_status');
        $orders->update();

        return redirect('orders')->with('status', "order Update successfully");
    }

    public function orderhistory()
    {
        $orders = Order::where('status', '1')->get();



        return view('adminf.orders.hist', compact('orders'));
    }
}
