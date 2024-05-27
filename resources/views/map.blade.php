@extends('layout.app')
@push('title')
<title>Rentaly | Map </title>
@endpush
@section('content')
<!-- section begin -->
<section id="subheader" class="jarallax text-light">
    <img src="{{asset('images/background/subheader.jpg')}}" class="jarallax-img" alt="">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Map</h1>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- section close -->

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp">
                <div class="p-sm-30 pb-sm-0 mb-sm-0">
                    <div class="de-map-hotspot">
                        <div class="de-spot wow fadeIn" style="top: 25%;left: 41%;">
                            <span>Allama&nbsp;IQBAL&nbsp;Town</span>
                            <div class="de-circle-1"></div>
                            <div class="de-circle-2"></div>
                        </div>
                        <div class="de-spot wow fadeIn" style="top:76%; left:87%">
                            <span>Australia</span>
                            <div class="de-circle-1"></div>
                            <div class="de-circle-2"></div>
                        </div>
                        <div class="de-spot wow fadeIn" style="top:68%; left:80%">
                            <span>Indonesia</span>
                            <div class="de-circle-1"></div>
                            <div class="de-circle-2"></div>
                        </div>
                        <div class="de-spot wow fadeIn" style="top:23%; left:18%">
                            <span>Canada</span>
                            <div class="de-circle-1"></div>
                            <div class="de-circle-2"></div>
                        </div>
                        <div class="de-spot wow fadeIn" style="top:68%; left:33%">
                            <span>Brazil</span>
                            <div class="de-circle-1"></div>
                            <div class="de-circle-2"></div>
                        </div>
                        <div class="de-spot wow fadeIn" style="top:45%; left:75%">
                            <span>China</span>
                            <div class="de-circle-1"></div>
                            <div class="de-circle-2"></div>
                        </div>
                        <div class="de-spot wow fadeIn" style="top:36%; left:48%">
                            <span>France</span>
                            <div class="de-circle-1"></div>
                            <div class="de-circle-2"></div>
                        </div>
                        <div class="de-spot wow fadeIn" style="top:23%; left:51%">
                            <span>Sweden</span>
                            <div class="de-circle-1"></div>
                            <div class="de-circle-2"></div>
                        </div>
                        <div class="de-spot wow fadeIn" style="top:78%; left:53%">
                            <span>South&nbsp;Africa</span>
                            <div class="de-circle-1"></div>
                            <div class="de-circle-2"></div>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d64733.047307330744!2d74.27464952324657!3d31.493613008275688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1709652828536!5m2!1sen!2s"
                            width="100%" height="600"style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</div>
<!-- content close -->

@endsection
