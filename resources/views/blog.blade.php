@extends('layout.app')
@push('title')
<title>Rentaly | BLog  </title>
@endpush
@section('content')
<!-- header close -->
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- section begin -->
    <section id="subheader" class="jarallax text-light">
        <img src="images/background/subheader.jpg" class="jarallax-img" alt="">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>News &amp; Updates</h1>
                    </div>
                    <div class="col-lg-6 offset-lg-3">
                        <p class="lead">Et in deserunt sed consequat culpa laborum ex aliqua labore eiusmod eu consequat
                            cupidatat ut reprehenderit amet magna.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <section id="section-news" class=" mt-50" aria-label="section">
        <div class="container">
            <div class="row">
                @if (count($blogs)>=1)
                @foreach ($blogs as $blog )
                <div class="col-lg-4 mb20">
                    <div class="bloglist s2 item">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="date-box" style="background: transparent !important">
                                    <div class="m">{{ $blog->created_at->diffForHumans()}}</div>
                                    {{-- <div class="d">MAR</div> --}}
                                </div>
                                <img alt="" src="{{$blog->featuredimage}}" class="lazy">
                            </div>
                            <div class="post-text">
                                <h4><a href="{{ route('blog-single',$blog->slug) }}">{{ $blog->title }}<span></span></a></h4>
                                <p>{{$blog->description}}</p>
                                <a class="btn-main" href="{{ route('blog-single',$blog->slug ) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-12">
                    <div class="h1 text-uppercase text-center mt-5">
                        No Record found
                    </div>
                </div>
                @endif

                {{-- <div class="col-lg-6 mb20">
                    <div class="bloglist s2 item">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="date-box">
                                    <div class="m">19</div>
                                    <div class="d">MAR</div>
                                </div>
                                <img alt="" src="images/news/pic-blog-2.jpg" class="lazy">
                            </div>
                            <div class="post-text">
                                <h4><a href="news-single.html">The Future of Car Rent<span></span></a></h4>
                                <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit
                                    cupidatat labore ad laborum consectetur.</p>
                                <a class="btn-main" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb20">
                    <div class="bloglist s2 item">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="date-box">
                                    <div class="m">18</div>
                                    <div class="d">MAR</div>
                                </div>
                                <img alt="" src="images/news/pic-blog-3.jpg" class="lazy">
                            </div>
                            <div class="post-text">
                                <h4><a href="news-single.html">Holiday Tips For Backpacker<span></span></a></h4>
                                <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit
                                    cupidatat labore ad laborum consectetur.</p>
                                <a class="btn-main" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb20">
                    <div class="bloglist s2 item">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="date-box">
                                    <div class="m">17</div>
                                    <div class="d">MAR</div>
                                </div>
                                <img alt="" src="images/news/pic-blog-4.jpg" class="lazy">
                            </div>
                            <div class="post-text">
                                <h4><a href="news-single.html">Travel Destination For Couple<span></span></a></h4>
                                <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit
                                    cupidatat labore ad laborum consectetur.</p>
                                <a class="btn-main" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb20">
                    <div class="bloglist s2 item">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="date-box">
                                    <div class="m">16</div>
                                    <div class="d">MAR</div>
                                </div>
                                <img alt="" src="images/news/pic-blog-5.jpg" class="lazy">
                            </div>
                            <div class="post-text">
                                <h4><a href="news-single.html">The Essential Guide to Hotel<span></span></a></h4>
                                <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit
                                    cupidatat labore ad laborum consectetur.</p>
                                <a class="btn-main" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb20">
                    <div class="bloglist s2 item">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="date-box">
                                    <div class="m">15</div>
                                    <div class="d">MAR</div>
                                </div>
                                <img alt="" src="images/news/pic-blog-6.jpg" class="lazy">
                            </div>
                            <div class="post-text">
                                <h4><a href="news-single.html">Travel on a Budget<span></span></a></h4>
                                <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit
                                    cupidatat labore ad laborum consectetur.</p>
                                <a class="btn-main" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="spacer-single"></div>

                <div class="col-md-12">
                    {{-- <ul class="pagination">
                        <li><a href="#">Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul> --}}
                    {!!$blogs->links() !!}
                </div>

            </div>
        </div>
    </section>
</div>
<!-- content close -->
<a href="#" id="back-to-top"></a>
<!-- footer begin -->
@endsection
