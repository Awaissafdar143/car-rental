@extends('layout.app')
@push('title')
<title>Rentaly |My favourite | {{Auth::User()->name}}  </title>
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
									<h1>My Favorite Cars</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

            <section id="section-settings" class="bg-gray-100">
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
                                    <li><a href="{{ route('user.dashboard') }}" ><i class="fa fa-home"></i>Dashboard</a></li>
                                    <li><a  href="{{ route('profile') }}"><i class="fa fa-user"></i>My Profile</a></li>
                                    <li><a href="account-booking.html"><i class="fa fa-calendar"></i>My Orders</a></li>
                                    <li><a href="{{ route('account-favorite') }}"  class="active"><i class="fa fa-car"></i>My Favorite Cars</a></li>
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
                            @foreach ($favourites as $favourite)
                            <div class="de-item-list no-border mb30 w-100">
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
{{--
                            <div class="de-item-list no-border mb30">
                                <div class="d-img">
                                    <img src="images/cars/bmw-m5.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>BMW M2</h4>
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Seats:</span>4</li>
                                                <li><span>Luggage:</span>2</li>
                                                <li><span>Doors:</span>4</li>
                                                <li><span>Fuel:</span>Petrol</li>
                                                <li><span>Horsepower:</span>500</li>
                                                <li><span>Engine:</span>3000</li>
                                                <li><span>Drive:</span>4x4</li>
                                                <li><span>Type:</span>Hatchback</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>$244</span>
                                    <a class="btn-main" href="car-single.html">Rent Now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="de-item-list no-border mb30">
                                <div class="d-img">
                                    <img src="images/cars/ferrari-enzo.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Ferarri Enzo</h4>
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Seats:</span>4</li>
                                                <li><span>Luggage:</span>2</li>
                                                <li><span>Doors:</span>4</li>
                                                <li><span>Fuel:</span>Petrol</li>
                                                <li><span>Horsepower:</span>500</li>
                                                <li><span>Engine:</span>3000</li>
                                                <li><span>Drive:</span>4x4</li>
                                                <li><span>Type:</span>Hatchback</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>$167</span>
                                    <a class="btn-main" href="car-single.html">Rent Now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </section>


        </div>
        <!-- content close -->
@endsection
