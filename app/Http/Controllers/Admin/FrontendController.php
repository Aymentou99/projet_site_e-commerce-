<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{

    public function indexorder()
    {





        $count_all = Order::count();
        $Order1 = Order::where('Status', '0')->count();
        $Order2 = Order::where('Status', '1')->count();


        if ($Order2 == 0) {
            $Order2 = 0;
        } else {
            $Order2 = $Order2 / $count_all * 100;
        }

        if ($Order1 == 0) {
            $Order1 = 0;
        } else {
            $Order1 = $Order1 / $count_all * 100;
        }

        if ($count_all == 0) {
            $count_all = 0;
        } else {
            $count_all = $count_all / $count_all * 100;
        }






        return view('adminf.index', compact('Order2', 'Order1', 'count_all'));
    }
}
