<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller{
    
    public function getHome(){
    	return view('home');
    }

    public function getLogin(Request $request){
    	if($request->session()->has('logged_in')){
    		getHome();
    	}else{
    		return view('login');
    	}
    }

    public function getRegistration(Request $request){
    	if($request->session()->has('logged_in')){
    		getHome();
    	}else{
    		return view('register');
    	}
    }
}
