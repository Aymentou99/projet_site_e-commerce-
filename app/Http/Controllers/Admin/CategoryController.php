<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\category;
use CreateCategoriesTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{


    public function index()
    {

        $category
            = DB::table('categories')
            ->leftjoin('products', 'categories.id', '=', 'products.cate_id')
            ->selectRaw('count(products.id) as number_of_product  ,categories.name_en  , categories.image, categories.id')->groupBy('categories.name_en', 'categories.image', 'categories.id')->paginate(6);

        return view('adminf.category.index', compact('category'));
    }
    public  function add()
    {


        return view('adminf.category.add');
    }



    public  function insert(Request $request)
    {
        $category = new category();
        $message
            = [

                'image.required' => 'image is required',


                'name_en.required'    => 'name_en is required',
                'name_jp.required' => 'name_jp is required',
                'small_description_en.required' => 'small_description_en is required',
                'small_description_jp.required' => 'small_description_jp is required',
                'description_en.required' => 'description_en is required',
                'description_jp.required' => 'description_jp is required',

                'meta_title_en.required' => 'meta_title_en is required',
                'meta_title_jp.required' => 'meta_title is required',

                'slug_en.required' => 'slug_en is required',




                'meta_keyword_en.required' => 'meta_keyword_en is required',
                'slug_jp.required' => 'slug_jp.required is required',
                ' meta_keyword_jp.required' => 'meta_keyword_jp is required',
                'meta_description_en.required' => 'meta_description_en is required',
                'meta_description_jp.required' => ' meta_description_jp is required',



            ];



        $rules = [

            'image' => ['required'],
            'name_en'   =>  [
                'required'
            ],
            'name_jp'   => ['required'],
            'small_description_en'   => ['required'],
            'small_description_jp'   => ['required'],
            'description_en'   => ['required'],
            'description_jp'   =>  [
                'required'
            ],
            'meta_title_en'   => ['required'],
            'meta_title_jp'   => ['required'],

            'slug_en'   =>  [
                'required'
            ],
            'meta_keyword_en'   =>  [
                'required'
            ],
            'slug_jp'   => ['required'],
            'meta_keyword_jp'   =>  [
                'required'
            ],
            'meta_description_en'   => ['required'],
            'meta_description_jp'   => ['required'],



        ];
        $validate = Validator::make($request->all(), $rules, $message);

        if ($validate->fails()) {
            return redirect('add-category')
                ->withErrors($validate)
                ->withInput();
        }





        $file = $request->file('image');

        if ($file !== null) {



            $ext =
                $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('Admin/images/Category', $filename);
            $category->image = $filename;
        }

        $category->name_en = $request->input('name_en');
        $category->name_ja = $request->input('name_jp');
        $category->slug_en = $request->input('slug_en');
        $category->slug_ja = $request->input('slug_jp');
        $category->description_en = $request->input('description_en');
        $category->description_ja = $request->input('description_jp');

        $category->meta_title_en = $request->input('meta_title_en');
        $category->meta_title_ja = $request->input('meta_title_jp');

        $category->description_en = $request->input('description_en');
        $category->description_ja = $request->input('description_jp');

        $category->small_description_en = $request->input('small_description_en');
        $category->small_description_ja = $request->input('small_description_jp');
        $category->meta_description_en = $request->input('meta_description_en');
        $category->meta_description_ja = $request->input('meta_description_jp');
        $category->meta_keyword_en = $request->input('meta_keyword_en');
        $category->meta_keyword_ja = $request->input('meta_keyword_jp');
        $category->save();
        return redirect('/dashboard')->with('status', "Category deleted Sucessfully");
    }
    public function edit($id)
    {

        $category = category::all()->where('id', $id)->first();

        return view('adminf.category.edit', compact('category'));
    }









    public  function update(Request $request)
    {
        $idk =  $request->input('id');
        $category = category::find($idk);


        $message
            = [

                'image.required' => 'image is required',


                'name_en.required'    => 'name_en is required',
                'name_jp.required' => 'name_jp is required',
                'small_description_en.required' => 'small_description_en is required',
                'small_description_jp.required' => 'small_description_jp is required',
                'description_en.required' => 'description_en is required',
                'description_jp.required' => 'description_jp is required',

                'meta_title_en.required' => 'meta_title_en is required',
                'meta_title_jp.required' => 'meta_title is required',

                'slug_en.required' => 'slug_en is required',


                'meta_keyword_en.required' => 'meta_keyword_en is required',
                'slug_jp.required' => 'slug_jp.required is required',
                ' meta_keyword_jp.required' => 'meta_keyword_jp is required',
                'meta_description_en.required' => 'meta_description_en is required',
                'meta_description_jp.required' => ' meta_description_jp is required',




            ];



        $rules = [

            'image' => ['required'],
            'name_en'   =>  [
                'required'
            ],
            'name_jp'   => ['required'],
            'small_description_en'   => ['required'],
            'small_description_jp'   => ['required'],
            'description_en'   => ['required'],
            'description_jp'   =>  [
                'required'
            ],
            'meta_title_en'   => ['required'],
            'meta_title_jp'   => ['required'],

            'slug_en'   =>  [
                'required'
            ],
            'meta_keyword_en'   =>  [
                'required'
            ],
            'slug_jp'   => ['required'],
            'meta_keyword_jp'   =>  [
                'required'
            ],
            'meta_description_en'   => ['required'],
            'meta_description_jp'   => ['required'],



        ];
        $validate = Validator::make($request->all(), $rules, $message);

        if ($validate->fails()) {
            return redirect('edit-prod/' . $idk)
                ->withErrors($validate)
                ->withInput();
        }

        $path = 'Admin/images/Category/' . $category->image;
        if (File::exists($path)) {
            File::delete($path);
        }

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move('Admin/images/category', $imageName);
        $category->image =
            $imageName;
        $category->name_en = $request->input('name_en');
        $category->name_ja = $request->input('name_jp');
        $category->slug_en = $request->input('slug_en');
        $category->slug_ja = $request->input('slug_jp');
        $category->description_en = $request->input('description_en');
        $category->description_ja = $request->input('description_jp');


        $category->meta_title_en = $request->input('meta_title_en');
        $category->meta_title_ja = $request->input('meta_title_jp');
        $category->small_description_en
            = $request->input('small_description_en');
        $category->small_description_ja = $request->input('small_description_jp');

        $category->meta_keyword_en = $request->input('meta_keyword_en');
        $category->meta_keyword_ja = $request->input('meta_keyword_jp');

        $category->meta_description_en = $request->input('meta_description_en');
        $category->meta_description_ja = $request->input('meta_description_jp');
        $category->save();



        return redirect('/dashboard')->with('status', "Category updated Sucessfully");
    }

    public function delete(Request $request, $id)
    {

        $category = category::find($id);
        $path = 'Admin/images/Category/' . $category->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $product = Product::where('cate_id', $id);

        $product->delete();
        $category->delete();



        return redirect('/dashboard')->with('status', "Category deleted Sucessfully");
    }






    public function search(Request $request)
    {

        $search_text = $_GET['query'];
        if (isset($search_text)) {
            $category =    DB::table('categories')->where('categories.name_en', 'LIKE', '%' . $search_text . '%')
                ->leftjoin('products', 'categories.id', '=', 'products.cate_id')
                ->selectRaw('count(products.id) as number_of_product  , categories.name_en  , categories.image , products.cate_id')->groupBy('categories.name_en', 'categories.image', 'products.cate_id')->paginate(6);

            $category->appends($request->all());
            return view('adminf.category.index', compact('category'));
        } else {

            return view('adminf.category.index');
        }
    }
}
