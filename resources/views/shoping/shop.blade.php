@extends('layouts.app')
@section('title', 'Shop')
@section('content')
    <div class="pg-header style2 sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 flx-element wrap">
                    <div class="left">
                        <h2>@if($list == 'clothings')
                                Одежда
                            @elseif($list == 'accessories')
                                Аксессуары
                            @elseif($list == 'man')
                                Мужская одежда
                            @elseif($list == 'woman')
                                Женская одежда
                            @elseif($list == 'new')
                                Новые поступления
                            @elseif($list == 'shoes')
                                Обувь
                            @elseif($list == 'socks')
                                Носки
                            @elseif($list == 'jacket')
                                Куртка
                            @endif</h2>

                    </div>
                    <!--left-->

                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/category">Category</a></li>
                        <li class="active">{{$list}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--page title-->

    <main class="main">
        <div class="container">
            <div class="sorting-outer">
                <div class="sorting-wrap">
                    Showing 1–12 of 292 results
                    <button class="filter-btn">Filter <i class="fa fa-angle-down"></i></button>
                </div>
                <!--sorting wrap-->

                <div class="filter-toggle collapse bg-soft-gray">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="title"><h5>Sort by:</h5></div>
                            <form action="#">
                                <ul>
                                    <li class="active"><a href="#">Default</a></li>
                                    <li><a href="#">Popularity</a></li>
                                    <li><a href="#">Average rating</a></li>
                                    <li><a href="#">Newness</a></li>
                                    <li><a href="#">Price: low to high</a></li>
                                    <li><a href="#">Price: high to low</a></li>
                                </ul>
                            </form>
                        </div>
                        <!--sort by-->

                        <div class="col-sm-3">
                            <div class="title"><h5>filter by price:</h5></div>
                            <form action="#">
                                <ul>
                                    <li class="active"><a href="#">All</a></li>
                                    <li><a href="#">$0.00 - £150.00</a></li>
                                    <li><a href="#">$150.00 - £200.00</a></li>
                                    <li><a href="#">$200.00 - £500.00</a></li>
                                    <li><a href="#">$500.00 - £800.00</a></li>
                                    <li><a href="#">$800.00 +</a></li>
                                </ul>
                            </form>
                        </div>
                        <!--price filter-->

                        <div class="col-sm-3">
                            <div class="title"><h5>filter by color:</h5></div>
                            <div class="color-filter">
                                <form>
                                    <div class="check-wrap red">
                                        <input type="checkbox">
                                        <label>Red (20)</label>
                                    </div>
                                    <!--red-->

                                    <div class="check-wrap black">
                                        <input type="checkbox">
                                        <label>Black (100)</label>
                                    </div>
                                    <!--black-->

                                    <div class="check-wrap yellow">
                                        <input type="checkbox">
                                        <label>Yellow(20)</label>
                                    </div>
                                    <!--yellow-->

                                    <div class="check-wrap blue">
                                        <input type="checkbox">
                                        <label>Blue (120)</label>
                                    </div>
                                    <!--blue-->
                                </form>
                            </div>
                        </div>
                        <!--color filter-->

                        <div class="col-sm-3">
                            <div class="title"><h5>FILTER BY SIZE</h5></div>
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
                    </div>
                </div>
                <!--filter toggle-->
            </div>
            <!--sorting outer-->

            <div class="sec-mar">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 product-wrap product-listing">
                        <ul class="products">
                            <li class="product">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>
                                        <a href="#" class="actn" data-toggle="tooltip" data-placement="top"
                                           title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a class="actn add-on-cart" data-toggle="tooltip" data-placement="top"
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

                                <h4><a href="#">Ladies black full sleeves</a></h4>
                            </li>
                            <!--product-->

                            <li class="product new flip">
                                <figure class="img-animi">
                                    <div class="tag new">new</div>
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>
                                        <a href="#" class="actn" data-toggle="tooltip" data-placement="top"
                                           title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a class="actn add-on-cart" data-toggle="tooltip" data-placement="top"
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

                                <h4><a href="#">Mens Shirt</a></h4>
                            </li>
                            <!--product-->

                            <li class="product flip">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>
                                        <a href="#" class="actn" data-toggle="tooltip" data-placement="top"
                                           title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a class="actn add-on-cart" data-toggle="tooltip" data-placement="top"
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

                                <h4><a href="#">Ladies black top</a></h4>
                            </li>
                            <!--product-->

                            <li class="product last">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>
                                        <a href="#" class="actn" data-toggle="tooltip" data-placement="top"
                                           title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a class="actn add-on-cart" data-toggle="tooltip" data-placement="top"
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

                                <h4><a href="#">Ladies blue jeans</a></h4>
                            </li>
                            <!--product-->

                            <li class="product">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>
                                        <a href="#" class="actn" data-toggle="tooltip" data-placement="top"
                                           title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a class="actn add-on-cart" data-toggle="tooltip" data-placement="top"
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

                                <h4><a href="#">Ladies half jacket</a></h4>
                            </li>
                            <!--product-->

                            <li class="product">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>
                                        <a href="#" class="actn" data-toggle="tooltip" data-placement="top"
                                           title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a class="actn add-on-cart" data-toggle="tooltip" data-placement="top"
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

                                <h4><a href="#">Mens Shirt</a></h4>
                            </li>
                            <!--product-->

                            <li class="product sale">
                                <figure class="img-animi">
                                    <div class="tag new">sale</div>
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>
                                        <a href="#" class="actn" data-toggle="tooltip" data-placement="top"
                                           title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a class="actn add-on-cart" data-toggle="tooltip" data-placement="top"
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

                                <h4><a href="#">Ladies full sleeves </a></h4>
                            </li>
                            <!--product-->

                            <li class="product last flip">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>
                                        <a href="#" class="actn" data-toggle="tooltip" data-placement="top"
                                           title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a class="actn add-on-cart" data-toggle="tooltip" data-placement="top"
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

                                <h4><a href="#">Ladies longline dress</a></h4>
                            </li>
                            <!--product-->

                            <li class="product">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>
                                        <a href="#" class="actn" data-toggle="tooltip" data-placement="top"
                                           title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a class="actn add-on-cart" data-toggle="tooltip" data-placement="top"
                                           title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <a href="#"><img src="{{asset('assets/images/product17.jpg')}}" alt=""></a>
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

                                <h4><a href="#">Ladies half jacket</a></h4>
                            </li>
                            <!--product-->

                            <li class="product">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>
                                        <a href="#" class="actn" data-toggle="tooltip" data-placement="top"
                                           title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a class="actn add-on-cart" data-toggle="tooltip" data-placement="top"
                                           title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <a href="#"><img src="{{asset('assets/images/product18.jpg')}}" alt=""></a>
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

                                <h4><a href="#">Ladies black light dress</a></h4>
                            </li>
                            <!--product-->

                            <li class="product sale">
                                <figure class="img-animi">
                                    <div class="tag new">sale</div>
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>
                                        <a href="#" class="actn" data-toggle="tooltip" data-placement="top"
                                           title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a class="actn add-on-cart" data-toggle="tooltip" data-placement="top"
                                           title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <a href="#"><img src="{{asset('assets/images/product19.jpg')}}" alt=""></a>
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

                                <h4><a href="#">Ladies full sleeves </a></h4>
                            </li>
                            <!--product-->

                            <li class="product last">
                                <figure class="img-animi">
                                    <div class="actions trans">
                                        <a class="link-layer" href="#">&nbsp;</a>
                                        <a href="#" class="actn" data-toggle="tooltip" data-placement="top"
                                           title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                        <a class="actn add-on-cart" data-toggle="tooltip" data-placement="top"
                                           title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                        <a href="#quick-view-popup" class="actn" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <a href="#" class="front"><img src="{{asset('assets/images/product20.jpg')}}"
                                                                   alt=""></a>
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

                                <h4><a href="#">Ladies longline dress</a></h4>
                            </li>
                            <!--product-->
                        </ul>
                    </div>
                    <!--product wrap-->
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="bottom-sorting">
                            <div class="result-count">Showing 1 - 12 of 120 results</div>
                            <!--result count-->

                            <div class="pagination">
                                <ul class="page-numbers">
                                    <li><a class="prev page-numbers" href="#">&lt;</a></li>
                                    <li><span class="page-numbers current">1</span></li>
                                    <li><a class="page-numbers" href="#">2</a></li>
                                    <li><a class="page-numbers" href="#">3</a></li>
                                    <li><a class="next page-numbers" href="#">&gt;</a></li>
                                </ul>
                            </div>
                            <!--pegination-->
                        </div>
                    </div>
                </div>
            </div>
            <!--feature item-->
        </div>
    </main>
@endsection
