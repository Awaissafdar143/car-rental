<?php

namespace App\Http\Controllers;

use App\models\vehicle;
use App\Models\vehicle_type;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    function search(request $request)
    {
        $types = vehicle_type::get();
        $cars = vehicle::when($request->filled('category'), function ($query) use ($request) {
            $query->where('car_type', $request->category);
        })->get();

        if ($request->ajax()) {
            if ($request->filled('category')) {
                $output = ''; {
                    foreach ($cars as $car) {
                        $output .=
                            '
                        <div class="col-xl-4 col-lg-6">
                        <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="images/cars/' . $car->car_image . '.jpg" class="img-fluid"
                                        style="width: 100%;height: 240px;" alt=" ' . $car->car_name . '">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <a class="h2" href="">
                                        <a class="h2" href="">
                                            <h3> ' . $car->car_name . '</h3>
                                        </a>
                                        <div class="d-item_like">
                                        <a href="javascript:void(0);" onclick="addtofavourite({{' . $car->id . '}})"><i

                                        class="fa fa-heart"></i> </a> <span>' . $car->car_review . ' </span>
                                        </div>
                                        <div class="d-atr-group">
                                            <span class="d-atr"><img src="images/icons/1-green.svg" alt="">
                                            ' . $car->car_passenger . ' </span>
                                            <span class="d-atr"><img src="images/icons/3-green.svg" alt="">
                                            ' . $car->car_gate . ' </span>
                                            <span class="d-atr"><img src="images/icons/4-green.svg" alt="">
                                            ' . $car->car_type . '</span>
                                            <span class="d-atr"> ' . $car->brand_name . '</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>$ ' . $car->car_rent . ' </span>
                                            <a class="btn-main" href="">Rent
                                            <a class="btn-main" href="">Rent
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        ';
                    }

                    return response()->json($output);
                }
            }


        } else {

            return view('car', compact('cars', 'types'));
        }

    }

}
