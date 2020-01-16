<?php

namespace App\Http\Controllers\Frontend;

use App\Reservation;
//use Brian2694\Toastr\Toastr;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    public function reserve(Request $request)
    {
        $this->validate($request,[
           'name' => 'required',
           'phone' => 'required',
           'email' => 'required|email',
           'dateandtime' => 'required',
        ]);
        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->phone = $request->phone;
        $reservation->email = $request->email;
        $reservation->date_and_time = $request->dateandtime;
//        $reservation->message = $request->message;
        $reservation->status = false;
        $reservation->save();
        Toastr::success('Reservation request sent successfully. We will confirm to you shortly','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
