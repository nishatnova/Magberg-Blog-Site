<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Magberg - @yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}website/images/favicon.png">

    <link href="{{asset('/')}}website/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="{{asset('/')}}website/css/style.css" rel="stylesheet" type="text/css">

    <link href="{{asset('/')}}website/css/plugin.css" rel="stylesheet" type="text/css">

    <link href="{{asset('/')}}website/fonts/flaticon.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="{{asset('/')}}website/fonts/line-icons.css" type="text/css">
</head>
<body>

<div id="preloader">
    <div id="status"></div>
</div>


<header class="main_header_area">
    <div class="header-content py-1 bg-lgrey">
        <div class="container d-flex align-items-center justify-content-between">
            <h4 class="theme mb-0 w-25 fw-normal text-center me-2"><i class="fas fa-bolt"></i> Trending News</h4>
            <div class="links float-right">
                <marquee scrolldelay="50" behavior="scroll" onmouseover="this.stop();" onmouseleave="this.start();">
                    <li><a href="#"><i class="fa fa-star"></i> “Speaks perfect English”: Trump’s offensive praise of a Latino Border Patrol agent</a></li>
                    <li><a href="#"><i class="fa fa-star"></i> Watch J. Lo live her best life, Nicki Minaj go regal, and Ariana Grande go religious.</a></li>
                    <li><a href="#"><i class="fa fa-star"></i> Tesla fans have found a new person to blame for Elon Musk’s troubles: his girlfriend</a></li>
                    <li><a href="#"><i class="fa fa-star"></i> The Pentagon won’t check if US bombs killed kids in Yemen. CNN did it for them.</a></li>
                </marquee>
            </div>
        </div>
    </div>

    <div class="header_menu" id="header_menu">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-2 pt-2">

                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img src="{{asset('/')}}website/images/logo.png" alt="image">
                            <img src="{{asset('/')}}website/images/logo-white.png" alt="image">
                        </a>
                    </div>

                    <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav" id="responsive-menu">
                            <li class="dropdown submenu active">
                                <a href="{{route('home')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <i class="icon-arrow-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="submenu dropdown">
                                        <a href="{{route('home')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{route('home')}}">Homepage Default</a></li>
                                            <li><a href="index-1.html">Homepage 1</a></li>
                                            <li><a href="index-2.html">Homepage 2</a></li>
                                            <li><a href="index-3.html">Homepage 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu dropdown">
                                        <a href="index-mag.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Magazine<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index-mag.html">Homepage Default</a></li>
                                            <li><a href="index-mag1.html">Homepage 1</a></li>
                                            <li><a href="index-mag2.html">Homepage 2</a></li>
                                            <li><a href="index-mag3.html">Homepage 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li class="submenu dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features <i class="icon-arrow-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="submenu dropdown">
                                        <a href="detail.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Post Detail<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="detail-1.html">Post Detail 1</a></li>
                                            <li><a href="detail-2.html">Post Detail 2</a></li>
                                            <li><a href="detail-3.html">Post Detail 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu dropdown">
                                        <a href="detail.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category Layout<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="post-grid-1.html">Post Grid 1</a></li>
                                            <li><a href="post-grid-2.html">Post Grid 2</a></li>
                                            <li><a href="post-grid-3.html">Post Grid 3</a></li>
                                            <li><a href="post-list-1.html">Post List 1</a></li>
                                            <li><a href="post-list-2.html">Post List 2</a></li>
                                            <li><a href="post-list-3.html">Post List 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu dropdown">
                                        <a href="gallery.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="gallery1.html">Gallery Masonry</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu dropdown">
                                        <a href="404.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Error<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="404.html">Error Page 1</a></li>
                                            <li><a href="404-1.html">Error Page 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="comingsoon.html">Comming Soon</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </li>
                            <li><a href="technology.html">Technology</a></li>
                            <li><a href="travel.html">Travel</a></li>
                            <li><a href="{{route('blog-category', ['id' => 1])}}">Lifestyle</a></li>
                        </ul>
                    </div>
                    <div class="register-login d-flex align-items-center">
                        <div class="header_sidemenu me-2">
                            <div class="mhead">
<span class="menu-ham">
<a href="#" class="cart-icon d-flex align-items-center ml-1"><i class="fa fa-th-large theme"></i></a>
</span>
                            </div>
                        </div>
                        <div class="search-main"><a href="#search1" class="mt_search"><i class="fa fa-search"></i></a></div>
                    </div>
                    <div id="slicknav-mobile"></div>
                </div>
            </div>
        </nav>
    </div>

</header>


@yield('body')

<footer class="pt-10 footermain">
    <div class="footer-upper pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="footer-about">
                        <img src="{{asset('/')}}website/images/logo-white.png" alt>
                        <p class="mt-3 mb-3 white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Odio suspendisse leo neque iaculis molestie sagittis maecenas aenean eget molestie sagittis.
                        </p>
                        <ul>
                            <li class="white"><strong>PO Box:</strong> +47-252-254-2542</li>
                            <li class="white"><strong>Location:</strong> Collins Street, sydney, Australia</li>
                            <li class="white"><strong>Email:</strong> <a href="https://htmldesigntemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a9c0c7cfc6e9c4c8cecbccdbce87cac6c4">[email&#160;protected]</a></li>
                            <li class="white"><strong>Website:</strong> www.magberg.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                    <div class="footer-links">
                        <h3 class="white">Quick link</h3>
                        <ul>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Customer Service</a></li>
                            <li><a href="#">Return Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                    <div class="footer-links">
                        <h3 class="white">Popular Tags</h3>
                        <div class="tagcloud">
                            <a class="tag-cloud-link bg-white black p-2 mb-1" href="#">Beautiful</a>
                            <a class="tag-cloud-link bg-white black p-2 mb-1" href="#">Public</a>
                            <a class="tag-cloud-link bg-white black p-2 mb-1" href="#">Technology</a>
                            <a class="tag-cloud-link bg-white black p-2 mb-1" href="#">Travel</a>
                            <a class="tag-cloud-link bg-white black p-2 mb-1" href="#">Entertainment</a>
                            <a class="tag-cloud-link bg-white black p-2 mb-1" href="#">Blog</a>
                            <a class="tag-cloud-link bg-white black p-2 mb-1" href="#">Sports </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="footer-links">
                        <h3 class="white">Popular Posts</h3>
                        <div class="trend-main">
                            <div class="trend-item d-flex align-items-center mb-2">
                                <div class="trend-image w-25 me-4">
                                    <img src="{{asset('/')}}website/images/trending/trending4.jpg" alt="image">
                                </div>
                                <div class="trend-content-main me-3 w-75">
                                    <div class="trend-content">
                                        <h4 class="mb-1"><a href="#">3 Easy Ways To Make Your iPhone Faster</a></h4>
                                        <div class="entry-meta">
                                            <div class="entry-metalist d-flex align-items-center">
                                                <small><a href="#" class="white"><i class="fa fa-calendar"></i> 29 Mar 2021</a></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="trend-item d-flex align-items-center mb-2">
                                <div class="trend-image w-25 me-4">
                                    <img src="{{asset('/')}}website/images/trending/trending5.jpg" alt="image">
                                </div>
                                <div class="trend-content-main me-3 w-75">
                                    <div class="trend-content">
                                        <h4 class="mb-1"><a href="#">Facts About Business That Will Help You Success</a></h4>
                                        <div class="entry-meta">
                                            <div class="entry-metalist d-flex align-items-center">
                                                <small><a href="#" class="white"><i class="fa fa-calendar"></i> 05 Apr 2021</a></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="trend-item d-flex align-items-center mb-2">
                                <div class="trend-image w-25 me-4">
                                    <img src="{{asset('/')}}website/images/trending/trending6.jpg" alt="image">
                                </div>
                                <div class="trend-content-main me-3 w-75">
                                    <div class="trend-content">
                                        <h4 class="mb-1"><a href="#">Your Light Is About To Stop Being Relevant</a></h4>
                                        <div class="entry-meta">
                                            <div class="entry-metalist d-flex align-items-center">
                                                <small><a href="#" class="white"><i class="fa fa-calendar"></i> 22 Mar 2021</a></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright pt-2 pb-2">
        <div class="container">
            <div class="copyright-inner d-md-flex align-items-center justify-content-between">
                <div class="copyright-text">
                    <p class="m-0 white">2020 Magberg. All rights reserved.</p>
                </div>
                <div class="social-links">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<div id="back-to-top">
    <a href="#"></a>
</div>

<div class="view-port">
    <div class="dark-mode"><a href="#"><i class="fa fa-moon"></i> Night</a></div>
    <div class="light-mode"><a href="#"><i class="fa fa-sun"></i> Day</a></div>
</div>

<div id="search1">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

<div class="header_sidemenu">
    <div class="header_sidemenu_in">
        <div class="menu bg-navy py-5 px-4">
            <div class="close-menu">
                <i class="fa fa-times white"></i>
            </div>
            <div class="m-contentmain">
                <div class="m-contentmain">
                    <div class="m-logo mb-5">
                        <img src="{{asset('/')}}website/images/logo-white.png" alt="m-logo">
                    </div>
                    <div class="content-box mb-5">
                        <h3 class="white">Get In Touch</h3>
                        <p class="white mb-2">We must explain to you how all seds this mistakens idea off denouncing pleasures and praising pain was born and I will give you a completed accounts..</p>
                        <a href="#" class="nir-btn">Consultation</a>
                    </div>
                    <div class="contact-info">
                        <h3 class="white">Contact Info</h3>
                        <ul>
                            <li class="white d-block mb-1"><i class="fa fa-map-marker-alt me-1"></i> Brozon Mall 26, Newyrok NY 10005</li>
                            <li class="white d-block mb-1"><i class="fa fa-phone-alt me-1"></i>555 626-0234</li>
                            <li class="white d-block mb-1"><i class="fa fa-envelope-open me-1"></i><a href="https://htmldesigntemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="63101613130c1117230e0204010611044d000c0e">[email&#160;protected]</a></li>
                            <li class="white d-block"><i class="fa fa-clock me-1"></i> Week Days: 09.00 to 18.00 Sunday: Closed</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay hide"></div>
    </div>
</div>


<script src="{{asset('/')}}website/js/jquery-3.5.1.min.js"></script>
<script src="{{asset('/')}}website/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}website/js/plugin.js"></script>
<script src="{{asset('/')}}website/js/main.js"></script>
<script src="{{asset('/')}}website/js/custom-swiper.js"></script>
<script src="{{asset('/')}}website/js/custom-nav.js"></script>

</body>


</html>
