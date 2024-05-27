@extends('backend.layout.app')
@section('content')
<div class="page-wrapper p-t-100 p-b-100 font-robo">
    @if (session('message'))
    <div class="alert alert-warning" role="alert">
        {{ session('message') }}
    </div>
    @endif
    <div class="wrapper wrapper--w680">
        <div class="card card-1">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Car Dashboard</h2>
                <a href="{{ route('admin.select') }}" class="btn btn-lg btn-main my-4">Add Car</a>
                <table class="table table-striped table-hover">
                    <tr>
                        <th  width="15%"class='text-white fw-bold fs-3'>id</th>
                        <th  width="15%"class='text-white fw-bold fs-3'>Car Name</th>
                        <th  width="15%"class='text-white fw-bold fs-3'>Brand Name</th>
                        <th  width="15%"class='text-white fw-bold fs-3'>Rent</th>
                        <th  width="15%"class='text-white fw-bold fs-3'>short Description</th>
                        <th  width="15%"class='text-white fw-bold fs-3' colspan="2">Action</th>
                    </tr>
                    @foreach ($datas as $data )
                    <tr>
                        <td class="text-white" width="15%">{{$loop->iteration}}</td>
                        <td class="text-white" width="15%">{{ $data->car_name }}</td>
                        <td class="text-white" width="15%">{{ $data->brand->brand_name }}</td>
                        <td class="text-white" width="15%">{{ $data->car_rent }}</td>
                        <td class="text-white" width="15%">{{ $data->shortdescription }}</td>
                        <td class="text-white" width="15%"><a href="{{ route('admincar.update',$data->id) }}" class="btn btn-danger btn-sm">Update</a></td>
                        <td><a href="{{ route('admin.cardelete',$data->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@push('style')
    <style>
           table {
        width: 100% !important;
        border-collapse: collapse !important;
    }
    th, td {
        color: var(--body-font-color) !important;
        width:150px !important;
        border-bottom: 1px solid #ddd !important;
        word-wrap: break-word !important; /* Ensures long text wraps within cells */
    }
    </style>
@endpush
@endsection
