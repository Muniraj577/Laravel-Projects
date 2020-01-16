<?php

namespace App\Http\Controllers;

use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
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
        $categories = Category::all();
        return view('category.index', compact('categories'))->with('id');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:10000',
        ]);
        $image = $request->file('image');
        $slug = Str::slug($request->name);
        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!file_exists('images/category')) {
                mkdir('images/category', 0777, true);
            }
            $image->move('images/category', $imagename);
        }
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->image = $imagename;
        $category->save();
        return redirect()->route('category.index')->with('success', 'Category added successfully.');

//        $formInput = $request->except('image');
//
//        $this->validate($request, [
//            'name' => 'required',
//            'image' => 'image|required|mimes:png,jpeg,jpg|max:10000'
//        ]);
//
//        $image = $request->image;
//        if ($image) {
//            $imageName = $image->getCLientOriginalName();
//            $image->move('images/category', $imageName);
//            $formInput['image'] = $imageName;
//        }
//        $category = new Category();
//        $category->name = $request->name;
//        $category->slug = Str::slug($request->name);
//        $category->image = $imageName;
//        $category->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category $cate return view('category.show', compact('category'));
     * gory
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:10000',
        ]);
        $category = Category::find($id);
        $image = $request->file('image');
        $slug = Str::slug($request->name);
        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!file_exists('images/category')) {
                mkdir('images/category', 0777, true);
            }
            unlink('images/category/' . $category->image);
            $image->move('images/category', $imagename);
        }
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->image = $imagename;
        $category->save();
        return redirect()->route('category.index')->with('success', 'Category updated successfully.');


//        $formInput = $request->except('image');
//
//        $this->validate($request, [
//            'name' => 'required',
//            'image' => 'image|required|mimes:png,jpeg,jpg|max:10000'
//        ]);
//        if (Input::hasFile('image')) {
//            $categoryImage = public_path("images/category/{$category->image}");
//            if (File::exists($categoryImage)) {
//                unlink($categoryImage);
//            }
//            $image = Input::file('image');
//            $imageName = $image->getCLientOriginalName();
//            $image = $image->move('images/category', $imageName);
//            $formInput['image'] = $imageName;
//        }
//        $category = Category::all();
//        $category->name = $request->name;
//        $category->slug = Str::slug($request->name);
//        $category->image = $imageName;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
//        $categoryImage = public_path("images/category/{$category->image}");
//        if (File::exists($categoryImage)) {
//            unlink($categoryImage);
//        }
        if (file_exists('images/category/'.$category->image))
        {
            unlink('images/category/'.$category->image);
        }
        $category->delete();
        return redirect()->route('category.index')->with('sucess', 'Category deleted successfully.');
    }

}
