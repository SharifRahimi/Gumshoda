<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Item;
use Auth;
use App\Image;
use App\Category;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $items=Item::paginate(5);
        return view('layouts.items')->with('items',$items);
    }


    public function foundItems()
    {

          $items=Item::whereStatus('Found')->get();
          $items = Item::whereStatus('Found')->paginate(4);
          return view ('layouts.items_found')->with('items',$items)->withStatus('Found Items');
    }

    public function lostItems()
    {
          $items=Item::whereStatus('Lost')->get();
          $items = Item::whereStatus('Lost')->paginate(6);
          return view ('layouts.items_found')->with('items',$items)->withStatus('Lost Items');;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Item;
        $item->title=request('item_title');
        $item->description= request('description');
        $item->category_id = request("category");
        $item->location = request('location');
        $item->delivery_location= request('delivery_location');
        $item->user_id= Auth()->id();
        $item->status = request('status');
        $item->save();


        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);

        $imageModel = new Image; 
        $imageModel->image= $name;
        $imageModel->user_id = Auth::id();
        $imageModel->item_id = $item->id;
        $imageModel->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
