@extends('shoping.layouts.app')
@section('title', 'Home')
@section('content')
    <div class="hero-banner">
        <div class="slider-wrapper">
            <div class="slider">
                <div class="fs_loader"></div>

                <div class="slide">
                    <img src="{{asset('assets/images/fashion/slider-bg3.jpg')}}" alt="" data-in="fade">

                    <h3 data-position="360,230" data-in="top" data-delay="200" class="pri-color text-uppercase ">
                        Everything</h3>

                    <h2 data-position="410,220" data-in="top" data-delay="300" class="pri-font">
                        <strong>UPTO <span class="pri-color">30<sup>%<br>OFF</sup></span></strong>
                    </h2>

                    <h3 data-position="550,220" data-in="top" data-delay="300" class=" text-uppercase text-box">In all
                        ladies items !</h3>
                </div>
                <!--slide 1-->

                <div class="slide">
                    <img src="{{asset('assets/images/fashion/slider-bg4.jpg')}}" alt="" data-in="fade">

                    <h2 data-position="400,220" data-in="top" data-delay="300" class="pri-font">
                        <strong>GET <span class="pri-color">30<sup>%<br>OFF</sup></span></strong>
                    </h2>

                    <h3 data-position="550,220" data-in="top" data-delay="300" class=" text-uppercase text-box">In all
                        ladies items !</h3>
                </div>
                <!--slide 2-->
            </div>
        </div>
    </div>
    <!--banner-->

    <main class="main">
        <div class="shop-feature sec-mar sec-padding bg-soft-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 shp-ftr-wrap">
                        <div class="feature-box">
                            <h5><span class="icon icofont icofont-free-delivery"></span>Free Shipping</h5>
                            <span class="sub-text">Free Delivery on orders above $40.</span>
                        </div>

                        <div class="feature-box">
                            <h5><span class="icon icofont icofont-reply"></span>Return back</h5>
                            <span class="sub-text">Return or exchange within 30 days.</span>
                        </div>

                        <div class="feature-box">
                            <h5><span class="icon icofont icofont-money"></span>secure payment</h5>
                            <span class="sub-text">We follow tursted payment method.</span>
                        </div>

                        <div class="feature-box">
                            <h5><span class="icon icofont icofont-live-support"></span>24 / 7 support</h5>
                            <span class="sub-text">Experince our best support system</span>
                        </div>
                    </div>
                    <!--support-->
                </div>
            </div>
        </div>
        <!--shop feature-->

        <div class="fet-cat sec-mar gutter-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="fet-box cat-2 top-left text-white border bm-10">
                            <figure>
                                <a href="#" class="link-layer">&nbsp;</a>

                                <h2 class="text-uppercase">
                                    <span>new summer</span>
                                    collection
                                </h2>
                                <img src="{{asset('assets/images/fashion/cat-summer.jpg')}}" alt="summer">
                            </figure>
                        </div>
                        <!--first-->

                        <div class="fet-box cat-2 bottom-left">
                            <figure>
                                <a href="#" class="link-layer">&nbsp;</a>

                                <h2 class="text-uppercase">
                                    <span>new men's</span>
                                    collection
                                </h2>
                                <img src="{{asset('assets/images/fashion/cat-mens.jpg')}}" alt="men">
                            </figure>
                        </div>
                        <!--second-->
                    </div>
                    <!--left-->

                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="fet-box cat-2 center-right text-white border bm-10">
                            <figure>
                                <a href="#" class="link-layer">&nbsp;</a>
                                <h2 class="text-uppercase">
                                    <span>new ladie's</span>
                                    collection
                                </h2>
                                <img src="{{asset('assets/images/fashion/cat-ladies.jpg')}}" alt="ladies">
                            </figure>
                        </div>
                        <!--third-->

                        <div class="fet-box cat-2 center-left heilight">
                            <figure>
                                <a href="#" class="link-layer">&nbsp;</a>
                                <h2 class="text-uppercase">
                                    <span>kid's</span>
                                    collection
                                </h2>
                                <img src="{{asset('assets/images/fashion/cat-acc.jpg')}}" alt="accessories">
                            </figure>
                        </div>
                        <!--third-->
                    </div>
                </div>
            </div>
        </div>
        <!--feature category-->

        <div class="feature-item sec-mar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="title mid-sep">
                            <h2>Featured items</h2>
                        </div>
                    </div>
                    <!--title bar-->

                    <div class="col-md-12 col-sm-12 col-xs-12 product-wrap">
                        <ul class="products">
                            <li class="product">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>

                                        <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                           data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top"
                                           title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <a href="#"><img src="{{asset('assets/images/product1.jpg')}}" alt=""></a>
                                </figure>

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

                                <h4><a href="#">Synergistically deliver</a></h4>
                            </li>
                            <!--product-->

                            <li class="product new flip">
                                <figure class="img-animi">
                                    <div class="tag new">new</div>
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>

                                        <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                           data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top"
                                           title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <a href="#" class="front"><img src="{{asset('assets/images/product2.jpg')}}" alt=""></a>
                                    <a href="#" class="back"><img src="{{asset('assets/images/product6.jpg')}}" alt=""></a>
                                </figure>

                                <div class="price-wrap">
                                    <div class="price">
                                        <ins>$109.00</ins>
                                    </div>
                                    <div class="star-rate">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                    </div>
                                </div>

                                <h4><a href="#">Distinctively extend</a></h4>
                            </li>
                            <!--product-->

                            <li class="product flip">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>

                                        <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                           data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top"
                                           title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>

                                    <a href="#" class="front"><img src="{{asset('assets/images/product3.jpg')}}" alt=""></a>
                                    <a href="#" class="back"><img src="{{asset('assets/images/product1.jpg')}}" alt=""></a>
                                </figure>

                                <div class="price-wrap">
                                    <div class="price">
                                        <del>$80.00</del>
                                        <ins>$75.00</ins>
                                    </div>
                                    <div class="star-rate">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                    </div>
                                </div>

                                <h4><a href="#">Quickly transform flexible</a></h4>
                            </li>
                            <!--product-->

                            <li class="product last">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>

                                        <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                           data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top"
                                           title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <a href="#"><img src="{{asset('assets/images/product4.jpg')}}" alt=""></a>
                                </figure>

                                <div class="price-wrap">
                                    <div class="price">
                                        <del>$99.00</del>
                                        <ins>$95.00</ins>
                                    </div>
                                    <div class="star-rate">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                    </div>
                                </div>

                                <h4><a href="#">Energistically promote</a></h4>
                            </li>
                            <!--product-->

                            <li class="product">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>

                                        <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                           data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top"
                                           title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <a href="#"><img src="{{asset('assets/images/product5.jpg')}}" alt=""></a>
                                </figure>

                                <div class="price-wrap">
                                    <div class="price">
                                        <ins>$119.00</ins>
                                    </div>
                                    <div class="star-rate">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                    </div>
                                </div>

                                <h4><a href="#">Appropriately leverage</a></h4>
                            </li>
                            <!--product-->

                            <li class="product">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>

                                        <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                           data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top"
                                           title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <a href="#"><img src="{{asset('assets/images/product6.jpg')}}" alt=""></a>
                                </figure>

                                <div class="price-wrap">
                                    <div class="price">
                                        <ins>$109.00</ins>
                                    </div>
                                    <div class="star-rate">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                    </div>
                                </div>

                                <h4><a href="#">Intrinsicly develop stand</a></h4>
                            </li>
                            <!--product-->

                            <li class="product sale">
                                <figure class="img-animi">
                                    <div class="tag new">sale</div>
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>

                                        <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                           data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top"
                                           title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <a href="#"><img src="{{asset('assets/images/product7.jpg')}}" alt=""></a>
                                </figure>

                                <div class="price-wrap">
                                    <div class="price">
                                        <del>$90.00</del>
                                        <ins>$80.00</ins>
                                    </div>
                                    <div class="star-rate">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                    </div>
                                </div>

                                <h4><a href="#">Uniquely leverage other's</a></h4>
                            </li>
                            <!--product-->

                            <li class="product last flip">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>

                                        <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                           data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top"
                                           title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <a href="#" class="front"><img src="{{asset('assets/images/product8.jpg')}}" alt=""></a>
                                    <a href="#" class="back"><img src="{{asset('assets/images/product1.jpg')}}" alt=""></a>
                                </figure>

                                <div class="price-wrap">
                                    <div class="price">
                                        <del>$99.00</del>
                                        <ins>$95.00</ins>
                                    </div>
                                    <div class="star-rate">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                    </div>
                                </div>

                                <h4><a href="#">Completely optimize</a></h4>
                            </li>
                            <!--product-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--feature item-->

        <div class="fashion-offer sec-mar">
            <div class="jarallax overlay v-align">
                <img class="jarallax-img" src="{{asset('assets/images/parallax1.jpg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="wrap">
                                <figure class="offer-girl">
                                    <img src="{{asset('assets/images/sale-girl.png')}}" alt="sale offer">
                                </figure>

                                <div class="col-sm-5 pull-right text-center p-0">
                                    <h2 class="text-uppercase txt-lg bm-0">big sale offer !</h2>
                                    <h5 class="bm-30">
                                        <em>Dynamically create equity invested.</em>
                                    </h5>

                                    <div class="count-down bm-40" data-end-date="June 2, 2018"></div>
                                    <!--count down-->

                                    <a class="btn btn-default">View more</a>
                                </div>
                            </div>
                        </div>
                        <!--content-->
                    </div>
                </div>
            </div>
        </div>
        <!--offer-->

        <div class="trending sec-mar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="title mid-sep"><h2>Trending Products</h2></div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 product-wrap product-slide-wrap">
                        <ul class="products product-slider">
                            <li class="product">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>

                                        <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                           data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top"
                                           title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <a href="#"><img src="{{asset('assets/images/product1.jpg')}}" alt=""></a>
                                </figure>

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

                                <h4><a href="#">Appropriately leverage</a></h4>
                            </li>
                            <!--product-->

                            <li class="product new flip">
                                <figure class="img-animi">
                                    <div class="tag new">new</div>
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>

                                        <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                           data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top"
                                           title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <a href="#" class="front"><img src="{{asset('assets/images/product2.jpg')}}" alt=""></a>
                                    <a href="#" class="back"><img src="{{asset('assets/images/product12.jpg')}}" alt=""></a>
                                </figure>

                                <div class="price-wrap">
                                    <div class="price">
                                        <ins>$109.00</ins>
                                    </div>
                                    <div class="star-rate">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                    </div>
                                </div>

                                <h4><a href="#">Enthusiastically build</a></h4>
                            </li>
                            <!--product-->

                            <li class="product flip">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>

                                        <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                           data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top"
                                           title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <a href="#" class="front"><img src="{{asset('assets/images/product3.jpg')}}" alt=""></a>
                                    <a href="#" class="back"><img src="{{asset('assets/images/product1.jpg')}}" alt=""></a>
                                </figure>

                                <div class="price-wrap">
                                    <div class="price">
                                        <del>$80.00</del>
                                        <ins>$75.00</ins>
                                    </div>
                                    <div class="star-rate">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                    </div>
                                </div>

                                <h4><a href="#">Objectively reconceptualize</a></h4>
                            </li>
                            <!--product-->

                            <li class="product">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>

                                        <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                           data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top"
                                           title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <a href="#"><img src="{{asset('assets/images/product4.jpg')}}" alt=""></a>
                                </figure>

                                <div class="price-wrap">
                                    <div class="price">
                                        <del>$99.00</del>
                                        <ins>$95.00</ins>
                                    </div>
                                    <div class="star-rate">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                    </div>
                                </div>

                                <h4><a href="#">Energistically parallel</a></h4>
                            </li>
                            <!--product-->

                            <li class="product new flip">
                                <figure class="img-animi">
                                    <div class="tag new">new</div>
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>

                                        <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                           data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top"
                                           title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <a href="#" class="front"><img src="{{asset('assets/images/product2.jpg')}}" alt=""></a>
                                    <a href="#" class="back"><img src="{{asset('assets/images/product6.jpg')}}" alt=""></a>
                                </figure>

                                <div class="price-wrap">
                                    <div class="price">
                                        <ins>$109.00</ins>
                                    </div>
                                    <div class="star-rate">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                    </div>
                                </div>

                                <h4><a href="#">Dramatically deliver</a></h4>
                            </li>
                            <!--product-->

                            <li class="product flip">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>

                                        <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                           data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top"
                                           title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <a href="#" class="front"><img src="{{asset('assets/images/product3.jpg')}}" alt=""></a>
                                    <a href="#" class="back"><img src="{{asset('assets/images/product1.jpg')}}" alt=""></a>
                                </figure>

                                <div class="price-wrap">
                                    <div class="price">
                                        <del>$80.00</del>
                                        <ins>$75.00</ins>
                                    </div>
                                    <div class="star-rate">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                    </div>
                                </div>

                                <h4><a href="#">Conveniently deliver.</a></h4>
                            </li>
                            <!--product-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--tranding-->


        <div class="news blog-holder modern bm-50">
            <div class="container">
                <div class="title mid-sep text-center"><h2>Latest news</h2></div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="blog-wrap">
                            <figure class="img-animi">
                                <a href="#"><img src="{{asset('assets/images/news1.jpg')}}" alt=""></a>
                            </figure>

                            <div class="post-wrap">
                                <div class="entry-info">
                                    <span class="entry-date pri-bg">aug 10 2017</span>
                                    <span class="comment-count"><a href="#"><i class="fa fa-comments"></i> 5</a></span>
                                </div>

                                <h5 class="post-title">
                                    <a href="#">Proactively incubate collaboration.</a>
                                </h5>

                                <p>
                                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                    mus. Donec quam felis, ultricies nec..
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--single blog-->

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="blog-wrap">
                            <figure class="img-animi">
                                <a href="#"><img src="{{asset('assets/images/news2.jpg')}}" alt=""></a>
                            </figure>

                            <div class="post-wrap">
                                <div class="entry-info">
                                    <span class="entry-date pri-bg">aug 10 2017</span>
                                    <span class="comment-count"><a href="#"><i class="fa fa-comments"></i> 5</a></span>
                                </div>

                                <h5 class="post-title">
                                    <a href="#">Proactively incubate plug-and-play.</a>
                                </h5>

                                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Donec quam felis, ultricies nec..
                            </div>
                        </div>
                    </div>
                    <!--single blog-->
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="blog-wrap">
                            <figure class="img-animi">
                                <a href="#"><img src="{{asset('assets/images/news3.jpg')}}" alt=""></a>
                            </figure>

                            <div class="post-wrap">
                                <div class="entry-info">
                                    <span class="entry-date pri-bg">aug 10 2017</span>
                                    <span class="comment-count"><a href="#"><i class="fa fa-comments"></i> 5</a></span>
                                </div>

                                <h5 class="post-title">
                                    <a href="#">Proactively plug-and-play collaboration.</a>
                                </h5>

                                <p>
                                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                    mus. Donec quam felis, ultricies nec..
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--single blog-->

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="blog-wrap">
                            <figure class="img-animi">
                                <a href="#"><img src="{{asset('assets/images/news4.jpg')}}" alt=""></a>
                            </figure>

                            <div class="post-wrap">
                                <div class="entry-info">
                                    <span class="entry-date pri-bg">aug 10 2017</span>
                                    <span class="comment-count"><a href="#"><i class="fa fa-comments"></i> 5</a></span>
                                </div>

                                <h5 class="post-title">
                                    <a href="#">Proactively incubate ollaboration.</a>
                                </h5>

                                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Donec quam felis, ultricies nec..
                            </div>
                        </div>
                    </div>
                    <!--single blog-->
                </div>
            </div>
        </div>
        <!--news-->

        <div class="subscription layout-2 sec-bg">
            <div class="container">
                <div class="row flx-element">
                    <div class="col-md-7 col-sm-7 text-white">
                        <h3 class="text-white bm-0"><i class="fa fa-paper-plane"></i> Sign up to Newsletter</h3>
                        ... and get <strong>$20</strong> coupon for first shopping.
                    </div>

                    <div class="col-md-5 col-sm-5">
                        <form action="#">
                            <div class="form-group">
                                <input type="email" placeholder="Enter your email address.">
                            </div>

                            <div class="form-group">
                                <input type="submit" value="subscribe">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--main-->

    <div class="modal fade" id="newsletter">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <figure>
                        <img src="{{asset('assets/images/newsletter-bg.jpg')}}" alt="">
                    </figure>

                    <div class="content-hold">
                        <div class="wrap">
                            <h2 class="text-uppercase text-white">SIGN UP AND <br> CONNECT TO neostore!</h2>
                            <h6 class="text-white bm-30">Sign up for Exclusive Updates, New Arrivals and and Discount
                                offers.</h6>

                            <form>
                                <div class="form-group bm-0">
                                    <input type="text" placeholder="Email address">
                                    <input type="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
    <!-- /.modal -->
@endsection
