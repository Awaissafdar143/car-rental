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
                @foreach ($datas as $data )
                <form method="POST" action="{{ route('blog.update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="Enter Title" value="{{ $data->title }}" name="title">
                    </div>
                    <div class="input-group">
                        <input class="input--style-1" type="hidden" placeholder="Enter Title" value="{{ $data->id }}" name="id">
                    </div>
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="Enter Keyword" value="{{ $data->keyword }}" name="keyword">
                    </div>
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="Enter Blog Description" value="{{ $data->description }}"
                            name="description">
                    </div>
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="Enter SLUG" name="slug" value="{{ $data->slug }}">
                    </div>

                    <div class="input-group">
                        <label>Enter Featured Image</label>
                        <input class="input--style-1" type="file" placeholder="Enter  image" value="{{ $data->featured_image }}" name="image">
                    </div>
                    <div class="input-group">
                        <textarea name="content" class="input--style-1">{!! $data->blog !!}</textarea>
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
    input{
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
