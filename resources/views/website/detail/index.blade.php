@extends('website.master')

@section('title')
    Blog Detail
@endsection

@section('body')

    <div class="page-cover pt-5 position-relative about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                    <div class="cover-content">
                        <div class="author-detail mb-2">
                            <a href="#" class="tag white bg-theme py-1 px-3 me-2">{{$blog->category->name}}</a>
                            <a href="#" class="tag white bg-navy py-1 px-3"><i class="fa fa-eye"></i> 2500</a>
                        </div>
                        <h1>{{$blog->title}}</h1>
                        <div class="author-detail d-flex align-items-center">
                            <span class="me-3"><a href="#"><i class="fa fa-clock"></i> Posted On : 12 May 2021</a></span>
                            <span class="me-3"><a href="#"><i class="fa fa-user"></i> Jack Richard</a></span>
                            <span><a href="#"><i class="fa fa-comments"></i> 50</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="box-shadow p-3"><img src="{{asset($blog->image)}}" alt="Image" class="w-100"></div>
                </div>
            </div>
        </div>
    </div>


    <section class="blog blog-left pt-5 pb-5">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 mb-4">
                    <div class="blog-single">
                        <div class="blog-wrapper">
                            {{$blog->description}}

                        </div>

                        <div class="single-add-review">
                            <h4 class>Write a Review</h4>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-2">
                                            <input type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-2">
                                            <input type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-1">
                                        <div class="form-group">
                                            <textarea>Comment</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-btn">
                                            <a href="#" class="nir-btn">Submit Review</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="sidebar-sticky">
                        <div class="detail-sidebar">
                            <div class="mag-image mb-2 position-relative">
                                <img src="{{asset('/')}}website/images/trending/trending10.jpg" alt="Image">
                                <div class="video-button text-center">
                                    <div class="call-button text-center">
                                        <button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo">
                                            <i class="fa fa-play bg-blue"></i>
                                        </button>
                                    </div>
                                    <div class="video-figure"></div>
                                </div>
                            </div>
                            <div class="detail-sidebar-item border-b pb-2 mb-2">
                                <h5><a href="detail1.html">Some native species quickly disappeared from Biotest Lake</a><span><a href="#">John Doe</a></span></h5>
                            </div>
                            <div class="detail-sidebar-item border-b pb-2 mb-2">
                                <h5><a href="detail1.html">Some native species quickly disappeared from Biotest Lake</a><span><a href="#">John Doe</a></span></h5>
                            </div>
                            <div class="detail-sidebar-item border-b pb-2 mb-2">
                                <h5><a href="detail1.html">Some native species quickly disappeared from Biotest Lake</a><span><a href="#">John Doe</a></span></h5>
                            </div>
                            <div id="sidebar1">
                                <div class="sidebar-icons">
                                    <a href="#" class="me-1"><i class="fa fa-heart" aria-hidden="true"><span> 1.2K</span></i></a>
                                    <a href="#" class="me-1"><i class="fa fa-bookmark" aria-hidden="true"></i></a>
                                    <a href="#" class="me-1"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="insta-main pt-0 pb-4 overflow-hidden">
        <div class="container-fluid">
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


@endsection
