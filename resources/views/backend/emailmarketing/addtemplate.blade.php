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
                <h2 class="title">Add Template</h2>
                <a href="{{ route('admin.emailmarketing') }}" class="btn btn-md btn-main my-4">Back TO Dashboard</a>
                <form method="POST" action="{{ route('admin.addtemplate') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="Enter Subject" name="subject">
                    </div>
                    <div class="input-group">
                        <textarea style="width: 100%" class="form-control" id="content" placeholder="Enter the"
                            name="content"></textarea>
                    </div>
                    <div class="p-t-20">
                        <button class="btn btn--radius btn-main btn--green" type="submit">Add Template</button>
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
#cke_content{
    width: 100% !important;
}
</style>
@endpush
@push('script')
<script>
    CKEDITOR.replace('content');
</script>
@endpush
