<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\category;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;


class Selectcomponent extends Component
{
    public $sorting;
    public   $cate_id;


    public  function get($cate)
    {

        $this->cate_id = $cate;
    }

    use WithPagination;
    public function render()
    {


        $category = category::all();
        if ($this->sorting = 'rating'  &&  !empty($this->cate_id)) {
            $products
                = DB::table('ratings')
                ->join('products', 'ratings.prod_id', '=', 'products.id')
                ->select(
                    DB::raw("count(ratings.stars_rated) as count"),
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
                )->where('products.cate_id', $this->cate_id)->groupBy(
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
        } else {


            $products
                = DB::table('ratings')
                ->join('products', 'ratings.prod_id', '=', 'products.id')
                ->select(
                    DB::raw("count(ratings.stars_rated) as count"),
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
        }
        if (empty($this->cate_id)) {


            $products
                = Product::paginate(4);
        }
        return view('livewire.selectcomponent', compact('products', 'category'));
    }
}
