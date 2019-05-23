<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class BlogController extends Controller
{
    //
    public function add(Request $req){ 
    	//dd($req -> all());
    	//dump($req -> input('title'));
    	//dump($req -> input('body'));
    	//dump($req -> input('test'));
    	$title = $req -> input('title');
    	$body = $req -> input('body');
    	$blog = new Blog;
    	$blog -> title = $title;
    	$blog -> body = $body;
    	$blog -> save();
    	//$time = Carbon::now() -> toDateTimeString();
    	//$query = array('title' => $title, 'body' => $body, 'created_at'=>$time,'updated_at'=>$time);
    	//$insertedID = DB::table('blogs') -> insertGetID($query);
    	return redirect ('/blog/list');
    	
    }
}
