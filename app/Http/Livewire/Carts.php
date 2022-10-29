<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

use Illuminate\Support\Facades\Auth;

class Carts extends Component
{
    protected $listeners = ['c_updated' => 'render'];






    public function removeCart($rowId, $user_id)
    {









        $cart =   Cart::where('prod_id', $rowId)->where('user_id', $user_id)->first();



        $cart->delete();

        $this->emit('c_updated');
        $this->emit('cart_updated');
        $this->emit('table_updated');
        $this->emit('Menu_updated');
    }








    public function render()
    {
        $cartitem
            = Cart::all();

        return view('livewire.carts', compact('cartitem'));
    }
}
