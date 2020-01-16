<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Category;
use App\Gallery;
use App\About;
use App\Chef;
use App\Item;
use App\Dish;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::all();
        $galleries = Gallery::all();
        $abouts = About::all();
        $chefs = Chef::all();
        $items = Item::all();
        $categories = Category::all();
        $dishes = Dish::all();
        return view('frontend.index',compact('items','categories','dishes','chefs','abouts','galleries','sliders'));
    }
}
