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
use App\Http\Middleware\CheckAge;

Route::get('/','VisitorController@getIp');
Route::post('post_message','VisitorController@sendmessage');
Route::get('image_form','VisitorController@showform');
Route::post('post_image','VisitorController@uploadimage');
Route::get('getdata','ApiController@getdata');
Route::get('postdata','ApiConroller@postdata');
Route::get('bladetemplate',function(){

	

	return view('child');

});
Route::get('alert',function(){

	return view('alert');

});

Route::get('admin/profile', function () {
    //

})->middleware(CheckAge::class);