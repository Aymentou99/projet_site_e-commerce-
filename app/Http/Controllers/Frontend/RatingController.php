<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use App\Models\Rating;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function  add(Request $request)
    {








        $stars_rated = $request->input('product_rating');

        $product_id = $request->input('product_id');

        $product_check = Product::where('id', $product_id)->where('status', '0')->first();

        if ($product_check) {


            $verified_purchase = Order::where('orders.user_id', Auth::id())->join('order_items_tables', 'orders.id', 'order_items_tables.order_id')->where('order_items_tables.prod_id', $product_id)->get();

            if ($verified_purchase) {
                $rateexist
                    =  Rating::where('user_id', Auth::id())->where('prod_id', $product_id)->first();
                if ($rateexist) {
                    $rateexist->stars_rated =   $stars_rated;
                    $rateexist->update();
                } else {

                    $rate = new Rating();

                    $rate->user_id = Auth::id();
                    $rate->prod_id = $product_id;

                    $rate->stars_rated = $stars_rated;

                    $rate->save();
                }
                return  redirect()->back()->with('status', "Thank you for Rating  this product");
            } else {





                return  redirect()->back()->with('status', "You Cannot rate this product without purchase");
            }
        } else {



            return  redirect('/')->back()->with('status', "the link ins broken");
        }
    }
}
