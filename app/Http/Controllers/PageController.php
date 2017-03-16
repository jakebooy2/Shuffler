<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;

class PageController extends Controller{
    
    public function getHome(){
    	return view('home');
    }

    public function logout(){
    	Auth::logout();
    	return Redirect::to('/');
    }

    public function getAccount(){
    	if(Auth::guest()){
    		return Redirect::to('/login');
    	}else return view('account');
    }
    
}
