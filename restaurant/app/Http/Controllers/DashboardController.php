<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Dish;
use App\Reservation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $categoryCount = Category::count();
        $dishCount = Dish::count();
        $reservations = Reservation::where('status',false)->get();
        $contactCount = Contact::count();
        return view('admin',compact('categoryCount','dishCount','reservations','contactCount'));
    }
}
