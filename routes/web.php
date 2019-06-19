<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;

Route::get('/','FrontController@index')->name('home');
Route::get('/products','FrontController@products')->name('products');
Route::resource('cart', 'CartController');
Route::get('products/{product}','FrontController@productdetails')->name('productdetails');
Auth::routes(['verify'=>true]);
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'FrontController@index');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');

Route::get('/changePassword','HomeController@showChangePasswordForm')->name('changePassword');

Route::resource('addresses', 'AddressController');

/*Route::get('profile',function(){
    //Only verified users may enter...
})->middleware('verified'); */

Route::group(['prefix'=>'admin','middleware'=>'verified'],function(){
  Route::get('/',function(){
     $products = \App\Products::all();
        return view('admin.index',compact('products'));
    })->name('admin.index');
    Route::post('toggledeliver/{orderId}','OrderController@toggledeliver')->name('toggle.deliver');
    //Route::post('toggleaccepted/{industryId}','IndustryController@toggleaccepted')->name('toggle.accepted');
    //Route::post('product/image-upload/{productId})','ProductsController@uploadImages');
    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');
    //Route::resource('users','UsersController');
   Route::get('orders/{type?}', 'OrderController@Orders');
  //  Route::get('requests/{type?}', 'IndustryController@Industries');


});
Route::post('/login/custom' ,'LoginController@login')->name('login.custom');
Route::group(['middleware' => 'auth'], function (){
    Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
    Route::get('payment','CheckoutController@payment')->name('checkout.payment');
    Route::post('store-payment','CheckoutController@storePayment')->name('payment.store');

});
Route::any('/search',function (){
    $q = Input::get('q');
    $user = \App\Products::where('name','LIKE','%'.$q.'%')->orWhere('description','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('users.search')->withDetails($user)->withQuery ( $q );
    else return view ('users.search')->withMessage('No Details found. Try to search again !');
});
