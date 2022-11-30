@extends('frontend.layouts.main')
@section('content')
    <section class="home_banner_area banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-7">
                    <div class="blog_text_slider">
                        <div class="blog_text">
                            <img class="img-fluid" src="{{asset('frontend/img/banner/archive-img.png')}}" alt="">
                            <div class="blog-meta bottom d-flex justify-content-start align-items-center flex-wrap">
                                <div>
                                    <a class="read_more" href="{{url('/')}}">Home</a>
                                    <span class="lnr lnr-arrow-right"></span>
                                    <a class="read_more" href="{{route('list-blogs')}}">{{$detailCategory->title}}</a>
{{--                                    <span class="lnr lnr-arrow-right"></span>--}}
{{--                                    <a class="read_more" href="{{route('list-blogs')}}">Bài viết</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

    <!--================Archive Area =================-->
    <section class="archive_area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @forelse($detailCategory->blogs as $item)
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="single_travel wow fadeInUp" data-wow-duration="1s">
                                    <figure>
                                        <a href="{{route('detail-blog',$item->slug)}}">
                                            <img class="img-fluid w-100" src="{{asset($item->image)}}" alt="travel-vi-vu">
                                        </a>
                                    </figure>
                                    <div class="overlay"></div>
                                    <div class="text-wrap">
                                        <h3>
                                            <a href="#">{{$item->title}}</a>
                                        </h3>
                                        <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
                                            <div class="meta">
                                                <a href="#">
                                                    <span class="icon fa fa-calendar"></span> {{$item->created_at}}
                                                    <span class="icon fa fa-comments"></span> 05
                                                </a>
                                            </div>
                                            <div>
                                                <a class="read_more" href="{{route('detail-blog',$item->slug)}}">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <span>no blog</span>
                        @endforelse
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
{{--                            {{ $detailCategory->blogs->links() }}--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include('frontend.pages.blog.layout-right-blog')
                </div>
            </div>
        </div>
    </section>
@endsection
