<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0' name='viewport'/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Интернет магазин</title>

    <script src="{{asset('assets/js/main.js')}}" defer></script>

    <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/fav.png')}}"/>


    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

    <!--Google font-->
    <link
        href="https://fonts.googleapis.com/css?family=Cutive+Mono%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800%7CRaleway:300,400,400i,500,500i,600,600i,700,800"
        rel="stylesheet">
</head>

<body>
<div id="wrap">
    <header class="stik-header">
        <div class="top-bar bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 site-dir hidden-xs">
                        <a href="tel:+01123456789"><i class="fa fa-phone"></i> +1 123 456 7890</a>
                        <a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i> info@yourdomain.com</a>
                    </div>
                    <!--site dir-->

                    <div class="col-md-6 col-sm-6 col-xs-12 header-right pull-right text-right">
                        <div class="lang">
                            <div class="dropdown">
                                    <span class="drop-down-toggle">
                                        <img src="{{asset('assets/images/flag1.png')}}" alt=""> Eng <i
                                            class="fa fa-angle-down"></i>
                                    </span>
                                <ul class="drop-link trans">
                                    <li><a href="#" class="bg-dark">English</a></li>
                                    <li><a href="#" class="bg-dark">Spanish</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--lang-->

                        <div class="currency">
                            <div class="dropdown">
                                    <span class="drop-down-toggle">
                                        USD <i class="fa fa-angle-down"></i>
                                    </span>
                                <ul class="drop-link trans">
                                    <li><a href="#" class="bg-dark">USD</a></li>
                                    <li><a href="#" class="bg-dark">EUR</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--currency-->

                        <div class="account-wrap">
                            <div class="dropdown">
                                    <span class="drop-down-toggle">
                                        <i class="fa fa-user"></i> ACCOUNT <i class="fa fa-angle-down"></i>
                                    </span>
                                <ul class="drop-link trans">
                                    <li><a href="login.html" class="bg-dark">Login</a></li>
                                    <li><a href="signup.html" class="bg-dark">Register</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--account wrap-->

                        <div class="header-cart">
                            <a href="#" class="crt-btn drop-cart pe-7s-cart">
                                <span class="pri-bg radius-circle pri-font">2</span>
                            </a>
                            <div class="widget widget_shopping_cart ">
                                <h5 class="title">Your cart have (<span>2</span> Items)</h5>
                                <ul class="neo-mini-cart">
                                    <li class="item">
                                        <figure class="product-thumb">
                                            <a href="#"><img src="{{asset('assets/images/cart-pdt-thumb3.jpg')}}"
                                                             alt=""></a>
                                        </figure>
                                        <!--product thumb-->

                                        <div class="item-disc">
                                            <h6 class="pri-font">Ladies black full sleeves</h6>
                                            <span class="qty">1</span> X <span class="item-price">$110</span>
                                        </div>

                                        <a href="#" class="delete-item"><i class="pe-7s-close"></i></a>
                                    </li>

                                    <li class="item">
                                        <figure class="product-thumb">
                                            <a href="#"><img src="{{asset('assets/images/cart-pdt-thumb1.jpg')}}"
                                                             alt=""></a>
                                        </figure>
                                        <!--product thumb-->

                                        <div class="item-disc">
                                            <h6 class="pri-font">Ladies black top</h6>
                                            <span class="qty">1</span> X <span class="item-price">$110</span>
                                        </div>

                                        <a href="#" class="delete-item"><i class="pe-7s-close"></i></a>
                                    </li>
                                </ul>

                                <div class="mini-cart-total flx-element">
                                    <span>Subtotal</span>
                                    <span>$220.00</span>
                                </div>

                                <div class="btn-hold flx-element">
                                    <a class="btn text-uppercase" href="cart.html">view cart</a>
                                    <a class="btn pri-bg text-uppercase" href="checkout.html">checkout</a>
                                </div>
                            </div>
                            <!--mini cart-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--top bar-->

        <nav class="navbar navbar-default">
            <div class="container">
                <div class="header-mid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/"><img src="{{asset('assets/images/logo.png')}}" alt=""></a>
                        <!--<a class="navbar-brand site-brand" href="index.html">neostore</a>-->

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- navbar header -->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">

                            <li><a href="/">Home</a></li>
                            <li><a href="/products">ALL Products</a></li>
                            <li><a href="/category">Shop</a></li>
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/contact">Contact</a></li>


                        </ul>
                    </div>
                </div>

                <form class="search-form">
                    <input class="search-input" type="search" placeholder="Search..."/>
                </form>
                <!--header mid-->
            </div>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="footer-top bg-dark sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <h5>Customer Service</h5>

                        <ul class="footer-nav">
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Return</a></li>
                            <li><a href="#">Site map</a></li>
                            <li><a href="#">Brand</a></li>
                            <li><a href="#">Gift Vouchers</a></li>
                        </ul>
                    </div>
                    <!--widget-->

                    <div class="col-md-3 col-sm-3">
                        <h5>Information</h5>

                        <ul class="footer-nav">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                    <!--widget-->

                    <div class="col-md-3 col-sm-3">
                        <h5>Account</h5>

                        <ul class="footer-nav">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Specials</a></li>
                        </ul>
                    </div>
                    <!--widget-->

                    <div class="col-md-3 col-sm-3">
                        <h5>Contact us</h5>
                        <div class="contact-info">
                            <p>
                                <i class="fa fa-map-marker"></i> Lorem Ipsum is simply dummy text of the printing and
                                typesetting.
                            </p>

                            <p>
                                <i class="fa fa-envelope-o"></i>
                                <a href="#">info@yourdomain.com</a>
                            </p>

                            <p>
                                <i class="fa fa-phone"></i> 01 234 5678 / 01 234 5698
                            </p>
                        </div>
                    </div>
                    <!--widget-->
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="row footer-bottom">
                    <div class="col-md-4 col-sm-4">
                        Copyright &copy;
                        @php echo date('Y'); @endphp
                        All right reserved
                    </div>
                    <div class="col-md-4 col-sm-4 cards text-center">
                        <ul class="cards">
                            <li><i class="icofont icofont-paypal"></i></li>
                            <li><i class="icofont icofont-maestro"></i></li>
                            <li><i class="icofont icofont-discover"></i></li>
                            <li><i class="icofont icofont-american-express"></i></li>
                        </ul>
                    </div>
                    <!--cards-->

                    <div class="col-md-4 col-sm-4 text-right">
                        <ul class="social">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--social-->
                </div>
            </div>
        </div>
    </footer>
    <!--footer-->
</div>
<!--wrap-->

<div id="quick-view-popup">
    <div class="qv-wrap">
        <div class="row product">
            <div class="col-md-6 col-sm-6 image pdt-single-slider">
                <div class="product-thumb-slider layout-btm-thumb">
                    <div class="slide-top">
                        <ul class="qv-single-image single-2">
                            <li>
                                <figure><img src="{{asset('assets/images/pdt-single-slide1.jpg')}}" alt=""></figure>
                            </li>
                            <li>
                                <figure><img src="{{asset('assets/images/pdt-single-slide2.jpg')}}" alt=""></figure>
                            </li>
                            <li>
                                <figure><img src="{{asset('assets/images/pdt-single-slide3.jpg')}}" alt=""></figure>
                            </li>
                            <li>
                                <figure><img src="{{asset('assets/images/pdt-single-slide4.jpg')}}" alt=""></figure>
                            </li>
                            <li>
                                <figure><img src="{{asset('assets/images/pdt-single-slide5.jpg')}}" alt=""></figure>
                            </li>
                            <li>
                                <figure><img src="{{asset('assets/images/pdt-single-slide6.jpg')}}" alt=""></figure>
                            </li>
                        </ul>
                    </div>

                    <ul class="qv-single-thumb thumb-2">
                        <li>
                            <figure><img src="{{asset('assets/images/pdt-single-slide1.jpg')}}" alt=""></figure>
                        </li>

                        <li>
                            <figure><img src="{{asset('assets/images/pdt-single-slide2.jpg')}}" alt=""></figure>
                        </li>
                        <li>
                            <figure><img src="{{asset('assets/images/pdt-single-slide3.jpg')}}" alt=""></figure>
                        </li>
                        <li>
                            <figure><img src="{{asset('assets/images/pdt-single-slide4.jpg')}}" alt=""></figure>
                        </li>
                        <li>
                            <figure><img src="{{asset('assets/images/pdt-single-slide5.jpg')}}" alt=""></figure>
                        </li>
                        <li>
                            <figure><img src="{{asset('assets/images/pdt-single-slide6.jpg')}}" alt=""></figure>
                        </li>
                    </ul>
                </div>
            </div>
            <!--slider-->

            <div class="col-md-6 col-sm-6 summary ">
                <div class="wrap">
                    <div class="pdt-cat bm-5">
                        <span>Ladies fashion</span>
                    </div>

                    <h4>Ladies black full sleeves </h4>

                    <div class="price-wrap">
                        <div class="price">
                            <del>$189.00</del>
                            <ins>$189.00</ins>
                        </div>
                        <div class="star-rate">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                        </div>
                    </div>
                    <!--price wrap-->

                    <div class="disc bm-20">
                        Globally administrate synergistic web services after team driven technology. Professionally
                        customize cutting-edge information vis-a-vis value-added internal or "organic" sources.
                        Holisticly develop value-added communities via orthogonal products.
                    </div>
                    <!--disc-->

                    <div class="flx-element bm-20">
                        <div><strong>Availability :</strong> 10
                            <span class="text-green"><i class="fa fa-check-square"></i> Stock</span>
                        </div>
                        <div><strong>SKU :</strong> BLFG01</div>
                    </div>
                    <!--flex-->

                    <div class="color-option bm-20">
                        <h6 class="bm-5">Select color</h6>

                        <div class="color-filter">
                            <form>
                                <div class="radio-wrap red">
                                    <input type="radio" name="color">
                                    <label>&nbsp;</label>
                                </div>
                                <!--red-->

                                <div class="radio-wrap black">
                                    <input type="radio" name="color">
                                    <label>&nbsp;</label>
                                </div>
                                <!--black-->

                                <div class="radio-wrap yellow">
                                    <input type="radio" name="color">
                                    <label>&nbsp;</label>
                                </div>
                                <!--yellow-->

                                <div class="radio-wrap blue">
                                    <input type="radio" name="color">
                                    <label>&nbsp;</label>
                                </div>
                                <!--blue-->
                            </form>
                        </div>
                    </div>
                    <!--color option-->

                    <div class="size-option bm-20">
                        <h6 class="bm-5">Select Size</h6>

                        <div class="size-filter">
                            <form>
                                <div class="radio-wrap">
                                    <input type="radio" name="size">
                                    <label>L</label>
                                </div>
                                <!--l-->

                                <div class="radio-wrap">
                                    <input type="radio" name="size">
                                    <label>XL</label>
                                </div>
                                <!--xl-->

                                <div class="radio-wrap">
                                    <input type="radio" name="size">
                                    <label>M</label>
                                </div>
                                <!--m-->

                                <div class="radio-wrap">
                                    <input type="radio" name="size">
                                    <label>S</label>
                                </div>
                                <!--s-->

                                <div class="radio-wrap">
                                    <input type="radio" name="size">
                                    <label>X</label>
                                </div>
                                <!--x-->
                            </form>
                        </div>
                    </div>
                    <!--size option-->

                    <div class="btn-wrap bm-20">
                        <input type="number" value="1" title="Qty" class="input-text qty" size="4">
                        <a href="#" class="btn pri-bg"><i class="pe-7s-cart"></i> ADD TO CART</a>
                        <a href="#" class="btn bdr"><i class="pe-7s-like"></i></a>
                    </div>
                    <!--btn wrap-->

                    <div class="share pri-font">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i> facebook</a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i> twitter</a>
                        <a href="#" class="pin"><i class="fa fa-pinterest-p"></i> pinterest</a>
                    </div>
                </div>
            </div>
            <!--summery-->
        </div>
    </div>
</div>
<!--quick view-->

<div id="morphsearch" class="morphsearch">
    <div class="morphsearch-content">
        <div class="container">
            <span class="morphsearch-close"></span>

            <form class="morphsearch-form">
                <input class="morphsearch-input" type="search" placeholder="Search..."/>
                <button class="morphsearch-submit" type="submit"><i class="pe-7s-search"></i></button>
            </form>
        </div>
    </div><!-- /morphsearch-content -->
</div>
<!--search wrap-->

<a href="#" class="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

</body>

</html>

