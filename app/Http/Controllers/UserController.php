<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

	public function show(){
		$users = [
				['firstname' => 'amir' , 'lastname' => 'faridi' , 'age' => 22],
				['firstname' => 'mohammad' , 'lastname' => 'faridi' , 'age' => 222],
				['firstname' => 'matin' , 'lastname' => 'sadeghi' , 'age' => 20],
				['firstname' => 'pedar' , 'lastname' => 'pedari' , 'age' => 2200],
				['firstname' => 'pesar' , 'lastname' => 'sayadi' , 'age' => 20],
			];
			
		$data =	['Users' => $users];
	
		return view("show" , $data);
	}
    
}
