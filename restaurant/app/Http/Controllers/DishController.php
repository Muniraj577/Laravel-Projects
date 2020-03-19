<?php

namespace App\Http\Controllers;

use App\Category;
use App\Dish;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class DishController extends Controller
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
        $dishes = Dish::all();
        return view('dish.index', compact('dishes'))->with('id');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dish.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
         'categories' => 'required',
         'name' => 'required',
         'description' => 'sometimes',
         'price' => 'required',
         'image' => 'required|mimes:jpeg,jpg,png|max:10000'
     ]);
        $image = $request->file('image');
        $slug = Str::slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('images/dish'))
            {
                mkdir('images/dish', 0777, true);
            }
            $image->move('images/dish', $imagename);
        }
        $dish = new Dish();
        $dish->category_id = $request->categories;
        $dish->name = $request->name;
        $dish->description = $request->description;
//        $dish->description = Input::get('description');
        $dish->price = $request->price;
        $dish->image = $imagename;
        $dish->save();
        return redirect()->route('dish.index')->with('success', 'Dish added successfully.');

//        $formInput = $request->except('image');
//
//        $this->validate($request, [
//            'name' => 'required',
//            'price' => 'required',
//            'categories' => 'required',
//            'description' => 'required',
//            'image' => 'image|required|mimes:png,jpeg,jpg|max:10000'
//        ]);
//
//        $image = $request->image;
//        if ($image) {
//            $imageName = $image->getCLientOriginalName();
//            $image->move('images/dish', $imageName);
//            $formInput['image'] = $imageName;
//        }
//        $dish = new Dish();
//        $dish->category_id = $request->categories;
//        $dish->name = $request->name;
//        $dish->description = $request->description;
//        $dish->price = $request->price;
//        $dish->image = $imageName;
//        $dish->save();

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Dish $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        $dishes = Dish::all();
        return view('dish.show', compact('dish', 'dishes', $dish));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dish $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        $categories = Category::all();
        return view('dish.edit', compact('dish', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Dish $dish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
         'categories' => 'required',
         'name' => 'required',
         'description' => 'sometimes',
         'price' => 'required',
         'image' => 'required|mimes:jpeg,jpg,png|max:10000'
     ]);
        $dish = Dish::find($id);
        $image = $request->file('image');
        $slug = Str::slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('images/dish'))
            {
                mkdir('images/dish',0777, true);
            }
            unlink('images/dish/'.$dish->image);
            $image->move('images/dish', $imagename);
        }
        $dish->category_id = $request->categories;
        $dish->name = $request->name;
        $dish->description = $request->description;
//        $dish->description = Input::get('description');
        $dish->price = $request->price;
        $dish->image = $imagename;
        $dish->save();
        return redirect()->route('dish.index')->with('success', 'Dish updated successfully.');
//        $formInput = $request->except('image');
//
//        $this->validate($request, [
//            'name' => 'required',
//            'price' => 'required',
//            'categories' => 'required',
//            'description' => 'required',
//            'image' => 'image|required|mimes:png,jpeg,jpg|max:10000'
//        ]);
//        if (Input::hasFile('image')) {
//            $dishImage = public_path("images/dish/{$dish->image}");
//            if (File::exists($dishImage)) {
//                unlink($dishImage);
//            }
//            $image = Input::file('image');
//            $imageName = $image->getCLientOriginalName();
//            $image = $image->move('images/dish', $imageName);
//            $formInput['image'] = $imageName;
//        }
//        $dish->category_id = $request->category;
//        $dish->name = $request->name;
//        $dish->description = $request->description;
//        $dish->price = $request->price;
//        $dish->image = $imageName;
//        $dish->save;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dish $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
//        $dishImage = public_path("images/dish/{$dish->image}");
//        if (File::exists($dishImage)) {
//            unlink($dishImage);
//        }
//        $dish = Dish::all();
        if (file_exists('images/dish/'.$dish->image))
        {
            unlink('images/dish/'.$dish->image);
        }
        $dish->delete();
        return redirect()->route('dish.index');
    }
}
