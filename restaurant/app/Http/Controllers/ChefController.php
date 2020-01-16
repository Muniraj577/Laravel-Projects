<?php

namespace App\Http\Controllers;

use App\Chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ChefController extends Controller
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
        $chefs = Chef::all();
        return view('chef.index', compact('chefs'))->with('id');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chef.create');
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
            'name' => 'required',
            'image' => 'image|required|mimes:png,jpeg,jpg|max:10000'
        ]);

        $image = $request->image;
        if ($image) {
            $imageName = $image->getCLientOriginalName();
            $image->move('images/chef', $imageName);
            $formInput['image'] = $imageName;
        }
        Chef::create($formInput);
        return redirect()->route('chef.index')->with('success', 'Chef added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chef $chef
     * @return \Illuminate\Http\Response
     */
    public function show(Chef $chef)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chef $chef
     * @return \Illuminate\Http\Response
     */
    public function edit(Chef $chef)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Chef $chef
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chef $chef)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chef $chef
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chef $chef)
    {
        $chefImage = public_path("images/chef/{$chef->image}");
        if (File::exists($chefImage)) {
            unlink($chefImage);
        }
        $chef->delete();
        return redirect()->route('chef.index')->with('success', 'Chef deleted successfully.');
    }
}
