<?php

namespace App\Http\Livewire;

use App\Models\Cart;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;



class Table extends Component
{

    protected $listeners = ['table_updated' => 'render'];
    public $products;
    public array $quantity =   [];

    public function mount()
    {



        $this->products = Product::all();

        foreach ($this->products as $product) {
            $this->quantity[$product->id] = 1;
        }
    }










    public  function add_to_cart($product_id, $user_id, $qty)
    {


        if (Auth::check()) {
            $product = Product::findOrFail($product_id);

            $cart = new Cart();
            $cart->user_id
                = $user_id;
            $cart->prod_id
                = $product->id;
            $cart->prod_qty
                =  $this->quantity[$product_id];

            $cart->save();




            $this->emit('cart_updated');
            $this->emit('Menu_updated');
        }
    }



    public function    remove_FromCart($rowId, $user_id)
    {






        if (Auth::check()) {


            $cart = Cart::where('prod_id', $rowId)->where('user_id', $user_id)->first();

            $cart->delete();
            $this->emit('cart_updated');
            $this->emit('Menu_updated');
        }
    }








    public function render()
    {
        $cart = Cart::all();

        $rating
            = DB::table('ratings')
            ->join('products', 'ratings.prod_id', '=', 'products.id')
            ->select(
                DB::raw("count(ratings.stars_rated) as count"),
                'products.id',
                'products.cate_id',
                'products.name_en',
                'products.name_ja',
                'products.image',
                'products.qty',
                'products.Stock_number',
                'products.Composition_ja',
                'products.Details_en',
                'products.Details_ja',
                'products.Volume_en',
                'products.Volume_ja',
                'products.UsageMethod_en',
                'products.UsageMethod_ja'
            )->groupBy(
                'products.id',
                'products.cate_id',
                'products.name_en',
                'products.name_ja',
                'products.image',
                'products.qty',
                'products.Stock_number',
                'products.Composition_ja',
                'products.Details_en',
                'products.Details_ja',
                'products.Volume_en',
                'products.Volume_ja',
                'products.UsageMethod_en',
                'products.UsageMethod_ja'
            )->orderBy('count', 'DESC')->paginate(4);

        $products
            = Product::paginate(4);

        return view('livewire.table', compact('products', 'cart', 'rating'));
    }
}
