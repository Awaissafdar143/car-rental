@extends('layout.app')
@push('title')
<title>Rentaly | cars </title>
@endpush
@section('content')
<!-- content begin -->
<div class="no-bottom no-top zebra" id="content">
    <div id="top"></div>

    <!-- section begin -->
    <section id="subheader" class="jarallax text-light">
        <img src="{{ asset('images/background/2.jpg') }}" class="jarallax-img" alt="">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Cars</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <section id="section-cars">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="item_filter_group">
                        <h4>Vehicle Type</h4>
                        <div class="de_form">
                            <select class="btn-main fs-5" id="category" id="category">
                                <option value=" " class="bg-dark">Select Brand</option>
                                @foreach ($types as $type)
                                <div class="de_checkbox">
                                    <option value="{{ $type->brand_id }}" class="bg-dark">{{ $type->brand_name }}
                                    </option>
                                </div>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    {{-- <div class="item_filter_group">
                        <h4>Car Body Type</h4>
                        <div class="de_form">
                            @foreach ($types as $type)
                            <div class="de_checkbox">
                                <input id="{{ $type->brand_id }}" name="car_body_type_1" type="checkbox"
                                    value="{{ $type->brand_id }}">
                                <label for="{{ $type->brand_id }}">{{ $type->brand_name }}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="item_filter_group">
                        <h4>Car Body Type</h4>
                        <div class="de_form">
                            <div class="de_checkbox">
                                <input id="car_body_type_1" name="car_body_type_1" type="checkbox"
                                    value="car_body_type_1">
                                <label for="car_body_type_1">Convertible</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_2" name="car_body_type_2" type="checkbox"
                                    value="car_body_type_2">
                                <label for="car_body_type_2">Coupe</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_3" name="car_body_type_3" type="checkbox"
                                    value="car_body_type_3">
                                <label for="car_body_type_3">Exotic Cars</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_4" name="car_body_type_4" type="checkbox"
                                    value="car_body_type_4">
                                <label for="car_body_type_4">Hatchback</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_5" name="car_body_type_5" type="checkbox"
                                    value="car_body_type_5">
                                <label for="car_body_type_5">Minivan</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_6" name="car_body_type_6" type="checkbox"
                                    value="car_body_type_6">
                                <label for="car_body_type_6">Truck</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_7" name="car_body_type_7" type="checkbox"
                                    value="car_body_type_7">
                                <label for="car_body_type_7">Sedan</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_8" name="car_body_type_8" type="checkbox"
                                    value="car_body_type_8">
                                <label for="car_body_type_8">Sports Car</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_9" name="car_body_type_9" type="checkbox"
                                    value="car_body_type_9">
                                <label for="car_body_type_9">Station Wagon</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_10" name="car_body_type_10" type="checkbox"
                                    value="car_body_type_10">
                                <label for="car_body_type_10">SUV</label>
                            </div>

                        </div>
                    </div>

                    <div class="item_filter_group">
                        <h4>Car Seats</h4>
                        <div class="de_form">
                            <div class="de_checkbox">
                                <input id="car_seat_1" name="car_seat_1" type="checkbox" value="car_seat_1">
                                <label for="car_seat_1">2 seats</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_seat_2" name="car_seat_2" type="checkbox" value="car_seat_2">
                                <label for="car_seat_2">4 seats</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_seat_3" name="car_seat_3" type="checkbox" value="car_seat_3">
                                <label for="car_seat_3">6 seats</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_seat_4" name="car_seat_4" type="checkbox" value="car_seat_4">
                                <label for="car_seat_4">6+ seats</label>
                            </div>

                        </div>
                    </div>
                    <div class="item_filter_group">
                        <h4>Car Engine Capacity (cc)</h4>
                        <div class="de_form">
                            <div class="de_checkbox">
                                <input id="car_engine_1" name="car_engine_1" type="checkbox" value="car_engine_1">
                                <label for="car_engine_1">1000 - 2000</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_engine_2" name="car_engine_2" type="checkbox" value="car_engine_2">
                                <label for="car_engine_2">2000 - 4000</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_engine_3" name="car_engine_3" type="checkbox" value="car_engine_3">
                                <label for="car_engine_3">4000 - 6000</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_engine_4" name="car_engine_4" type="checkbox" value="car_engine_4">
                                <label for="car_engine_4">6000+</label>
                            </div>

                        </div>
                    </div> --}}

                    <div class="item_filter_group">
                        <h4>Price ($)</h4>
                        <div class="price-input">
                            <div class="field">
                                <span>Min</span>
                                <input type="number" class="input-min" value="0">
                            </div>
                            <div class="field">
                                <span>Max</span>
                                <input type="number" class="input-max" value="2000">
                            </div>
                        </div>
                        <div class="slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" id="range-min" class="range-min" min="0" max="2000" value="0" step="1">
                            <input type="range" id="range-max" class="range-max" min="0" max="2000" value="2000"
                                step="1">
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="row" id="cards">
                        @if (count($cars)>0)
                        @foreach ($cars as $car)
                        <div class="col-xl-4 col-lg-6">
                            <div class="de-item mb30">
                                <div class="d-img">
                                    <img src="images/cars/{{ $car->car_image }}.jpg" class="img-fluid"
                                        style="width: 100%;height: 240px;" alt="{{ $car->car_name }}">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <a class="h2" href="{{ route('singlecar', $car->id) }}">
                                            <h3>{{ $car->car_name }}</h3>
                                        </a>
                                        {{-- <h4>{{ $car->car_name }}</h4> --}}
                                        @if(Route::has('login'))
                                        @auth
                                        <div class="d-item_like">
                                            <a href="javascript:void(0);" onclick="addtofavourite({{ $car->id }})"><i
                                                    class="fa fa-heart"></i> </a> <span>{{ $car->car_review }}</span>
                                        </div>
                                        @endauth
                                        @endif

                                        <div class="d-atr-group">
                                            <span class="d-atr"><img src="{{ asset('images/icons/1-green.svg') }}" alt="">{{
                                                $car->car_passenger }}</span>
                                            {{-- <span class="d-atr"><img src="images/icons/2-green.svg" alt="">2</span>
                                            --}}
                                            <span class="d-atr"><img src="{{ asset('images/icons/3-green.svg') }}" alt="">{{
                                                $car->car_gate }}</span>
                                            <span class="d-atr"><img src="{{ asset('images/icons/3-green.svg') }}" alt="">{{
                                                $car->car_type }}</span>
                                            <span class="d-atr">{{ $car->brand_name }}</span>
                                        </div>
                                        <div class="d-price">
                                            Daily rate from <span>${{ $car->car_rent }}</span>
                                            <a class="btn-main" href="{{ route('route') }}">Rent
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="col-12">
                            <div class="h1 text-uppercase text-center mt-5">
                                No Record found
                            </div>
                        </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </section>


</div>
<!-- content close -->
@push('script')
<script>
    $(document).ready(function() {
                $('#category').on('change', function() {
                    var category = $(this).val();
                    $.ajax({
                        url: "{{ route('car') }}",
                        type: "GET",
                        data: {
                            'category': category
                        },
                        success: function(data) {


                            $('#cards').html(data);
                        }
                    })
                })
                // price filter
                $('#range-min').on('change', function() {
                    var range_min = $(this).val();
                    var range_max = $('#range-max').val();
                    // alert('hello');
                    $.ajax({
                        url: "{{ route('car') }}",
                        type: "GET",
                        data: {
                            'range_min': range_min,
                            'range_max': range_max
                        },
                        success: function(data) {
                            $('#cards').html(data);
                        }
                    })
                })

                $('#range-max').on('change', function() {
                    var range_max = $(this).val();
                    var range_min = $('#range-min').val();
                    // alert('hello');
                    $.ajax({
                        url: "{{ route('car') }}",
                        type: "GET",
                        data: {
                            'range_min': range_min,
                            'range_max': range_max
                        },
                        success: function(data) {


                            $('#cards').html(data);
                        }
                    })
                });

            });
            function addtofavourite(car_id){
                    var car_id=car_id;
                    $.ajax({
                        url: "{{ route('car') }}",
                        type: "GET",
                        data: {
                            'car_id': car_id,
                        },
                        success: function(data) {
                        }
                    })
                }
</script>
@endpush
@endsection

@push('style')
<style>
    .active {
        font-size: 30px;
        color: #000;
        font-weight: 900;
    }
</style>
@endpush
