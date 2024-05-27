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
                <h2 class="title">Email Marketing Dashboard </h2>
                <a href="{{ route('add_template_admin') }}" class="btn btn-lg btn-main my-4">Add Template </a>
                <a href="{{ route('add_email') }}" class="btn btn-lg btn-main my-4">Add Email addresses </a>
                <a href="{{ route('all_email') }}" class="btn btn-lg btn-main my-4">All Email address</a>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="field-set" style="background-size: 100%; background-repeat: no-repeat;">
                                <input type="text" name="email" value="awaisarrental@gmail.com" disabled id="email"
                                    class="form-control">
                            </div>
                        </div>
                        @foreach ($templates as $template)
                        <div class="col-md-4 col-sm-6">
                            <div class="card my-5" style="height:400px;">
                                <div class="card-heading text-center">
                                    <h2>{{ $template->subject }}</h2>
                                </div>
                                <div class="card-body" style="height: 250px; overflow:hidden">
                                    {!! $template->content !!}
                                </div>
                                <div class="card-footer"
                                    style="align-items: center;display: flex;justify-content: space-evenly;background-repeat: no-repeat;">
                                    <a href="{{route('send_email',$template->id)}}">Send Now</a>
                                    <a href="{{route('template.delete',$template->id)}}">Delete</a>
                                    <a href="{{route('template.update',$template->id)}}">update</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
