@extends('backend.layout.app')
@section('content')
    <div class="page-wrapper  p-t-100 p-b-100 font-robo">
        @if (session('message'))
            <div class="alert alert-warning" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update Car</h2>
                    @foreach ($datas as $data )
                    <form method="POST" action="{{ route('car_update_post') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Enter Car Name" value="{{ $data->car_name }}" name="car_name">
                            @error('car_name')
                                <p  class="alert alert-primary w-100" role="alert">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Enter Car rent" min="10"
                                max="999" name="car_rent" value="{{ $data->car_rent }}">
                                @error('car_rent')
                                <p  class="alert alert-primary w-100" role="alert">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="Number" placeholder="Enter Passenger" min="0"
                                max="10" name="car_passenger" value="{{ $data->car_passenger}}">
                                @error('car_passenger')
                                <p  class="alert alert-primary w-100" role="alert">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="Number" placeholder="Enter Gate" min="0"
                                max="5" name="car_gate" value="{{ $data->car_gate}}">
                                @error('car_gate')
                                <p  class="alert alert-primary w-100" role="alert">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-group">
                            <img src="{{ asset($data->car_image) }}" width="100" height="100">
                            <input class="input--style-1" type="file" placeholder="Enter Car image" value="{{ $data->car_image }}" name="image">
                            @error('image')
                            <p  class="alert alert-primary w-100" role="alert">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="content">
                            Enter Your Short Description
                        </div>
                        <br>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder=" Enter Your Short Description"
                            value="{{ $data->shortdescription}}"   name="shortdescription">
                        </div>
                        <br>
                        <div class="content">
                            Enter Your Long Description
                        </div>
                        <br>
                        <div class="input-group">

                            <textarea class="form-control" id="content" style="
                        width: 100%;
                    "
                                placeholder="Enter the Long Description" name="content">{!! $data->longdescription !!}</textarea>
                        </div>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn-main btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
@push('style')
    <script src="{{ asset('ckeditor/ckeditor/ckeditor.js') }}"></script>
    <style>
        input {
            font-size: 18px !important;
            padding: 11px 22px !important;
        }

        .content {
            font-size: 21px;
            font-weight: 800;
        }
    </style>
@endpush
@push('script')
    <script>
        CKEDITOR.replace('content');
    </script>
@endpush
