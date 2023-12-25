@extends('website.master')

@section('title')
    Blog Category
@endsection

@section('body')


    <section class="breadcrumb-main pb-0 pt-6" style="background-image: url({{asset('/')}}website/images/bg/bg2.jpg);">
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-6">
                    <h2 class="mb-0">Lifestyle</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Lifestyle</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>


    <div class="page-cover pt-10 pb-10 bg-grey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="cover-content">
                        <div class="author-detail mb-2">
                            <a href="#" class="tag white bg-theme py-1 px-3 me-2">#Technology</a>
                            <a href="#" class="tag white bg-navy py-1 px-3"><i class="fa fa-eye"></i> 2500</a>
                        </div>
                        <h1>Apple honors eight developers with annual Apple Design Awards.</h1>
                        <div class="author-detail d-flex align-items-center">
                            <span class="me-3"><a href="#"><i class="fa fa-clock"></i> Posted On : 12 May 2021</a></span>
                            <span class="me-3"><a href="#"><i class="fa fa-user"></i> Jack Richard</a></span>
                            <span><a href="#"><i class="fa fa-comments"></i> 50</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-shadow p-3 position-relative">
                        <img src="{{asset('/')}}website/images/blog/blog12.jpg" alt="Image">
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


    <section class="blog blog-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="listing-inner recent-post">
                        <div class="row">
                            @foreach($blogs as $blog)
                            <div class="col-lg-6 mb-4">
                                <div class="recent-item">
                                    <div class="recent-image">
                                        <img src="{{asset($blog->image)}}" height="300" alt="image">
                                        <div class="recent-content p-4">
                                            <h5 class="white bg-theme py-1 px-2 d-inline-block bordernone mb-1">Foods</h5>
                                            <h4 class="mb-2"><a href="{{route('blog-detail', ['id' => $blog->id])}}" class="white">{{$blog->title}}</a></h4>
                                            <p class="mb-2 white">
                                                A wonderful serenity has taken possession of my entire soul, like these sweet mornings.
                                            </p>
                                            <div class="entry-meta d-flex align-items-center justify-content-between">
                                                <div class="entry-author">
                                                    <img src="{{asset($blog->image)}}" height="300" alt="" class="rounded-circle me-1">
                                                    <span class="white">Kelton Brown</span>
                                                </div>
                                                <div class="entry-metalist d-flex align-items-center">
                                                    <ul>
                                                        <li class="me-2"><a href="#" class="white"><i class="fa fa-eye"></i> 5k</a></li>
                                                        <li class="me-2"><a href="#" class="white"><i class="fa fa-heart"></i> 5k</a></li>
                                                        <li><a href="#" class="white"><i class="fa fa-comments"></i> 5k</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="color-overlay"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="pagination-main text-center">
                            <ul class="pagination">
                                <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">
                            <div class="author-news mb-4 box-shadow p-4 text-center">
                                <div class="author-news-content">
                                    <div class="author-thumb mb-1">
                                        <img src="{{asset('/')}}website/images/team/img2.jpg" alt="author">
                                    </div>
                                    <div class="author-content">
                                        <h3 class="title mb-1"><a href="#">Relson Dulux</a></h3>
                                        <p class="mb-2">Hello, We’re content writer who is fascinated by content fashion, celebrity and lifestyle. We helps clients bring the right content to the right people.</p>
                                        <div class="header-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-item mb-4">
                                <h4 class>All Categories</h4>
                                <ul class="sidebar-category">
                                    <li><a href="#">All</a></li>
                                    <li><a href="#">Featured</a></li>
                                    <li><a href="#">Sliders</a></li>
                                    <li class="active"><a href="#">Manage Listings</a></li>
                                    <li><a href="#">Address and Map</a></li>
                                    <li><a href="#">Reservation Requests</a></li>
                                    <li><a href="#">Your Reservation</a></li>
                                    <li><a href="#">Search Results</a></li>
                                </ul>
                            </div>
                            <div class="popular-post sidebar-item mb-4">
                                <div class="sidebar-tabs">
                                    <div class="post-tabs">

                                        <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button aria-controls="popular" aria-selected="false" class="nav-link active" data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab" role="tab" type="button">Popular</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button aria-controls="recent" aria-selected="true" class="nav-link" data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab" type="button">Recent</button>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="postsTabContent">

                                            <div aria-labelledby="popular-tab" class="tab-pane fade active show" id="popular" role="tabpanel">
                                                <article class="post mb-3 border-b pb-3">
                                                    <div class="s-content d-flex align-items-center justify-space-between">
                                                        <div class="sidebar-image w-25 me-3">
                                                            <a href="blog-single.html"><img src="{{asset('/')}}website/images/new-deal/deal1.jpg" alt></a>
                                                        </div>
                                                        <div class="content-list w-75">
                                                            <h5 class="mb-1"><a href="blog-single.html">An Incredibly Easy Method That Works For All</a></h5>
                                                            <div class="date">10 Apr 2021</div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="post border-b pb-3 mb-3">
                                                    <div class="s-content d-flex align-items-center justify-space-between">
                                                        <div class="sidebar-image w-25 me-3">
                                                            <a href="blog-single.html"><img src="{{asset('/')}}website/images/new-deal/deal2.jpg" alt></a>
                                                        </div>
                                                        <div class="content-list w-75">
                                                            <h5 class="mb-1"><a href="blog-single.html">15 Unheard Ways To Achieve Greater Walker</a></h5>
                                                            <div class="date">29 Mar 2021</div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="post">
                                                    <div class="s-content d-flex align-items-center justify-space-between">
                                                        <div class="sidebar-image w-25 me-3">
                                                            <a href="blog-single.html"><img src="{{asset('/')}}website/images/new-deal/deal4.jpg" alt></a>
                                                        </div>
                                                        <div class="content-list w-75">
                                                            <h5 class="mb-1"><a href="blog-single.html">15 Unheard Ways To Achieve Greater Walker</a></h5>
                                                            <div class="date">21 Feb 2021</div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>

                                            <div aria-labelledby="recent-tab" class="tab-pane fade" id="recent" role="tabpanel">
                                                <article class="post mb-3 border-b pb-3">
                                                    <div class="s-content d-flex align-items-center justify-space-between">
                                                        <div class="sidebar-image w-25 me-3">
                                                            <a href="blog-single.html"><img src="{{asset('/')}}website/images/new-deal/deal5.jpg" alt></a>
                                                        </div>
                                                        <div class="content-list w-75">
                                                            <h5 class="mb-1"><a href="blog-single.html">10 Ways To Immediately Start Selling Furniture</a></h5>
                                                            <div class="date">08 Mar 2021</div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="post border-b pb-3 mb-3">
                                                    <div class="s-content d-flex align-items-center justify-space-between">
                                                        <div class="sidebar-image w-25 me-3">
                                                            <a href="blog-single.html"><img src="{{asset('/')}}website/images/new-deal/deal6.jpg" alt></a>
                                                        </div>
                                                        <div class="content-list w-75">
                                                            <h5 class="mb-1"><a href="blog-single.html">Photography Photo modify and Beautiful Walker</a></h5>
                                                            <div class="date">18 Jan 2021</div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="post border-b pb-3">
                                                    <div class="s-content d-flex align-items-center justify-space-between">
                                                        <div class="sidebar-image w-25 me-3">
                                                            <a href="blog-single.html"><img src="{{asset('/')}}website/images/new-deal/deal3.jpg" alt></a>
                                                        </div>
                                                        <div class="content-list w-75">
                                                            <h5 class="mb-1"><a href="blog-single.html">1Certified Graphic Design with Free Project Course</a></h5>
                                                            <div class="date">12 Feb 2021</div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-item mb-4">
                                <h4 class>Tags</h4>
                                <ul class="sidebar-tags">
                                    <li><a href="#">Tour</a></li>
                                    <li><a href="#">Rental</a></li>
                                    <li><a href="#">City</a></li>
                                    <li><a href="#">Yatch</a></li>
                                    <li><a href="#">Activity</a></li>
                                    <li><a href="#">Museum</a></li>
                                    <li><a href="#">Beauty</a></li>
                                    <li><a href="#">Classic</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Designs</a></li>
                                    <li><a href="#">Featured</a></li>
                                    <li><a href="#">Free Style</a></li>
                                    <li><a href="#">Programs</a></li>
                                    <li><a href="#">Travel</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="featured-video bg-grey pb-5">
        <div class="container">
            <div class="section-title mb-4 pb-1 w-50">
                <h2 class="m-0">Inspiration <span>Posts</span></h2>
            </div>
            <div class="featured-video-main">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 mb-4">
                        <div class="trend-item box-shadow bg-white">
                            <div class="trend-image position-relative">
                                <img src="{{asset('/')}}website/images/trending/trending14.jpg" alt="image" class="w-100">
                                <div class="video-button text-center">
                                    <div class="call-button text-center">
                                        <button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo">
                                            <i class="fa fa-play bg-blue"></i>
                                        </button>
                                    </div>
                                    <div class="video-figure"></div>
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



@endsection
