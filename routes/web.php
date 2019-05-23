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

Route::post('/blog/add' , 'BlogController@add');

Route::get('/blog/list' ,  function(){
		$data = App\Blog::get();
    		return view('bloglist', ['data' => $data]);
	
	});

Route::get('/blog/add' , function(){
		return view ('addblog');
	
	});
Route::get('/blog/show/{id}' , function($id){
		$data = App\Blog::where('id' , $id)->get();
		return view ('showblog' , ['data' => $data]);
	
});
/*Route::get('/', function () {
	return view('welcome');
});

Route::match(['get' , 'post'],'foo' , function () {
	return 'hello world';
});*/
