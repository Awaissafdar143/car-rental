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
                <h2 class="title">Add Blog</h2>
                <form method="POST" action="{{ route('admin.addblog') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="Enter Title" name="title">
                    </div>
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="Enter Keyword" name="keyword">
                    </div>
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="Enter Description"
                            name="description">
                    </div>
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="Enter Slug"
                            name="slug">
                    </div>



                    <div class="input-group">
                        <label>Featured Image</label>
                        <input class="input--style-1" type="file" placeholder="Enter OGI image" name="image">

                    </div>
                    <div class="input-group">
                        <textarea class="form-control" id="content" placeholder="Enter the Description" rows="5"
                            name="content"></textarea>
                    </div>

                    <div class="p-t-20">
                        <button class="btn btn--radius btn-main btn--green" type="submit">Submit</button>
                    </div>
                </form>
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
