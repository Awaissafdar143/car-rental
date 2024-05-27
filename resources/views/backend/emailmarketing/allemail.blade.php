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
                <h2 class="title">All Emails </h2>
                <div class="container">
                    <a href="{{ route('admin.emailmarketing') }}" class="btn btn-md btn-main my-4">Back TO Dashboard</a>
                    <a href="{{ route('email_delete_permanent') }}" class="btn btn-md btn-main my-4">Delete ALL</a>
                    <div class="row">
                        <div class="col-md-10">
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <td>id</td>
                                        <td>email</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($emails as $email )
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$email->email}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $emails->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection