<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
    	return view('from');
    }
    public function welcome_post(Request $request){
    	$firstname =$request->input ('firstname');
    	$lastname  =$request->input ('lastname');

    	$data =[
    		'first'=> $firstname,
    		'last' => $lastname,
    		
    	];
    	return view('selamat',$data);
    }

}
