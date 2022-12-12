@extends('frontend.layouts.main')
@section('content')
    <section class="home_banner_area banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-7">
                    <div class="blog_text_slider">
                        <div class="blog_text">
                            <img class="img-fluid" src="{{asset('frontend/img/banner/category-img.png')}}" alt="">
                            <div class="blog-meta bottom d-flex justify-content-start align-items-center flex-wrap">
                                <div>
                                    <a class="read_more" href="{{url('/')}}">Home</a>
                                    <span class="lnr lnr-arrow-right"></span>
                                    <a class="read_more" href="{{route('category')}}">Category</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

    <!--================Category Area =================-->
    <section class="category_area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
{{--                        <div class="col-lg-12">--}}
{{--                            <div class="single_travel wow fadeInUp" data-wow-duration="1s">--}}
{{--                                <figure>--}}
{{--                                    <img class="img-fluid w-100" src="img/category/c1.jpg" alt="">--}}
{{--                                </figure>--}}
{{--                                <div class="overlay"></div>--}}
{{--                                <div class="text-wrap">--}}
{{--                                    <h3>--}}
{{--                                        <a href="#">Waterfall Travel</a>--}}
{{--                                    </h3>--}}
{{--                                    <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">--}}
{{--                                        <div class="meta">--}}
{{--                                            <a href="#">--}}
{{--                                                <span class="icon fa fa-calendar"></span> March 14, 2018--}}
{{--                                                <span class="icon fa fa-comments"></span> 05--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div>--}}
{{--                                            <a class="read_more" href="#">Read More</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        @forelse($listCategory as $item)
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="single_travel wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <figure>
                                    <a href="{{route('detail-category',$item->slug)}}">
                                        <img class="img-fluid w-100" src="{{asset($item->image)}}" alt="{{$item->slug}}" style="height: 350px;"></a>
                                </figure>
                                <div class="overlay"></div>
                                <div class="text-wrap">
                                    <h3>
                                        <a href="{{route('detail-category',$item->slug)}}">{{$item->title}}</a>
                                    </h3>
                                    <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
                                        <div class="meta">
                                            <a href="#">
                                                <span class="icon fa fa-calendar"></span> {{$item->created_at}}
{{--                                                <span class="icon fa fa-comments"></span> 05--}}
                                            </a>
                                        </div>
                                        <div>
                                            <a class="read_more" href="{{route('detail-category',$item->slug)}}">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        @endforelse

                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            {{ $listCategory->links() }}
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
