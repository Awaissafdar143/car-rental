@extends('layout.app')
@push('title')
<title>Rentaly |My Account | {{Auth::User()->name}}  </title>
@endpush
@section('content')
    <!-- header close -->
    <!-- content begin -->
    <div class="no-bottom no-top zebra" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('images/background/14.jpg') }}" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Dashboard</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <section id="section-cars" class="bg-gray-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 mb30">
                        <div class="card padding30 rounded-5">
                            @foreach ($users as $user)
                                <div class="profile_avatar">
                                    <div class="profile_img">
                                        <img src="{{ asset('images/profile/1.png') }}" class="img-fluid" alt="">
                                        {{-- <img src="{{ $user->profile_photo_path }}" alt=""> --}}
                                    </div>
                                    <div class="profile_name">
                                        <h4>
                                            {{ $user->name }}
                                            <span class="profile_username text-gray">{{ $user->email }}</span>
                                        </h4>
                                    </div>
                                </div>
                            @endforeach
                            <div class="spacer-20"></div>
                            <ul class="menu-col">
                                <li><a href="{{ route('user.dashboard') }}" class="active"><i class="fa fa-home"></i>Dashboard</a></li>
                                <li><a href="{{ route('profile') }}"><i class="fa fa-user"></i>My Profile</a></li>
                                <li><a href="account-booking.html"><i class="fa fa-calendar"></i>My Orders</a></li>
                                <li><a href="{{ route('account-favorite') }}"><i class="fa fa-car"></i>My Favorite Cars</a>
                                </li>
                                <li>
                                    <a href="{{route('logout')}}"
                                    onclick="event.preventDefault();document.getElementById('frmlogout').submit();"
                                    class="d-block"><i class="fa fa-sign-out"></i>Sign Out</a>
                                <form id="frmlogout" action="{{route('logout')}}" method="POST">
                                    @csrf
                                </form>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-3 col-6 mb25 order-sm-1">
                                <div class="card padding30 rounded-5">
                                    <div class="symbol mb40">
                                        <i class="fa id-color fa-2x fa-calendar-check-o"></i>
                                    </div>
                                    <span class="h1 mb0">03</span>
                                    <span class="text-gray">Upcoming Orders</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mb25 order-sm-1">
                                <div class="card padding30 rounded-5">
                                    <div class="symbol mb40">
                                        <i class="fa id-color fa-2x fa-tags"></i>
                                    </div>
                                    <span class="h1 mb0">12</span>
                                    <span class="text-gray">Coupons</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mb25 order-sm-1">
                                <div class="card padding30 rounded-5">
                                    <div class="symbol mb40">
                                        <i class="fa id-color fa-2x fa-calendar"></i>
                                    </div>
                                    <span class="h1 mb0">58</span>
                                    <span class="text-gray">Total Orders</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mb25 order-sm-1">
                                <div class="card padding30 rounded-5">
                                    <div class="symbol mb40">
                                        <i class="fa id-color fa-2x fa-calendar-times-o"></i>
                                    </div>
                                    <span class="h1 mb0">24</span>
                                    <span class="text-gray">Cancel Orders</span>
                                </div>
                            </div>
                        </div>

                        <div class="card padding30 rounded-5 mb25">
                            <h4>My Recent Orders</h4>

                            <table class="table de-table">
                                <thead>
                                    <tr>
                                        <th scope="col"><span class="fs-12 text-gray">Order ID</span></th>
                                        <th scope="col"><span class="fs-12 text-gray">Car Name</span></th>
                                        <th scope="col"><span class="fs-12 text-gray">Pick Up Location</span></th>
                                        <th scope="col"><span class="fs-12 text-gray">Drop Off Location</span></th>
                                        <th scope="col"><span class="fs-12 text-gray">Pick Up Date</span></th>
                                        <th scope="col"><span class="fs-12 text-gray">Return Date</span></th>
                                        <th scope="col"><span class="fs-12 text-gray">Status</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="d-lg-none d-sm-block">Order ID</span>
                                            <div class="badge bg-gray-100 text-dark">#01236</div>
                                        </td>
                                        <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Jeep
                                                Renegade</span></td>
                                        <td><span class="d-lg-none d-sm-block">Pick Up Location</span>New York</td>
                                        <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Los Angeles</td>
                                        <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 2, 2023</td>
                                        <td><span class="d-lg-none d-sm-block">Return Date</span>March 10, 2023</td>
                                        <td>
                                            <div class="badge rounded-pill bg-success">completed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="d-lg-none d-sm-block">Order ID</span>
                                            <div class="badge bg-gray-100 text-dark">#01263</div>
                                        </td>
                                        <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Mini
                                                Cooper</span></td>
                                        <td><span class="d-lg-none d-sm-block">Pick Up Location</span>San Fransisco</td>
                                        <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Chicago</td>
                                        <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 8, 2023</td>
                                        <td><span class="d-lg-none d-sm-block">Return Date</span>March 10, 2023</td>
                                        <td>
                                            <div class="badge rounded-pill bg-danger">cancelled</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="d-lg-none d-sm-block">Order ID</span>
                                            <div class="badge bg-gray-100 text-dark">#01245</div>
                                        </td>
                                        <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Ferrari
                                                Enzo</span></td>
                                        <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Philadelphia</td>
                                        <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Washington</td>
                                        <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 6, 2023</td>
                                        <td><span class="d-lg-none d-sm-block">Return Date</span>March 10, 2023</td>
                                        <td>
                                            <div class="badge rounded-pill bg-warning">scheduled</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="d-lg-none d-sm-block">Order ID</span>
                                            <div class="badge bg-gray-100 text-dark">#01287</div>
                                        </td>
                                        <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Hyundai
                                                Staria</span></td>
                                        <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Kansas City</td>
                                        <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Houston</td>
                                        <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 13, 2023</td>
                                        <td><span class="d-lg-none d-sm-block">Return Date</span>March 10, 2023</td>
                                        <td>
                                            <div class="badge rounded-pill bg-success">completed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="d-lg-none d-sm-block">Order ID</span>
                                            <div class="badge bg-gray-100 text-dark">#01216</div>
                                        </td>
                                        <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Toyota
                                                Rav 4</span></td>
                                        <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Baltimore</td>
                                        <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Sacramento</td>
                                        <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 7, 2023</td>
                                        <td><span class="d-lg-none d-sm-block">Return Date</span>March 10, 2023</td>
                                        <td>
                                            <div class="badge rounded-pill bg-warning">scheduled</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card padding30 rounded-5">
                            <h4>My Favorites</h4>
                            <div class="spacer-10"></div>
                            @foreach ($favourites as $favourite)
                                <div class="de-item-list no-border mb30">
                                    <div class="d-img">
                                        <img src="images/cars/{{ $favourite->vehicle->car_image }}.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="d-info">
                                        <div class="d-text">
                                            <h4>{{ $favourite->vehicle->car_name }}</h4>
                                            <div class="d-atr-group">
                                                <ul class="d-atr">
                                                    <li><span>Seats:</span>{{ $favourite->vehicle->car_passenger }}</li>
                                                    <li><span>Luggage:</span>{{ $favourite->vehicle->car_luggage }}</li>
                                                    <li><span>Doors:</span>{{ $favourite->vehicle->car_gate }}</li>
                                                    <li><span>Fuel:</span>{{ $favourite->vehicle->car_fuel_type }}</li>
                                                    <li><span>Engine:</span>{{ $favourite->vehicle->car_engine }}</li>
                                                    <li><span>Type:</span>{{ $favourite->vehicle->brand->brand_name }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>{{ $favourite->vehicle->car_rent }}</span>
                                        <a class="btn-main" href="{{ route('singlecar', $favourite->vehicle->id) }}">Rent
                                            Now</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <!-- content close -->

    <a href="#" id="back-to-top"></a>

    <!-- footer begin -->
@endsection
