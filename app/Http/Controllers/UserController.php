<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index()
    {
    	$users = User::all();
    	$users = User::orderBy('id')->paginate(8);

    	return view('layouts.usermanagement')->with('users',$users);
    }


     public function edit($id)
    {

    	$users= User::find($id);
        return response()->JSON([
        	'success' => 'done',
        	'id'=>$users->id,
        	'name'=>$users->first_name,
        	'mobile'=>$users->Mobile,
        	'email'=>$users->email,
        	'UserType'=>$users->is_admin
        	
        ]);
    }


    public function update(Request $request)
    {

    	$user = User::find($request['user_id']);
    	$user->first_name = $request['first_name'];
    	$user->Mobile =$request['user_mobile'];
    	$user->email = $request['user_email'];
    	$user->is_admin = $request['user_type'];
    	$user->save();

    	return response()->json([
    		'success' => 'done',


    	]);

      }



      public function delete($id)
      {

      	$user= User::find($id);
        $user->delete($id);
    	return response()->json([
    		'success'=>'record has been deleted',
            'id' => $user

    	]);
      }

    
}

    	// $user = User::where('id' => $request->user_id)->update(array({

     //       'first_name' => $request->first_name,
     //       'Mobile' => $request->user_mobile,
     //       'first_name' => $request->first_name,
     //       'first_name' => $request->first_name,
     //       'first_name' => $request->first_name,
           
    	// });
    	// if($user->save()){

		   //  	return response()->json([

		   //  		'message'=>'done',
		   //  		'id'=> 1,
		   //  		'name'=> $request->first_name

		   //  	]);
    	// }
    	// else{
    	// 	return response()->json([

		   //  		'message'=>'error',
		   //  		'id'=> 0,
		    		
		   //  	]);
    		
    	// }



    
