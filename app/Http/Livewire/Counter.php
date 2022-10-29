<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Counter extends Component
{


    protected $listeners = ['cart_updated' => 'render'];


    public function render()
    {


        $count =   Cart::count();




        return view('livewire.counter', compact('count'));
    }
}
