<?php

namespace App\Http\Controllers\Admin;


use App\Models\User;
use App\Models\Order;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;


class DashbordController extends Controller
{




    public  function view()
    {

        $users = User::select('name', 'email')->paginate(10);


        return view('adminf.Users.index', compact('users'));
    }

    public function search(Request $request)
    {

        $search_text = $_GET['query'];
        if (isset($search_text)) {
            $users = User::select('name', 'email')->where('name', 'LIKE', '%' . $search_text . '%')->paginate(3);

            $users->appends($request->all());
            return view('adminf.Users.index', compact('users'));
        } else {

            return view('adminf.Users.index');
        }
    }
    public function viewprofil()
    {

        $admin = User::find(Auth::id());


        return   view('adminf.editprofil', compact('admin'));
    }
    public function editprofil(Request $request, $id)
    {
        $validate = Validator::make(
            $request->all(),
            [

                'password'
                => 'required|min:6|max:8'


            ],
            [

                'password.required' => 'password is required',

                'password.min' => 'password at least 6 character',

                'password.max' => 'password at must 8 character',





            ]





        );






        if ($validate->fails()) {
            return redirect('update-profil/' . $id)
                ->withErrors($validate)
                ->withInput();
        }



        $admin = User::find($id);

        $admin->password = Hash::make($request->input('password'));

        $admin->update();

        return redirect('/dashboard')->with('status', "profil  Update successfully");
    }


    public function editprofilu(Request $request, $id)
    {

        $validate = Validator::make(
            $request->all(),
            [


                'password'
                => 'required|min:6|max:8'


            ],
            [

                'password.required' => 'password is required',

                'password.min' => 'password at least 6 character',

                'password.max' => 'password at must 8 character',





            ]



        );






        if ($validate->fails()) {
            return redirect('editprofiluser/' . $id)
                ->withErrors($validate)
                ->withInput();
        }



        $admin = User::find($id);
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));

        $admin->update();

        return redirect('/')->with('status', "profil  Update successfully");
    }

    public function changeprofil()
    {

        $user = User::find(Auth::id());

        return view('FrontEnd.profil', compact('user'));
    }
    public function viewratings()
    {


        $rate
            = DB::table('ratings')
            ->join('products', 'ratings.prod_id', '=', 'products.id')
            ->selectRaw('count(ratings.stars_rated) as number_of_rating  ,products.name_en  , products.image')->groupBy('products.name_en', 'products.image')->paginate(6);
        return  view('adminf.rating', compact('rate'));
    }


    public function searchrat(Request $request)
    {

        $search_text = $_GET['query'];
        if (isset($search_text)) {

            $rate       = DB::table('ratings')
                ->join('products', 'ratings.prod_id', '=', 'products.id')
                ->selectRaw('count(ratings.stars_rated) as number_of_rating  ,products.name_en  , products.image')->groupBy('products.name_en', 'products.image')->where('products.name_en', $search_text)->paginate(6);

            $rate->appends($request->all());
            return view('adminf.rating', compact('rate'));
        } else {

            return view('adminf.rating');
        }
    }


    public function viewit()
    {



        return view('FrontEnd.itservice');
    }
}
