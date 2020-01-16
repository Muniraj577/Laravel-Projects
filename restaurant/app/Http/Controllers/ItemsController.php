<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'))->with('id');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput = $request->except('image');

        $this->validate($request, [
            'title' => 'required',
            'image' => 'image|required|mimes:png,jpeg,jpg|max:10000',
            'description' => 'required',
        ]);

        $image = $request->image;
        if ($image) {
            $imageName = $image->getCLientOriginalName();
            $image->move('images/items', $imageName);
            $formInput['image'] = $imageName;
        }
        Item::create($formInput);
        return redirect()->route('items.index')->with('success', 'Item added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item $serviceItem
     * @return \Illuminate\Http\Response
     */
    public function show(Item $items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item $serviceItem
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $items)
    {
        return view('items.edit', compact('items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Item $serviceItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        $this->validate($request, [
//            'title' => 'required',
//            'description' => 'required',
//            'image' => 'required|mimes:jpeg,jpg,png|max:10000'
//        ]);
//        $items = Items::find($id);
//        $image = $request->file('image');
//        $slug = Str::slug($request->title);
//        if (isset($image)) {
//            $currentDate = Carbon::now()->toDateString();
//            $imagename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
//
//            if (!file_exists('images/items')) {
//                mkdir('images/items', 0777, true);
//            }
//            unlink('images/items/' . $items->image);
//            $image->move('images/items', $imagename);
//        }
//        $items->title = $request->title;
//        $items->description = $request->description;
//        $items->image = $imagename;
//        $items->save();
//        return redirect()->route('items.index')->with('success', 'Items updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item $serviceItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $Item)
    {
        $itemsImage = public_path("images/items/{$Item->image}");
        if (File::exists($itemsImage)) {
            unlink($itemsImage);
        }
        $Item->delete();
        return redirect()->route('items.index')->with('sucess', 'Item deleted successfully.');
//        if (file_exists('images/items/' . $items->image)) {
//            unlink('images/items/' . $items->image);
//        }
//        $items->delete();
//        return redirect()->route('items.index');
    }
}
