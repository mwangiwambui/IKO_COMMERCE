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

Route::get('/','FrontController@index')->name('home');
Route::get('/products','FrontController@products')->name('products');
Route::resource('/cart', 'CartController');
Route::get('products/{product}','FrontController@productdetails')->name('productdetails');
Auth::routes(['verify'=>true]);
Route::get('/logout', 'Auth\LoginController@logout');
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/changePassword','HomeController@showChangePasswordForm')->name('changePassword');

Route::resource('/addresses', 'AddressController');
Route::post('/storeAddresses', 'AddressController@store')->name('storeAddresses');
/*Route::get('profile',function(){
    //Only verified users may enter...
})->middleware('verified'); */

Route::group(['prefix'=>'admin','middleware'=>'verified'],function(){
  Route::get('/',function(){
        return view('admin.index');
    })->name('admin.index');
    //Route::post('toggledeliver/{orderId}','OrderController@toggledeliver')->name('toggle.deliver');
    // Route::post('toggleaccepted/{industryId}','IndustryController@toggleaccepted')->name('toggle.accepted');
    //Route::post('product/image-upload/{productId})','ProductsController@uploadImages');
    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');
    //Route::resource('users','UsersController');
   // Route::get('orders/{type?}', 'OrderController@Orders');
  //  Route::get('requests/{type?}', 'IndustryController@Industries');


});
Route::post('/login/custom' ,'LoginController@login')->name('login.custom');
