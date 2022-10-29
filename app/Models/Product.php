<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $Filltable = [
        'cate_id',
        'name_en',
        'name_ja',
        'image',
        'Availability',
        'qty',
        'status',
        'Stock_number',
        'Volume_en',
        'Volume_ja',
        'Composition_en',
        'Composition_ja',
        'Details_en',
        'Details_ja',
        'UsageMethod_en',
        'UsageMethod_ja',
        'price'








    ];

    public function category()
    {


        return $this->belongsTo(category::class, 'cate_id', 'id');
    }
}
