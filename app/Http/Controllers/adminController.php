<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class adminController extends Controller
{
     public function create()
    {
        return view('registration.create');
    }
    
    public function store()
    {
        $this->validate(request(), [
            'firstname' => 'required',
            'email' => 'required|email',
            // 'admin_user' => 'required',              
            'password' => 'required|string|min:6|confirmed',
        ]);

    }

     public function re_create(Request $request)
    {
        $admins = new User;
        $admins->first_name=request('firstname');
        $admins->last_name=request('lastname');
        $admins->email=request('email');
        $admins->is_admin= request('is_admin');
        $admins->password=bcrypt(request('password'));
        $admins->save();
         return redirect()->back();

}


}



