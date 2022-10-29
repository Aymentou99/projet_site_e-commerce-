<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Rating;
use App\Models\Product;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontEndController extends Controller
{

    public function index()
    {
        $featured_products = Product::all();
        $trending_Category = Category::all();
        $products = Product::paginate(4);
        $cart = Cart::all();
        $count = Cart::count();
        return view('layouts.inc.home', compact('featured_products', 'trending_Category', 'cart', 'count', 'products'));
    }
    public function searchhere(Request $request)
    {
        $searchq = $_GET['query'];

        if (isset($searchq)) {

            $locale =   app()->getLocale();
            $featured_products = Product::select('name_en', 'name_ja')->where('name_' . $locale, 'LIKE', '%' . $searchq . '%')->paginate(6);


            return view('layouts.inc.home', compact('featured_products'));
        } else {
            $featured_products = Product::paginate(6);
            return view('layouts.inc.home', compact('featured_products'));
        }
    }

    public function cpidea()
    {
        $count = Cart::count();
        $cart  = Cart::all();
        return view('layouts.inc.cpidea', compact('cart', 'count'));
    }


    public function cp()
    {
        $count = Cart::count();
        $cart  = Cart::all();
        return view('layouts.inc.cpcontactus', compact('cart', 'count'));
    }

    public function viewcategory($slug)
    {

        if (category::where('slug_en', $slug)->exists()) {

            $category = category::where('slug_en', $slug)->first();
            $products = Product::where('cate_id', $category->id)->where('status', '0')->get();

            return view('FrontEnd.Products.index', compact('category', 'products'));
        } else {


            return redirect('/')->with('status', "slug does nont exists");
        }
    }



    public function productview($cate_slug, $prod_slug)
    {



        if (category::where('slug_en', $cate_slug)->exists()) {

            if (Product::where('slug_en', $prod_slug)->exists()) {





                $products =     Product::where('slug_en', $prod_slug)->first();
                $rate = Rating::where('prod_id', $products->id)->get();
                $ratesum = Rating::where('prod_id', $products->id)->sum('stars_rated');
                $user_ratings = Rating::where('prod_id', $products->id)->where('user_id', Auth::id())->first();
                $ratevalue = 0;
                if ($rate->count() > 0) {
                    $ratevalue
                        = $ratesum / $rate->count();
                }
                return view('FrontEnd.Products.viewproducts', compact('rate', 'products', 'ratevalue', 'user_ratings'));
            } else {





                return redirect('/')->with('status', "the link was broken  ");
            }
        } else {


            return redirect('/')->with('status', "No such category found");
        }
    }


    public function AboutUs()
    {
        $count = Cart::count();
        $cart  = Cart::all();

        return view('layouts.inc.about', compact('cart', 'count'));
    }


    public function  productviewp($id)
    {
        $products =     Product::where('id', $id)->first();
        $rate = Rating::where('prod_id', $products->id)->get();
        $ratesum = Rating::where('prod_id', $products->id)->sum('stars_rated');
        $user_ratings = Rating::where('prod_id', $products->id)->where('user_id', Auth::id())->first();
        $ratevalue = 0;
        if ($rate->count() > 0) {
            $ratevalue
                = $ratesum / $rate->count();
        }
        return view('layouts.inc.viewproducts', compact('rate', 'products', 'ratevalue', 'user_ratings'));
    }






    public function  viewshop()
    {


        $count = Cart::count();
        $products = Product::paginate(4);

        $cart = Cart::all();
        $category  = Category::all();
        return view('FrontEnd.shop', compact('products', 'cart', 'category', 'count'));
    }
}
