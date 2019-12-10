<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Unused
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Unused
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        // dd($request->all());
        // Check if the inputs are valid. Return error if it's not
        $request -> validate([
            'name' => 'string|required',
            'price' => 'integer|required',
            'category' => 'string|required',
            'stock' => 'integer|required',
            'description' => 'string|required',
            'photo' => 'image|nullable',
        ]);

        // Handle the image.
        if($request->hasFile('photo')){
            // Get filename with the extension
            $fileNameWithExt = $request->file('photo')->getClientOriginalName();
            // Get just filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('photo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $fileName.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('photo')->storeAs('public/photos', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.svg';
        }

        // Input the datas
        $item = new Item;
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->category = $request->input('category');
        $item->stock = $request->input('stock');
        $item->description = $request->input('description');
        $item->photo = $fileNameToStore;
        $item->is_promo = (isset($request->is_promo)) ? 1 : 0;
        $item->save();
        
        return redirect()->intended('/dashboard/items')->with('success', 'Item\'s Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Showing each items
        // Use resource controller
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //  Unused
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
        //  Unused
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //  Unused
    }
}
