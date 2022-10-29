<?php

namespace App\Http\Livewire;



use App\Models\Product;
use Livewire\Component;
use App\Models\category;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CategoryComponent extends Component
{
    public   $selectedProducts;
    public $check;
    public $sorting;
    public   $selectAll = false;
public $Sorting = [] ;
    public  function mount()
    {

      
        $this->check = "default";
    }



    use WithPagination;
    public function render()
    {
        $products
            = Product::paginate(4);
        $category = category::all();
        if ($this->sorting == "rating"   && !empty($this->Sorting)) {



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
                )->where('products.cate_id', $this->selectedProducts)->groupBy(
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
                = Product::where('cate_id', $this->selectedProducts)->paginate(4);
        }




        return view('livewire.categorycomponent', compact('products', 'category'));
    }
}
