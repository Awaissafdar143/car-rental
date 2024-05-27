@extends('layout.app')
@push('title')
<title>Rentaly | Blog </title>
@endpush
@section('content')
<!-- section begin -->
@foreach ($blogs as $blog)
<section id="subheader" class="jarallax text-light">
    <img alt="" src="{{ asset($blog->featuredimage) }}" class="jarallax-img" style="opacity: 0.2">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>{{ $blog->title }}</h1>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
@endforeach
<!-- section close -->

<!-- section begin -->
<section aria-label="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach ($blogs as $blog)
                <div class="blog-read">

                    <img alt="" src="{{ asset($blog->featuredimage) }}" style="max-height: 300px"
                        class="img-fullwidth mb30">

                    <div class="post-text">
                        {!! $blog->blog !!}
                    </div>

                </div>
                @endforeach
                <div class="spacer-single"></div>
            </div>

            <div id="sidebar" class="col-md-4">
                <div class="widget">
                    <h4>Share With Friends</h4>
                    <div class="small-border"></div>
                    <div class="de-color-icons">
                        <span><i class="fa fa-twitter fa-lg"></i></span>
                        <span><i class="fa fa-facebook fa-lg"></i></span>
                        <span><i class="fa fa-reddit fa-lg"></i></span>
                        <span><i class="fa fa-linkedin fa-lg"></i></span>
                        <span><i class="fa fa-pinterest fa-lg"></i></span>
                        <span><i class="fa fa-stumbleupon fa-lg"></i></span>
                        <span><i class="fa fa-delicious fa-lg"></i></span>
                        <span><i class="fa fa-envelope fa-lg"></i></span>
                    </div>
                </div>

                <div class="widget widget-post">
                    <h4>Recent Posts</h4>
                    <div class="small-border"></div>
                    <ul class="de-bloglist-type-1">
                        @foreach ($datas as $data )


                        <li>
                            <div class="d-image">
                                <img src="{{asset($data->featuredimage)}}" class="img-fluid" alt="{{$data->title}}">
                            </div>
                            <div class="d-content">
                                <a href="{{ route('blog-single',$blog->slug) }}">
                                    <h4>{{$data->title}}</h4>
                                </a>
                                <div class="d-date"> {{$data->created_at}} </div>
                            </div>
                        </li>
                        @endforeach
                       
                    </ul>
                </div>

                <div class="widget widget-text">
                    <h4>About Us</h4>
                    <div class="small-border"></div>
                    <p class="small no-bottom">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                        odit aut fugit, sed quia consequuntur magni
                    </p>
                </div>
                <div class="widget widget_tags">
                    <h4>Tags</h4>
                    <div class="small-border"></div>
                    <ul>
                        <li><a href="#link">accommodation</a></li>
                        <li><a href="#link">holiday</a></li>
                        <li><a href="#link">hostel</a></li>
                        <li><a href="#link">hotel</a></li>
                        <li><a href="#link">travel</a></li>
                        <li><a href="#link">inn</a></li>
                        <li><a href="#link">lodge</a></li>
                        <li><a href="#link">motel</a></li>
                        <li><a href="#link">resort</a></li>
                        <li><a href="#link">travel</a></li>
                        <li><a href="#link">tourism</a></li>
                        <li><a href="#link">vacation</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>

</div>
<!-- content close -->

<a href="#" id="back-to-top"></a>

<!-- footer begin -->
@endsection
