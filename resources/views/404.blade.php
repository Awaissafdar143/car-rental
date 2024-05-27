@extends('layout.app')
@push('title')
<title>Rentaly |404 Page  </title>
@endpush
@section('content')
@push('script')
<style>
    footer,header{
        display: none !important;
    }
</style>
@endpush
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="section-hero" class="jarallax text-light pt50 pb50 vertical-center" aria-label="section">
                <img src="{{asset('images/background/11.jpg')}}" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h1>Something's missing.</h1>
                            <p>Looks like this page is missing. Don't worry though, our best team is on the case.</p>
                            <a href="{{ route('home') }}" class="btn-main">Go Back</a>
                            <div class="spacer-10"></div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <h1 class="s2">
                                <span class="c1">404</span>
                                <span class="spacer-single"></span>
                                <span class="c3">Not Found</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        </div>
        <!-- content close -->
    </div>
  @endsection
