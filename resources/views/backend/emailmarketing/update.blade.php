@extends('backend.layout.app')
@section('content')
<div class="page-wrapper  p-t-100 p-b-100 font-robo">
    @if (session('message'))
    <div class="alert alert-warning" role="alert">
        {{ session('message') }}
    </div>
    @endif
    <div class="wrapper wrapper--w680">
        <div class="card  card-1">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Add Blog</h2>
                <a href="{{ route('admin.emailmarketing') }}" class="btn btn-md btn-main my-4">Back TO Dashboard</a>
                @foreach ($datas as $data )
                <form method="POST" action="{{ route('template.update_post') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="Enter SLUG" name="subject"
                            value="{{ $data->subject }}">
                    </div>
                    <div class="input-group">
                        <textarea name="content" class="input--style-1">{!! $data->content !!}</textarea>
                    </div>

                    <div class="p-t-20">
                        <button class="btn btn--radius text-white btn--green" type="submit">Submit</button>
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
</style>
@endpush
@push('script')
<script>
    CKEDITOR.replace('content');
</script>
@endpush
