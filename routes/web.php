<?php
use App\Mail\ContactMessageCreated;
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

Route::get('/', ['as'=>'home','uses'=>'PageController@home']);

Route::get('/about', ['as'=>'about','uses'=>'PageController@about']);

Route::get('/contact', ['as'=>'contact','uses'=>'ContactController@create']);
Route::Post('/contact', ['as'=>'contact','uses'=>'ContactController@store']);

Route::get('/test-email', function(){
	return new ContactMessageCreated('nourdine','nour@gmail.com','ravi de vous avoir connu');
});