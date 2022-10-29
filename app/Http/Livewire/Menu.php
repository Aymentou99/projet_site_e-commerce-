<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

use Illuminate\Support\Facades\Auth;

class Menu extends Component
{


    protected $listeners = ['Menu_updated' => 'render'];


    public function    removeFromCart($rowId, $user_id)
    {





        if (Auth::check()) {



            $cart = Cart::where('prod_id', $rowId)->where('user_id', $user_id)->first();

            $cart->delete();
            $this->emit('cart_updated');
            $this->emit('table_updated');
            $this->emit('Menu_updated');
        }
    }








    public function render()
    {
        $cart
            = Cart::all();

        return view('livewire.menu', compact('cart'));
    }
}
