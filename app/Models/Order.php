<?php

namespace App\Models;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $filltable = [
        'user_id',
        'fname',
        'lname',
        'email',
        'country',
        'address',
        'note',
        'phone',
        'status',
        'message',
        'tracking_no',

        'totalprice',










    ];
    public function orderItems()
    {



        return $this->hasMany(OrderItem::class);
    }
}
