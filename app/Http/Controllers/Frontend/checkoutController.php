<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Notifications\AddOrder;
use App\Notifications\emailorder;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Notifications\MyFirstNotification;
use Illuminate\Support\Facades\Notification;

class checkoutController extends Controller
{
    public function index()
    {






        $cart = Cart::where('user_id', Auth::id())->get();
        return view('FrontEnd.checkout', compact('cart'));
    }






    public function placeOrder(Request $request)
    {
        $OrderItemv = new  OrderItem();
        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->country = $request->input('country');
        $order->phone = $request->input('phone');
        $order->note = $request->input('note');
        $order->address = $request->input('address');

        $totalor = 0;
        $order->tracking_no = 'user' . rand(1111, 9999);


        $cartItems = Cart::where('user_id', Auth::id())->get();

        $total = 0.00;
        $cartItems_total
            = Cart::where('user_id', Auth::id())->get();
        foreach ($cartItems_total as $item) {

            $total += ((int)$item->prod_qty * (int)$item->products->price);
        }
        $order->totalprice =
            (string) $total;



        $totalor =
            $order->totalprice;

        $order->save();
        foreach ($cartItems as $item) {



            $OrderItemv->order_id = $order->id;
            $OrderItemv->prod_id = $item->prod_id;
            $OrderItemv->price = $item->products->price;
            $OrderItemv->qty = $item->prod_qty;

            $OrderItemv->save();




            $prod = Product::where('id', $item->prod_id)->first();

            $prod->qty = (string) (intval($prod->qty) - intval($item->prod_qty));

            $prod->update();
        }


        $cartold = Cart::where('user_id', Auth::id())->get();

        foreach ($cartold as $item) {
            $produ =  Product::where('id', $item->prod_id)->where('qty', '>=', $item->prod_qty)->exists();
            if (!$produ) {

                $removeItem = Cart::where('user_id', Auth::id())->where('prod_id', $item->prod_id)->first();
                $removeItem->delete();
            }
        }


        $user = User::get();

        $order = Order::latest()->where('status', "pending")->first();
        Notification::send($user, new \App\Notifications\AddOrder($order));



        $email = "admin1@gmail.com";


        $orderarry
            = DB::table('order_items_tables')->where('order_id', $order->id)
            ->join('products', 'order_items_tables.prod_id', '=', 'products.id')
            ->selectRaw('products.name_en  ,order_items_tables.qty  , order_items_tables.price')->get()->toArray();





        $messageData = [
            'email' => $request->email,
            'fname' => $request->name,
            'lname' => $request->lname,
            'country' => $request->country,
            'phone' => $request->phone,
            'Order_id' =>
            $order->id,
            'totalprice' => $totalor,
            'OrderItemv' => $orderarry

        ];



        Mail::send('email.emailorder',  $messageData, function ($message) use ($email) {


            $message->to($email)->subject('Order placed E-commerce ');
        });










        $cartd =  Cart::where('user_id', Auth::id());

        $cartd->delete();






        return  redirect('/')->with('status', "order placed successfully");
    }
}
