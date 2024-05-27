@extends('layout.app')
@push('title')
<title>Rentaly |My Profile | {{Auth::User()->name}} </title>
@endpush
@section('content')
<!-- header close -->
<!-- content begin -->
<div class="no-bottom no-top zebra" id="content">
    <div id="top"></div>

    <!-- section begin -->
    <section id="subheader" class="jarallax text-light">
        <img src="{{asset ('images/background/14.jpg') }}" class="jarallax-img" alt="">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>My Profile</h1>
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
                                <img src="{{ asset($user->profile_photo_path) }}" alt="">
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
                            <li><a href="{{ route('user.dashboard') }}"><i class="fa fa-home"></i>Dashboard</a></li>
                            <li><a class="active" href="{{ route('profile') }}"><i class="fa fa-user"></i>My Profile</a>
                            </li>
                            <li><a href="account-booking.html"><i class="fa fa-calendar"></i>My Orders</a></li>
                            <li><a href="{{route('account-favorite')}}"><i class="fa fa-car"></i>My Favorite Cars</a>
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
                    <div class="card padding40  rounded-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="form-create-item" class="form-border" method="Post"
                                    action="{{ route('profile_update',Auth::user()->id) }}">
                                    <div class="de_tab tab_simple">

                                        <ul class="de_nav">
                                            <li class="active"><span>Profile</span></li>
                                        </ul>

                                        <div class="de_tab_content">
                                            <div class="tab-1">
                                                <div class="row">
                                                    <div class="col-lg-6 mb20">
                                                        @csrf
                                                        <h5>Username</h5>
                                                        <input type="text" name="username"
                                                            value='{{Auth::user()->name}}' id="username"
                                                            class="form-control" placeholder="Enter username" />
                                                    </div>
                                                    <div class="col-lg-6 mb20">
                                                        <h5>Email Address</h5>
                                                        <input type="text" name="email_address"
                                                            value='{{Auth::user()->email}}' id="email_address"
                                                            class="form-control" placeholder="Enter email" />
                                                    </div>
                                                    <div class="col-lg-6 mb20">
                                                        <h5>New Password</h5>
                                                        <input type="Password" name="user_password" id="user_password"
                                                            class="form-control" placeholder="********" />
                                                    </div>
                                                    <div class="col-lg-6 mb20">
                                                        <h5>Re-enter Password</h5>
                                                        <input type="Password" name="user_password_re-enter"
                                                            id="user_password_re-enter" class="form-control"
                                                            placeholder="********" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="submit" id="submit" class="btn-main" value="Update profile">
                                </form>
                            </div>
                        </div>
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