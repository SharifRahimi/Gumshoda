<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Feedback;
use App\User;
use Auth;
class FeedbackController extends Controller
{
     public function store(Request $request)
    {
        $feedback = new Feedback;
        $feedback->id=request('id');
        if(Auth::check())
        {
        	$feedback->user_id= Auth::id();
    	}

        $feedback->feedback=request('comment');
        $feedback->save();
         return redirect()->back();

        
    }

    public function index()
    {
    	$feedbacks = Feedback::paginate(5);
    	return view('layouts.feedback')->with('feedbacks',$feedbacks);
    }

    public function edit($id)
    {

        return "edit".$id;
    }


    public function delete()
    {

        return "delete";
    }
}
