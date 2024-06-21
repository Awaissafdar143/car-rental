<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\models\vehicle;
use App\Models\vehicle_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    function booking()
    {
        $datas = booking::all();
        return view('backend.Booking.booking', compact('datas'));
    }
    function bookingdone(request $request)
    {
        $data = new booking;
        $data->pickupLocation= $request->PickupLocation;
        $data->dropoffLocation= $request->DropoffLocation;
        $data->pickupTime= $request->PickUpDate;
        $data->dropoffTime= $request->CollectionDate;
        $data->User_id= Auth::User()->id;
        $data->car_id= $request->car_id;
        $data->save();
        return redirect()->back();
    }

}
