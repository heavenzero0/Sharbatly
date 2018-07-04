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


class UserController extends Controller
{
    public function index(Request $request){

    	// if ($request->has('lg_username')){
    	// 	echo "	---> ".$request->lg_username;
    	// 	 return response()->json(['success'=>'Got Simple Ajax Request.']);
    		
    	// }else{
    	 	return view ('login.index');
    	// }
    }
   

    public function checkID(Request $request){
    		//echo "string --------->".$request->last;

        


        if($request->lg_id != null){
            $data = User::where('id_number',$request->lg_id)->first();

            if(isset($data)){
                
                $response = array(
                    "id" => $data->email, 
                    "name" => $data->Fname.' '.$data->Lname, 
                    "type" => 'show success'
                );

                return response()->json($response);
            
            }else{
                
                $response = array(
                    "id" => 'no data', 
                    "name" => 'ID NUMBER NOT FOUND', 
                    "type" => 'show error'
            );

                return response()->json($response);
            }
        }else{
            $data = User::where('password',$request->lg_password)->first();

            if(isset($data)){   

               //Auth::guard('users')->loginUsingId(1,true);

               Auth::guard('users')->loginUsingId($data->id);
                // this is it    Auth::guard('users')->logout();


                //ROLE 1  = DOCUMENTATION
               if($data->role == 1){

                    $response = array(
                    "result" => 'success',
                    "name" => 'Successfully Login', 
                    "pass" => true,
                    "type" => 'show succes',
                    "redirect" => route('docu_dashboard')
                    );
               }
                




            }else{

               $response = array(
                    "result" => 'error',
                    "name" => 'Password Invalid', 
                    "pass" => true,
                    "type" => 'show error'
                );

            }

                return response()->json($response);

        }


        

        
    }
}
