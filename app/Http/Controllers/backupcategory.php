<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Item;
class Categorycontroller extends Controller
{
    public function index()
    {
    	 $categories= Category::where('parent_id','<>',0)->paginate(3);
    	 // $categories = Category::orderBy('id')->paginate(8);
    	 return view('layouts.categorymanagement')->with('categories',$categories);
    }

    
     public function store(Request $request)
    {
           $category= new Category;
           $category->category=request('title');
           $category->parent_id=request('parent');
           $category->save();
        

         return redirect()->back();
       
    }


     public function edit($id)
    {

    	$category= Category::find($id);
        return response()->json([
        	'success' => 'done',
        	'id' => $category->id,
        	'title' => $category->category,
        	'parent_id' => $category->parent_id,
        ]);
    }

    
    public function update($id)
    {
    	$category= Category::find($id);
    	$category->category = request('cat_title');
    	$category->parent_id=request('cat_parent_id');
    	$category->save();
        return response()->json([
        	'success'=>'done',
        	'id' => request('cat_id'),
            'title' => request('cat_title'),
            'parentCategory' => '///////////////////////',
        ]);$parent = $category->parent($category->parent_id);
      $category->parrent_id=request('cat_parent_id');
    }



    public function delete($id)
    {
    	$category=Category :: find($id);
        $category->delete($id);
    	return response()->json([
    		'success'=>'record has been deleted',
            'id' => $id

    	]);
    }


}
