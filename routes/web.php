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

Route::view( '/home', 'home' );
Route::view( '/about_us', 'about_us' );
Route::view( '/contact_us', 'contact_us');

Route::redirect('/', '/home' );

Route::get('/user/show' , 'UserController@show');
/*Route::get('/', function () {
	return view('welcome');
});

Route::match(['get' , 'post'],'foo' , function () {
	return 'hello world';
});*/
