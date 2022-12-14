<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CartController extends Controller
{
    public function addProduct(Request $request)
    {

        $product_id = $request->input('product_id');
        $product_qty =
            $request->input('qty');
        if (Auth::check()) {

            $prod_check = Product::where('id', $product_id)->first();

            if ($prod_check) {

                if (Cart::where('prod_id', $product_id)->where('user_id', Auth::id())->exists()) {

                    return response()->json(['status' => $prod_check->name_en . " alreaday Added To Cart"]);
                } else {

                    $cartItem = new Cart();
                    $cartItem->prod_id = $product_id;
                    $cartItem->user_id = Auth::id();
                    $cartItem->prod_qty = $product_qty;
                    $cartItem->save();
                    return redirect()->route('shop');
                }
            }
        } else {


            return response()->json(['status' => "login to continue"]);
        }
    }
    public function update(Request $request)
    {
        $product_id = $request->input('prod_id');
        $product_qty = $request->input('prod_qty');
        if (Auth::check()) {


            $cartb = Cart::where('prod_id', $product_id)->where('user_id', Auth::id())->exists();
            if ($cartb) {


                $cart =   Cart::where('prod_id', $product_id)->where('user_id', Auth::id())->first();

                $cart->prod_qty = $product_qty;
                $cart->update();

                return response()->json(['status' => "quantity updated"]);
            }
        }
    }

    public function viewcart()
    {




        $cartitem = Cart::where('user_id', Auth::id())->get();
        return view('FrontEnd.cart', compact('cartitem'));
    }

    public function deleteproduct(Request $request)
    {

        if (Auth::check()) {


            $prod_id = $request->input('product_id');

            if (Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()) {


                $cartItem =     Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();


                $cartItem->delete();


                return response()->json(['status' => "Product deleted successfully"]);
            }
        }
    }
}
