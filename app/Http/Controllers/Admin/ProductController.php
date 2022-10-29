<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\category;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    public function index()
    {

        $products = Product::paginate(10);

        return view('adminf.Products.index', compact('products'));
    }

    public  function add()
    {
        $Products = category::all();

        return  view('adminf.Products.add', compact('Products'));
    }



    public  function insert(Request $request)
    {



        $Product = new Product();



        $validate = Validator::make(
            $request->all(),
            [
                'UsageMethod_ja' => 'required',
                'UsageMethod_en' => 'required',
                'Details_ja' => 'required',
                'Details_en' => 'required',
                'Composition_ja'  => 'required',
                'Composition_en'
                => 'required',
                'Volume_en' => 'required',
                'Volume_ja' => 'required',
                'Stock_number' => 'required',
                'image' => 'required',
                'cate_id'
                => 'required',

                'name_en'   => 'required',
                'name_jp'   => 'required',

                'price' => 'required',
                'qty'   => 'required',

                'cate_id' => 'required',

            ],

            [


                'UsageMethod_ja' => ' UsageMethod_en required',
                'UsageMethod_en' => ' UsageMethod_en required',
                'Details_ja' => 'Details_ja required',
                'Details_en' => 'Details_en required',
                'Composition_ja'  => ' Composition_ja required',
                'Composition_en'
                => ' Composition_en required',
                'Volume_en' => ' Volume_en required',
                'Volume_ja' => ' Volume_ja required',
                'Stock_number' => 'required',
                'image' => ' image required',
                'cate_id'
                => ' cate_id required',

                'name_en'   => ' name_en required',
                'name_jp'   => 'name_jp required',


                'price' => 'price required',


                'qty'   => ' qty required',

                'cate_id' => ' cate_id required',



            ]







        );






        if ($validate->fails()) {
            return redirect('add-products')
                ->withErrors($validate)
                ->withInput();
        }

        $file = $request->file('image');
        if ($file !== null) {


            $ext =
                $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('Admin/images/Products', $filename);
            $Product->image = $filename;
        }




        $Product->cate_id = $request->input('cate_id');
        $Product->name_en = $request->input('name_en');
        $Product->name_ja = $request->input('name_jp');
        $Product->qty = $request->input('qty');


        $Product->status = $request->input('status') == TRUE ? '1' : '0';
        $Product->Availability = $request->input('Availability') == TRUE ? '1' : '0';
        $Product->Stock_number = $request->input('Stock_number');
        $Product->Volume_en = $request->input('Volume_en');
        $Product->Volume_ja = $request->input('Volume_ja');
        $Product->Composition_en = $request->input('Composition_en');
        $Product->Composition_ja = $request->input('Composition_ja');
        $Product->Details_en = $request->input('Details_en');
        $Product->Details_ja = $request->input('Details_ja');
        $Product->UsageMethod_en = $request->input('UsageMethod_en');
        $Product->UsageMethod_ja = $request->input('UsageMethod_ja');

        $Product->price = $request->input('price');
        $Product->save();
        return redirect('/dashboard')->with('status', "product Added Successfully");
    }


    public function edit($id)
    {

        $Product = Product::find($id);
        $Products = category::all();
        return view('adminf.Products.edit', compact('Product', 'Products'));
    }

    public  function update(Request $request, $id)
    {









        $Product = Product::find($id);



        $validate = Validator::make(
            $request->all(),
            [
                'UsageMethod_ja' => 'required',
                'UsageMethod_en' => 'required',
                'Details_ja' => 'required',
                'Details_en' => 'required',
                'Composition_ja'  => 'required',
                'Composition_en'
                => 'required',
                'Volume_en' => 'required',
                'Volume_ja' => 'required',
                'Stock_number' => 'required',
                'image' => 'required',


                'name_en'   => 'required',
                'name_jp'   => 'required',



                'price'   => 'required',

                'qty'   => 'required',

                'cate_id' => 'required',

            ],

            [

                'price'   => ' price required',
                'UsageMethod_ja' => ' UsageMethod_en required',
                'UsageMethod_en' => ' UsageMethod_en required',
                'Details_ja' => 'Details_ja required',
                'Details_en' => 'Details_en required',
                'Composition_ja'  => ' Composition_ja required',
                'Composition_en'
                => ' Composition_en required',
                'Volume_en' => ' Volume_en required',
                'Volume_ja' => ' Volume_ja required',
                'Stock_number' => 'required',
                'image' => ' image required',


                'name_en'   => ' name_en required',
                'name_jp'   => 'name_jp required',





                'qty'   => ' qty required',

                'cate_id' => ' cate_id required',



            ]







        );






        $path = 'public/Admin/images/Products/' . $Product->image;
        if (File::exists($path)) {
            File::delete($path);
        }





        if ($validate->fails()) {
            return redirect('edit-products/' . $id)
                ->withErrors($validate)
                ->withInput();
        }



        $file = $request->file('image');
        if ($file !== null) {
            $ext =
                $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('Admin/images/Products', $filename);
            $Product->image = $filename;
        }

        $Product->cate_id = $request->input('cate_id');
        $Product->name_en = $request->input('name_en');
        $Product->name_ja = $request->input('name_jp');
        $Product->qty = $request->input('qty');


        $Product->Availability = $request->input('Availability') == TRUE ? '1' : '0';
        $Product->Stock_number = $request->input('Stock_number');
        $Product->Volume_en = $request->input('Volume_en');
        $Product->Volume_ja = $request->input('Volume_ja');
        $Product->Composition_en = $request->input('Composition_en');
        $Product->Composition_ja = $request->input('Composition_ja');
        $Product->Details_en = $request->input('Details_en');
        $Product->Details_ja = $request->input('Details_ja');
        $Product->UsageMethod_en = $request->input('UsageMethod_en');
        $Product->UsageMethod_ja = $request->input('UsageMethod_ja');

        $Product->price = $request->input('price');
        $Product->save();
        return redirect('/dashboard')->with('status', "Category updated Successfully");
    }

    public function delete(Request $request, $id)
    {

        $Product =
            Product::find($id);

        if ($request->hasFile('image')) {
            $path = 'Admin/images/Products/' . $Product->image;

            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $Product->delete();

        return redirect('/dashboard')->with('status', "Category deleted Sucessfully");
    }






    public function search(Request $request)
    {

        $search_text = $_GET['query'];
        if (isset($search_text)) {
            $products = Product::select('name_en', 'image')->where('name_en', 'LIKE', '%' . $search_text . '%')->paginate(2);

            $products->appends($request->all());
            return view('adminf.Products.index', compact('products'));
        } else {

            return view('adminf.Products.index');
        }
    }
}
