<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Jenssegers\Agent\Agent;
use Carbon\Carbon;
use App\Model\User;
use Mail;
use Hash;
use Auth;
use Session;
use Validator;

class LoadingController extends Controller
{
    //

     public function show($id){

       $data = Auth::guard('users')->user();


        return view ('user.documentation.index', compact('data'));
    }


    public function createloading(){

    	$data = Auth::guard('users')->user();


    	return view ('user.documentation.create', compact('data'));
    }


     public function dashboard(){

        $data = Auth::guard('users')->user();


        return view ('user.documentation.index', compact('data'));
    }

}
