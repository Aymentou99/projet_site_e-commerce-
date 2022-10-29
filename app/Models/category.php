<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $Filltable = [
        'name_en',
        'name_ja',
        'slug_en',
        'slug_ja',
        'description_en',
        'description_ja',
        'meta_title_en',
        'meta_title_ja',
        'meta_description_en',
        'meta_description_ja',
        'meta_keyword_en',
        'meta_keyword_ja',
        'image',
        'small_description_en',
        'small_description_ja',


    ];
}
