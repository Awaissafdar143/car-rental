<?php

namespace App\Http\Controllers;

use App\models\blog;
use App\Models\User;
use App\models\brand;
use App\models\vehicle;
use App\Models\favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class mainhomecontroller extends Controller
{
    function car_show(request $request)
    {

        $types = brand::get();
        $cars = vehicle::when($request->filled('category'), function ($query) use ($request) {
            $query->where('car_type', $request->category);
        })->when($request->filled('range_min') || $request->filled('range_max'), function ($query) use ($request) {
            // dd($request->range_min,$request->range_max);
            $query->where([
                ['car_rent', '>=', $request->range_min],
                ['car_rent', '<=', $request->range_max]
            ]);
        })->get();

        if ($request->ajax()) {
            if($request->filled('category') || $request->filled('range_min') ||$request->filled('range_max') )
           { $output = ''; {
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
                                        <a href="javascript:void(0);" onclick="addtofavourite({{'. $car->id .'}})"><i

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
        else{
            $favourite= new favorite;
            $favourite->car_id=$request->car_id;
            $favourite->user_id=Auth::user()->id;
            $favourite->save();
        }


        } else {

            return view('car', compact('cars', 'types'));
        }

    }

    function car_show_home(request $request)
    {
        $blogs = blog::orderBy('created_at')->limit(3)->get();
        $query = vehicle::query();
        $cars = $query->get();
        return view('index', compact('cars', 'blogs'));
    }
    function blog_show(request $request)
    {
        $blogs = blog::paginate(10);
        return view('blog', compact('blogs'));
    }
    function blog_single($slug)
    {
        $blogs = blog::where('slug', $slug)->get();
        $datas = blog::orderBy('created_at')->get();
        // dd($blogs);
        return view('blog-single', compact('blogs','datas'));
    }
    function single_car_show($slug)
    {
        $cars = vehicle::where('id', $slug)->get();
        // dd($blogs);
        return view('car-single', compact('cars'));
    }

    function dashboard()
    {
        $id = auth()->user()->id;
        $favourites=favorite::where('user_id',$id)->get();
        // $users=DB::table('users')->where('id',$id)->get();
        $users = user::where('id', $id)->get();
        return view('account-dashboard', compact('favourites','users'));
    }
    function account_favorite()
    {
        $id = auth()->user()->id;
        $favourites=favorite::where('user_id',$id)->get();
        $users = user::where('id', $id)->get();
        return view('account-favorite', compact('favourites','users'));
    }
    function singleuser_dashboard()
    {
        $id = auth()->user()->id;
        // $users=DB::table('users')->where('id',$id)->get();
        $users = User::where('id', $id)->get();
        return view('account-profile', compact('users'));
    }
    function route()
    {
        return view('map');
    }
    function checkout()
    {
        return view('checkoutpage');
    }
    function about()
    {
        return view('about');
    }
    function booking()
    {
        return view('booking');
    }
    function gallery()
    {
        return view('gallery');
    }
}
