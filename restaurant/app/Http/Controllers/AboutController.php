<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;

class AboutController extends Controller
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
        $abouts = About::all();
        return view('about.index', compact('abouts'))->with('id');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.create');
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
            'description' => 'required',
            'image' => 'image|required|mimes:png,jpeg,jpg|max:10000'
        ]);

        $image = $request->image;
        if ($image) {
            $imageName = $image->getCLientOriginalName();
            $image->move('images/about', $imageName);
            $formInput['image'] = $imageName;
        }
        About::create($formInput);
        return redirect()->route('about.index')->with('success', 'About added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\About $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $formInput = $request->except('image');

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|required|mimes:png,jpeg,jpg|max:10000'
        ]);
        if (Input::hasFile('image')) {
            $aboutImage = public_path("images/about/{$about->image}");
            if (File::exists($aboutImage)) {
                unlink($aboutImage);
            }
            $image = Input::file('image');
            $imageName = $image->getCLientOriginalName();
            $image = $image->move('images/about', $imageName);
            $formInput['image'] = $imageName;
        }
        $about->update($formInput);
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('about.index');
    }
}
