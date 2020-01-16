<?php

namespace App\Http\Controllers\Frontend;

use App\About;
use App\Category;
use App\Chef;
use App\Dish;
use App\Gallery;
use App\Item;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
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

    public function about()
    {
        $galleries = Gallery::all();
        $chefs = Chef::all();
        $abouts = About::all();
        return view('frontend.about-us',compact('abouts','chefs','galleries'));
    }

    public function gallery()
    {
        $abouts = About::all();
        $galleries = Gallery::all();
        return view('frontend.gallery',compact('galleries','abouts'));
    }

    public function menu()
    {
        $galleries = Gallery::all();
        $abouts = About::all();
        $categories = Category::all();
        $dishes = Dish::all();
        return view('frontend.menu-grid',compact('categories','dishes','abouts','galleries'));
    }

    public function table()
    {
        $abouts = About::all();
        $galleries = Gallery::all();
        return view('frontend.table',compact('abouts','galleries'));
    }

    public function contact()
    {
        $galleries = Gallery::all();
        $abouts = About::all();
        return view('frontend.contact',compact('abouts','galleries'));
    }

    public function chef()
    {
        return view('frontend.chef');
    }
}
