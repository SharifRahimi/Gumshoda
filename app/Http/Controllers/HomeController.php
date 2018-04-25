<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Illuminate\Support\Facades\DB;
use App\Category;
use Carbon\Carbon;
use App\Image;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::where('parent_id',0)->get();
        $items = Item::orderBy('id')->paginate(8);
        return view('layouts.home')->with(['items'=>$items, 'categories'=> $categories]);

    }


     public function LostFound()
    {
        $categories= Category::where('parent_id',0)->get();
        return view('layouts.items_found')->with('categories', $categories);

    }



    public function showItemContactDetails($id)
    {  
        
        $item = Item::find($id);
        $user = $item->user; 
        return Response()->json([
            'success' => 'done',
            'user' => $user,
            'item' => $item,
            
        ]);
    }

    public function showItemQuickView($id)
    {
    
        $item= Item::find($id);
        $user=$item->user;
        $images = $item->images;
        return Response()->json([
            'success'=>'OK',
            'user'=>$user,
            'item'=>$item,
            'images' => $images
        ]);
    }

}
