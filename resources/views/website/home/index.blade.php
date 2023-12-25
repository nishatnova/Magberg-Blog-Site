@extends('website.master')

@section('title')
    Home page
@endsection

@section('body')
    <section class="banner overflow-hidden">
        <div class="container">
            <div class="slider slider-before">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slide-inner">
                                <div class="slide-image" style="background-image:url({{asset('/')}}website/images/slider/1.jpg)"></div>
                                <div class="swiper-content">
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <span class="entry-category me-2 white bg-theme py-1 px-3"><a href="#" class="white">Technology</a></span>
                                        <span class="entry-date"><a href="#"><i class="fa fa-calendar-alt"></i> 24th February 2020</a></span>
                                    </div>
                                    <h1 class="mb-4"><a href="#">Security isn’t just a technology problem it’s about design, too</a></h1>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author">
                                            <img src="{{asset('/')}}website/images/reviewer/1.jpg" alt class="rounded-circle me-1">
                                            <span>Rosalina D.</span>
                                        </div>
                                        <div class="entry-metalist d-flex align-items-center">
                                            <ul>
                                                <li class="me-2"><a href="#"><i class="fa fa-eye"></i> 5k</a></li>
                                                <li class="me-2"><a href="#"><i class="fa fa-heart"></i> 5k</a></li>
                                                <li><a href="#"><i class="fa fa-comments"></i> 5k</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-inner">
                                <div class="slide-image" style="background-image:url({{asset('/')}}website/images/slider/2.jpg)"></div>
                                <div class="swiper-content">
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <span class="entry-category me-2 white bg-theme py-1 px-3"><a href="#" class="white">Technology</a></span>
                                        <span class="entry-date"><a href="#"><i class="fa fa-calendar-alt"></i> 24th February 2020</a></span>
                                    </div>
                                    <h1 class="mb-4"><a href="#">Security isn’t just a technology problem it’s about design, too</a></h1>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author">
                                            <a href="#"><img src="{{asset('/')}}website/images/reviewer/1.jpg" alt class="rounded-circle me-1">
                                                <span>Rosalina D.</span></a>
                                        </div>
                                        <div class="entry-metalist d-flex align-items-center">
                                            <ul>
                                                <li class="me-2"><a href="#"><i class="fa fa-eye"></i> 5k</a></li>
                                                <li class="me-2"><a href="#"><i class="fa fa-heart"></i> 5k</a></li>
                                                <li><a href="#"><i class="fa fa-comments"></i> 5k</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-inner">
                                <div class="slide-image" style="background-image:url({{asset('/')}}website/images/slider/3.jpg)"></div>
                                <div class="swiper-content">
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <span class="entry-category me-2 white bg-theme py-1 px-3"><a href="#" class="white">Technology</a></span>
                                        <span class="entry-date"><a href="#"><i class="fa fa-calendar-alt"></i> 24th February 2020</a></span>
                                    </div>
                                    <h1 class="mb-4"><a href="#">Security isn’t just a technology problem it’s about design, too</a></h1>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author">
                                            <a href="#"><img src="{{asset('/')}}website/images/reviewer/1.jpg" alt class="rounded-circle me-1">
                                                <span>Rosalina D.</span></a>
                                        </div>
                                        <div class="entry-metalist d-flex align-items-center">
                                            <ul>
                                                <li class="me-2"><a href="#"><i class="fa fa-eye"></i> 5k</a></li>
                                                <li class="me-2"><a href="#"><i class="fa fa-heart"></i> 5k</a></li>
                                                <li><a href="#"><i class="fa fa-comments"></i> 5k</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </section>


    <section class="trending-topic pb-6">
        <div class="container">
            <div class="section-title mb-4 pb-1 w-50">
                <h2 class="m-0">Trending <span>Topics</span></h2>
            </div>
            <div class="trending-topic-main">
                <div class="row shop-slider">
                    @foreach($categories as $category)
                    <div class="col-lg-3 col-md-6">
                        <div class="trending-topic-item box-shadow">
                            <div class="trending-topic-image overflow-hidden">
                                <img src="{{asset($category->image)}}" height="240" alt="">
                                <div class="trending-topic-content">
                                    <h4 class="mb-0 text-center py-1 px-3 bg-white position-absolute"><a href="{{route('blog-category', ['id' => $category->id])}}">{{$category->name}}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>


    <section class="about-us pb-6 pt-0 ptop">
        <div class="container">
            <div class="section-title mb-4 pb-1 w-50">
                <h2 class="m-0">Editor's <span>picked</span></h2>
            </div>
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-7 col-sm-12 mb-4">
                        <div class="about-content">
                            <h4 class="bg-theme white px-4 py-1 d-inline-block">Public</h4>
                            <h2 class="border-b mb-2 pb-2">5 Kinds of Food-Shamers You Will Encounter (and How to Deal)</h2>
                            <p class="border-b mb-2 pb-2">Top Tour Operators and Travel Agency. We offering in total 793 tours and holidays throughout the world. Combined we have received 1532 customer reviews and an average rating of 5 out of 5 stars. <br><br>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
                            <div class="entry-meta d-flex align-items-center justify-content-between">
                                <div class="entry-author">
                                    <img src="{{asset('/')}}website/images/reviewer/1.jpg" alt class="rounded-circle me-1">
                                    <span>Rosalina D.</span>
                                </div>
                                <div class="entry-metalist d-flex align-items-center">
                                    <ul>
                                        <li class="me-2"><a href="#"><i class="fa fa-eye"></i> 5k</a></li>
                                        <li class="me-2"><a href="#"><i class="fa fa-heart"></i> 5k</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 5k</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12 mb-4">
                        <div class="about-image p-3 box-shadow position-relative">
                            <img src="{{asset('/')}}website/images/trending/trending5.jpg" alt class="w-100">
                            <div class="video-button text-center">
                                <div class="call-button text-center">
                                    <button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo">
                                        <i class="fa fa-play bg-blue"></i>
                                    </button>
                                </div>
                                <div class="video-figure"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="trending pt-0 ptop">
        <div class="container">
            <div class="section-title mb-4 pb-1 w-50">
                <h2 class="m-0">More Featured <span>Posts</span></h2>
            </div>
            <div class="trend-box">
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-lg-6 mb-4">
                        <div class="trend-item d-flex align-items-center box-shadow p-4">
                            <div class="trend-content-main me-4 w-75">
                                <div class="trend-content">
                                    <h5 class="theme">{{$blog->category->name}}</h5>
                                    <h4><a href="{{route('blog-detail',['id'=> $blog->id])}}">{{$blog->title}}</a></h4>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author">
                                            <img src="{{asset($blog->image)}}" alt="" class="rounded-circle me-1">
                                            <span>David Scott</span>
                                        </div>
                                        <div class="entry-metalist d-flex align-items-center">
                                            <ul>
                                                <li class="me-2"><a href="#"><i class="fa fa-eye"></i> 5k</a></li>
                                                <li class="me-2"><a href="#"><i class="fa fa-heart"></i> 5k</a></li>
                                                <li><a href="#"><i class="fa fa-comments"></i> 5k</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="trend-image w-25">
                                <img src="{{asset($blog->image)}}" alt="image">
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-lg-12">
                        <div class="trend-btn text-center"><a href="#" class="nir-btn">Load More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="featured-video bg-grey pb-5">
        <div class="container">
            <div class="section-title mb-4 pb-1 w-50">
                <h2 class="m-0">More Highlighted <span>Posts</span></h2>
            </div>
            <div class="featured-video-main">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 mb-4">
                        <div class="trend-item box-shadow bg-white">
                            <div class="trend-image overflow-hidden">
                                <div class="video-banner w-75">
                                    <video autoplay muted loop id="vid">
                                        <source src="{{asset('/')}}website/images/tour.mp4" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                            <div class="trend-content-main">
                                <div class="trend-content p-4">
                                    <h5 class="theme mb-1">Public</h5>
                                    <h4><a href="#">Security isn’t just a technology problem it’s about design. Talisker Bay On The Isle Of Skpye.</a></h4>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author">
                                            <img src="{{asset('/')}}website/images/reviewer/1.jpg" alt class="rounded-circle me-1">
                                            <span>Rosalina D.</span>
                                        </div>
                                        <div class="entry-metalist d-flex align-items-center">
                                            <ul>
                                                <li class="me-2"><a href="#"><i class="fa fa-eye"></i> 5k</a></li>
                                                <li class="me-2"><a href="#"><i class="fa fa-heart"></i> 5k</a></li>
                                                <li><a href="#"><i class="fa fa-comments"></i> 5k</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="trend-item box-shadow bg-white">
                                    <div class="trend-image">
                                        <img src="{{asset('/')}}website/images/trending/trending10.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content p-4">
                                            <h5 class="theme mb-1">Design</h5>
                                            <h4 class="mb-0"><a href="#">Get Ready To Up Your Creative Game With The</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="trend-item box-shadow bg-white">
                                    <div class="trend-image">
                                        <img src="{{asset('/')}}website/images/trending/trending11.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content p-4">
                                            <h5 class="theme mb-1">Health</h5>
                                            <h4 class="mb-0"><a href="#">Traditional design won’t save us in the COVID-19 era</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="trend-item box-shadow bg-white">
                                    <div class="trend-image">
                                        <img src="{{asset('/')}}website/images/trending/trending13.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content p-4">
                                            <h5 class="theme mb-1">Foods</h5>
                                            <h4 class="mb-0"><a href="#">The 1 Food that helps remote teams collaborate</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="trend-item box-shadow bg-white">
                                    <div class="trend-image">
                                        <img src="{{asset('/')}}website/images/trending/trending12.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content p-4">
                                            <h5 class="theme mb-1">Products</h5>
                                            <h4 class="mb-0"><a href="#">New: Freehand Templates, built for the whole team</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="discount-action pt-0 bg-grey">
        <div class="container">
            <div class="call-banner" style="background-image: url({{asset('/')}}website/images/bg/bg1.jpg);">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 col-md-7 p-0">
                        <div class="call-banner-inner bg-theme">
                            <div class="trend-content-main">
                                <div class="trend-content p-4">
                                    <h5 class="px-0 mb-1 white">Women</h5>
                                    <h2 class="mb-2"><a href="#" class="white">Runner with Autism Graces the Latest Cover of Women's Running</a></h2>
                                    <a href="#" class="main-btn">View Details <i class="fa fa-arrow-right white pl-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 p-0"></div>
                </div>
            </div>
            <div class="social-wrapper bg-white p-4">
                <ul class="social-with-text d-md-flex align-items-center justify-content-between">
                    <li class="twitter"><a href="#"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
                    <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
                    <li class="instagram"><a href="#"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
                    <li class="youtube"><a href="#"><i class="fab fa-youtube"></i><span>Youtube</span></a></li>
                    <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i><span>Pinterest</span></a></li>
                    <li class="discord"><a href="#"><i class="fab fa-discord"></i><span>Discord</span></a></li>
                </ul>
            </div>
        </div>
    </section>


    <section class="trending recent-articles pb-4">
        <div class="container">
            <div class="section-title mb-4 pb-1 w-50">
                <h2 class="m-0">Recent Articles & <span>Posts</span></h2>
            </div>
            <div class="recent-articles-inner">
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="trend-item box-shadow bg-white p-4 mb-2">
                            <div class="trend-image">
                                <img src="{{asset('/')}}website/images/trending/trending10.jpg" alt="image">
                            </div>
                            <div class="trend-content-main pt-3">
                                <div class="trend-content">
                                    <h5 class="theme">Technology</h5>
                                    <h4><a href="#">How a developer and designer duo at Deutsche Bank keep remote alive.</a></h4>
                                    <p class="mb-3">
                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy.
                                    </p>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author">
                                            <img src="{{asset('/')}}website/images/reviewer/2.jpg" alt class="rounded-circle me-1">
                                            <span>Sollmond Nell</span>
                                        </div>
                                        <div class="entry-metalist d-flex align-items-center">
                                            <ul>
                                                <li class="me-2"><a href="#"><i class="fa fa-eye"></i> 5k</a></li>
                                                <li class="me-2"><a href="#"><i class="fa fa-heart"></i> 5k</a></li>
                                                <li><a href="#"><i class="fa fa-comments"></i> 5k</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend-item d-flex align-items-center box-shadow p-3 mb-2 bg-white">
                            <div class="trend-image w-25 me-4">
                                <img src="{{asset('/')}}website/images/trending/trending2.jpg" alt="image">
                            </div>
                            <div class="trend-content-main me-3 w-75">
                                <div class="trend-content">
                                    <h4 class="mb-1"><a href="#">3 Easy Ways To Make Your iPhone Faster</a></h4>
                                    <div class="entry-meta">
                                        <div class="entry-metalist d-flex align-items-center">
                                            <small><a href="#" class="grey"><i class="fa fa-calendar"></i> 29 Mar 2021</a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend-item d-flex align-items-center box-shadow p-3 mb-2 bg-white">
                            <div class="trend-image w-25 me-3">
                                <img src="{{asset('/')}}website/images/trending/trending3.jpg" alt="image">
                            </div>
                            <div class="trend-content-main w-75">
                                <div class="trend-content">
                                    <h4 class="mb-1"><a href="#">5 Kinds of Food-Shamers You Will Encounter</a></h4>
                                    <div class="entry-meta">
                                        <div class="entry-metalist d-flex align-items-center">
                                            <small><a href="#" class="grey"><i class="fa fa-calendar"></i> 10 Apr 2021</a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="trend-item box-shadow bg-white p-4 mb-2">
                            <div class="trend-image">
                                <img src="{{asset('/')}}website/images/trending/trending12.jpg" alt="image">
                            </div>
                            <div class="trend-content-main pt-3">
                                <div class="trend-content">
                                    <h5 class="theme">Inspiration</h5>
                                    <h4><a href="#">Inspire Runner with Autism Graces the Latest Cover of Women's Running</a></h4>
                                    <p class="mb-3">
                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy.
                                    </p>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author">
                                            <img src="{{asset('/')}}website/images/reviewer/1.jpg" alt class="rounded-circle me-1">
                                            <span>David Scott</span>
                                        </div>
                                        <div class="entry-metalist d-flex align-items-center">
                                            <ul>
                                                <li class="me-2"><a href="#"><i class="fa fa-eye"></i> 5k</a></li>
                                                <li class="me-2"><a href="#"><i class="fa fa-heart"></i> 5k</a></li>
                                                <li><a href="#"><i class="fa fa-comments"></i> 5k</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend-item d-flex align-items-center box-shadow p-3 mb-2 bg-white">
                            <div class="trend-image w-25 me-4">
                                <img src="{{asset('/')}}website/images/trending/trending1.jpg" alt="image">
                            </div>
                            <div class="trend-content-main me-3 w-75">
                                <div class="trend-content">
                                    <h4 class="mb-1"><a href="#">3 Easy Ways To Make Your iPhone Faster</a></h4>
                                    <div class="entry-meta">
                                        <div class="entry-metalist d-flex align-items-center">
                                            <small><a href="#" class="grey"><i class="fa fa-calendar"></i> 29 Mar 2021</a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend-item d-flex align-items-center box-shadow p-3 mb-2 bg-white">
                            <div class="trend-image w-25 me-3">
                                <img src="{{asset('/')}}website/images/trending/trending2.jpg" alt="image">
                            </div>
                            <div class="trend-content-main w-75">
                                <div class="trend-content">
                                    <h4 class="mb-1"><a href="#">5 Kinds of Food-Shamers You Will Encounter</a></h4>
                                    <div class="entry-meta">
                                        <div class="entry-metalist d-flex align-items-center">
                                            <small><a href="#" class="grey"><i class="fa fa-calendar"></i> 10 Apr 2021</a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="trend-item box-shadow bg-white p-4 mb-2">
                            <div class="trend-image">
                                <img src="{{asset('/')}}website/images/trending/trending13.jpg" alt="image">
                            </div>
                            <div class="trend-content-main pt-3">
                                <div class="trend-content">
                                    <h5 class="theme">Public</h5>
                                    <h4><a href="#">We Provide Services To Grow Your Business Sell Affiliate Products to Customers.</a></h4>
                                    <p class="mb-3">
                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy.
                                    </p>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author">
                                            <img src="{{asset('/')}}website/images/reviewer/3.jpg" alt class="rounded-circle me-1">
                                            <span>John Bolden</span>
                                        </div>
                                        <div class="entry-metalist d-flex align-items-center">
                                            <ul>
                                                <li class="me-2"><a href="#"><i class="fa fa-eye"></i> 5k</a></li>
                                                <li class="me-2"><a href="#"><i class="fa fa-heart"></i> 5k</a></li>
                                                <li><a href="#"><i class="fa fa-comments"></i> 5k</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend-item d-flex align-items-center box-shadow p-3 mb-2 bg-white">
                            <div class="trend-image w-25 me-4">
                                <img src="{{asset('/')}}website/images/trending/trending4.jpg" alt="image">
                            </div>
                            <div class="trend-content-main me-3 w-75">
                                <div class="trend-content">
                                    <h4 class="mb-1"><a href="#">3 Easy Ways To Make Your iPhone Faster</a></h4>
                                    <div class="entry-meta">
                                        <div class="entry-metalist d-flex align-items-center">
                                            <small><a href="#" class="grey"><i class="fa fa-calendar"></i> 29 Mar 2021</a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend-item d-flex align-items-center box-shadow p-3 mb-2 bg-white">
                            <div class="trend-image w-25 me-3">
                                <img src="{{asset('/')}}website/images/trending/trending5.jpg" alt="image">
                            </div>
                            <div class="trend-content-main w-75">
                                <div class="trend-content">
                                    <h4 class="mb-1"><a href="#">5 Kinds of Food-Shamers You Will Encounter</a></h4>
                                    <div class="entry-meta">
                                        <div class="entry-metalist d-flex align-items-center">
                                            <small><a href="#" class="grey"><i class="fa fa-calendar"></i> 10 Apr 2021</a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="top-post pt-0">
        <div class="container">
            <div class="section-title mb-4 pb-1 w-50">
                <h2 class="m-0">Today's <span>Top Posts</span></h2>
            </div>
            <div class="row team-slider">
                <div class="col-lg-4">
                    <div class="trend-item">
                        <div class="trend-image">
                            <img src="{{asset('/')}}website/images/trending/trending1.jpg" alt="image">
                            <div class="trend-content">
                                <h5 class="theme">Inspiration</h5>
                                <h4><a href="#">Inspire Runner with Autism Graces the Latest Cover of Women's Running</a></h4>
                                <div class="entry-meta d-flex align-items-center justify-content-between">
                                    <div class="entry-author d-flex align-items-center">
                                        <img src="{{asset('/')}}website/images/reviewer/3.jpg" alt class="rounded-circle me-1">
                                        <span>John Bolden</span>
                                    </div>
                                    <div class="entry-metalist">
                                        <small><a href="#" class="grey"><i class="fa fa-calendar"></i> 10 Apr 2021</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trend-item">
                        <div class="trend-image">
                            <img src="{{asset('/')}}website/images/trending/trending2.jpg" alt="image">
                            <div class="trend-content">
                                <h5 class="theme">Inspiration</h5>
                                <h4><a href="#">Inspire Runner with Autism Graces the Latest Cover of Women's Running</a></h4>
                                <div class="entry-meta d-flex align-items-center justify-content-between">
                                    <div class="entry-author d-flex align-items-center">
                                        <img src="{{asset('/')}}website/images/reviewer/3.jpg" alt class="rounded-circle me-1">
                                        <span>John Bolden</span>
                                    </div>
                                    <div class="entry-metalist">
                                        <small><a href="#" class="grey"><i class="fa fa-calendar"></i> 10 Apr 2021</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trend-item">
                        <div class="trend-image">
                            <img src="{{asset('/')}}website/images/trending/trending3.jpg" alt="image">
                            <div class="trend-content">
                                <h5 class="theme">Inspiration</h5>
                                <h4><a href="#">Inspire Runner with Autism Graces the Latest Cover of Women's Running</a></h4>
                                <div class="entry-meta d-flex align-items-center justify-content-between">
                                    <div class="entry-author d-flex align-items-center">
                                        <img src="{{asset('/')}}website/images/reviewer/3.jpg" alt class="rounded-circle me-1">
                                        <span>John Bolden</span>
                                    </div>
                                    <div class="entry-metalist">
                                        <small><a href="#" class="grey"><i class="fa fa-calendar"></i> 10 Apr 2021</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="trend-item">
                        <div class="trend-image">
                            <img src="{{asset('/')}}website/images/trending/trending4.jpg" alt="image">
                            <div class="trend-content">
                                <h5 class="theme">Inspiration</h5>
                                <h4><a href="#">Inspire Runner with Autism Graces the Latest Cover of Women's Running</a></h4>
                                <div class="entry-meta d-flex align-items-center justify-content-between">
                                    <div class="entry-author d-flex align-items-center">
                                        <img src="{{asset('/')}}website/images/reviewer/3.jpg" alt class="rounded-circle me-1">
                                        <span>John Bolden</span>
                                    </div>
                                    <div class="entry-metalist">
                                        <small><a href="#" class="grey"><i class="fa fa-calendar"></i> 10 Apr 2021</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="insta-main pt-0">
        <div class="container">
            <div class="insta-inner">
                <div class="follow-button">
                    <p class="m-0"><a href="#" title><i class="fab fa-instagram"></i> Follow on Instagram</a></p>
                </div>
                <div class="row attract-slider">
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="#"><img src="{{asset('/')}}website/images/insta/ins-3.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="#"><img src="{{asset('/')}}website/images/insta/ins-4.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="#"><img src="{{asset('/')}}website/images/insta/ins-5.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="#"><img src="{{asset('/')}}website/images/insta/ins-1.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="#"><img src="{{asset('/')}}website/images/insta/ins-7.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="#"><img src="{{asset('/')}}website/images/insta/ins-8.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="#"><img src="{{asset('/')}}website/images/insta/ins-2.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="#"><img src="{{asset('/')}}website/images/insta/ins-6.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="#"><img src="{{asset('/')}}website/images/insta/ins-9.jpg" alt="insta"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="cta-horizon pt-7 pb-7" style="background-color:#fff5ef;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-offset-lg-2">
                    <div class="section-title mb-4 pb-1">
                        <h2 class="mb-0">Subscribe To <span>Our Newsletter</span></h2>
                    </div>
                    <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                    <div class="newsletter-form">
                        <form class="d-flex align-items-center">
                            <input type="email" placeholder="Enter your email">
                            <input type="submit" class="nir-btn" value="Subscribe">
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newsletter-image float-right">
                        <img src="{{asset('/')}}website/images/newsletter1.png" alt>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
