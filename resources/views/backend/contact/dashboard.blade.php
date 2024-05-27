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
                <h2 class="title">Contact Us form Dashboard </h2>
                <table class="table table-light">
                    <tr>
                        <th class='fw-bold fs-3'>id</th>
                        <th class='fw-bold fs-3'>Name</th>
                        <th class='fw-bold fs-3'>Email</th>
                        <th class='fw-bold fs-3'>Phone</th>
                        <th class='fw-bold fs-3'>Subject</th>
                        <th class='fw-bold fs-3'>Message</th>
                        <th class='fw-bold fs-3'>Action</th>
                    </tr>
                    @foreach ($datas as $data )
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->phone}}</td>
                        <td>{{ $data->subject}}</td>
                        <td>{{ $data->message}}</td>
                        <td><a href="{{ url('deleted/'.$data->id) }}" class="btn btn-danger btn-sm">Delete</a>
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

    th,
    td {
        color: var(--body-font-color) !important;
        width: 150px !important;
        border-bottom: 1px solid #ddd !important;
        word-wrap: break-word !important;
        /* Ensures long text wraps within cells */
    }
</style>
@endpush
@endsection
