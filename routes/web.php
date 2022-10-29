<?php



use Illuminate\Support\Facades\app;
use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/*Route verify */
Auth::routes(['verify' => true]);

/*Route verify */
Auth::routes();

/*Route confirm */
Route::match(['GET', 'POST'], '/confirm/{code}', 'App\Http\Controllers\Frontend\UserController@confirm');
/* lang switcher */
Route::get('lang/{locale}', 'App\Http\Controllers\LocalizationController@index');
/*Route Register  */
Route::get('register1', 'App\Http\Controllers\Auth\RegisterController@register');
/*Route Register form */
Route::post('register2', 'App\Http\Controllers\Auth\RegisterController@storeUser');
/*Route forget password */
Route::get('forget-password1', 'App\Http\Controllers\Auth\ForgotPasswordController@showResetPasswordForm');
Route::post('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@submitForgetPasswordForm');
/*Route reset password  */
Route::get('login/resetpassword', 'App\Http\Controllers\Auth\ForgotPasswordController@showForgetPasswordForm');
Route::post('reset-passwordx', 'App\Http\Controllers\Auth\ForgotPasswordController@submitResetPasswordForm');
/*Route shops  */
Route::get('shops', 'App\Http\Controllers\Frontend\FrontEndController@viewshop');




Route::get('itser', 'App\Http\Controllers\Admin\DashbordController@viewit');
Route::get('/', 'App\Http\Controllers\Frontend\FrontEndController@index');
Route::get('cp-idea', 'App\Http\Controllers\Frontend\FrontEndController@cpidea');
Route::get('cp-about-us', 'App\Http\Controllers\Frontend\FrontEndController@AboutUs');
Route::get('p-contact-us', 'App\Http\Controllers\Frontend\FrontEndController@cp');




Route::middleware(['auth'])->group(
    function () {

        Route::get('checkout', 'App\Http\Controllers\Frontend\checkoutController@index');
        Route::post('place-order', 'App\Http\Controllers\Frontend\checkoutController@placeOrder');

        Route::post('add_cart', 'App\Http\Controllers\Frontend\CartController@addProduct');

        Route::post('add-rating', 'App\Http\Controllers\Frontend\RatingController@add');
        Route::get('cart', 'App\Http\Controllers\Frontend\CartController@viewcart');

        Route::get('logout', function () {

            Session::forget('user');
            return redirect('/login');
        });
    }
);

Route::middleware(['auth', 'isAdmin'])->group(
    function () {


        Route::get('/dashboard', 'App\Http\Controllers\Admin\FrontendController@indexorder');



        Route::put('categoryup', 'App\Http\Controllers\Admin\CategoryController@update');
        Route::get('categories', 'App\Http\Controllers\Admin\CategoryController@index');
        Route::get('add-category', 'App\Http\Controllers\Admin\CategoryController@add');
        Route::post('insert-category', 'App\Http\Controllers\Admin\CategoryController@insert');

        Route::get('edit-prod/{id}', 'App\Http\Controllers\Admin\CategoryController@edit');

        Route::get('Search', 'App\Http\Controllers\Admin\CategoryController@search');
        Route::get('delete/{id}', 'App\Http\Controllers\Admin\CategoryController@delete');

        /* */
        Route::get('all-orders/{id}', 'App\Http\Controllers\Admin\OrderController@views');
        Route::get('Search-p', 'App\Http\Controllers\Admin\ProductController@search');
        Route::get('delete_products/{id}', 'App\Http\Controllers\Admin\ProductController@delete');
        Route::get('Products', 'App\Http\Controllers\Admin\ProductController@index');
        Route::get('add-products', 'App\Http\Controllers\Admin\ProductController@add');
        Route::post('insert-products', 'App\Http\Controllers\Admin\ProductController@insert');


        Route::get('edit-products/{id}', 'App\Http\Controllers\Admin\ProductController@edit');
        Route::put('update-Products/{id}', 'App\Http\Controllers\Admin\ProductController@update');
        Route::get('Users', 'App\Http\Controllers\Admin\DashbordController@view');

        Route::get('Search-Users', 'App\Http\Controllers\Admin\DashbordController@search');
        Route::get('orders', 'App\Http\Controllers\Admin\OrderController@index');

        Route::put('update-order/{id}', 'App\Http\Controllers\Admin\OrderController@UpdateOrder');

        Route::get('get_causes_against_category/{id}', 'CategoryController@get_causes_against_category');
        Route::get('order-history', 'App\Http\Controllers\Admin\OrderController@orderhistory');
        Route::get('ratingsadmin', 'App\Http\Controllers\Admin\DashbordController@viewratings');
        Route::get('Searchrat', 'App\Http\Controllers\Admin\DashbordController@searchrat');
        Route::put('update-profil/{id}', 'App\Http\Controllers\Admin\DashbordController@editprofil');
        Route::get('viewprofil', 'App\Http\Controllers\Admin\DashbordController@viewprofil');
    }
);
