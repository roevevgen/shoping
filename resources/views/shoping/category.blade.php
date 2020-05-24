@extends('shoping.layouts.app')
@section('title', 'Category')
@section('content')
    <div class="pg-header jarallax overlay parlx-pad sec-mar">
        <img class="jarallax-img" src="{{asset('assets/images/page-title.jpg')}}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2>Shop list left sidebar</h2>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--page title-->

    <main class="main">
        <div class="container">
            <div class="row sec-mar">
                <div class="col-md-9 col-sm-9 pull-right left-blk">
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

                    <div class="product-wrap lst-vw product-listing">
                        <ul class="products">
                            <li class="product">
                                <figure class="img-animi">
                                    <a href="#"><img src="{{asset('assets/images/product1.jpg')}}" alt=""></a>
                                </figure>

                                <div class="pdt-right">
                                    <div class="pdt-cat bm-5">
                                        <span>Ladies fashion</span>
                                    </div>

                                    <div class="flx-element bm-10">
                                        <h3 class="bm-0"><a href="#">Ladies black full sleeves </a></h3>

                                        <div class="star-rate">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star-half-full"></i>
                                        </div>
                                    </div>
                                    <!--flex element-->

                                    <div class="disc bm-20">
                                        Globally expedite real-time best practices whereas collaborative catalysts for
                                        change. Efficiently extend enterprise imperatives after resource-leveling
                                        infomediaries.
                                    </div>

                                    <div class="price bm-25">
                                        <del>$189.00</del>
                                        <ins>$189.00</ins>
                                    </div>

                                    <div class="btn-wrap">
                                        <a href="#" class="btn add-to-cart pri-bg" data-toggle="tooltip"
                                           data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i> ADD TO
                                            CART</a>
                                        <a href="#" class="btn add-to-favorite bdr" data-toggle="tooltip"
                                           data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>

                                        <a href="#quick-view-popup" class="btn bdr" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <!--action-->
                                </div>
                            </li>
                            <!--product-->

                            <li class="product new flip">
                                <figure class="img-animi">
                                    <div class="tag new">new</div>

                                    <a href="#"><img src="{{asset('assets/images/product2.jpg')}}" alt=""></a>
                                    <a href="#" class="back"><img src="{{asset('assets/images/product6.jpg')}}" alt=""></a>
                                </figure>

                                <div class="pdt-right">
                                    <div class="pdt-cat bm-5">
                                        <span>Mens fashion</span>
                                    </div>

                                    <div class="flx-element bm-10">
                                        <h3 class="bm-0"><a href="#">Mens Shirt</a></h3>

                                        <div class="star-rate">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star-half-full"></i>
                                        </div>
                                    </div>
                                    <!--flex element-->

                                    <div class="disc bm-20">
                                        Globally expedite real-time best practices whereas collaborative catalysts for
                                        change. Efficiently extend enterprise imperatives after resource-leveling
                                        infomediaries.
                                    </div>

                                    <div class="price bm-25">
                                        <del>$189.00</del>
                                        <ins>$189.00</ins>
                                    </div>

                                    <div class="btn-wrap">
                                        <a href="#" class="btn add-to-cart pri-bg" data-toggle="tooltip"
                                           data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i> ADD TO
                                            CART</a>
                                        <a href="#" class="btn add-to-favorite bdr" data-toggle="tooltip"
                                           data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>

                                        <a href="#quick-view-popup" class="btn bdr" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <!--action-->
                                </div>
                            </li>
                            <!--product-->

                            <li class="product flip">
                                <figure class="img-animi">
                                    <a href="#"><img src="{{asset('assets/images/product3.jpg')}}" alt=""></a>
                                    <a href="#" class="back"><img src="{{asset('assets/images/product1.jpg')}}" alt=""></a>
                                </figure>

                                <div class="pdt-right">
                                    <div class="pdt-cat bm-5">
                                        <span>Ladies fashion</span>
                                    </div>

                                    <div class="flx-element bm-10">
                                        <h3 class="bm-0"><a href="#">Ladies black top</a></h3>

                                        <div class="star-rate">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star-half-full"></i>
                                        </div>
                                    </div>
                                    <!--flex element-->

                                    <div class="disc bm-20">
                                        Globally expedite real-time best practices whereas collaborative catalysts for
                                        change. Efficiently extend enterprise imperatives after resource-leveling
                                        infomediaries.
                                    </div>

                                    <div class="price bm-25">
                                        <del>$189.00</del>
                                        <ins>$189.00</ins>
                                    </div>

                                    <div class="btn-wrap">
                                        <a href="#" class="btn add-to-cart pri-bg" data-toggle="tooltip"
                                           data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i> ADD TO
                                            CART</a>
                                        <a href="#" class="btn add-to-favorite bdr" data-toggle="tooltip"
                                           data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>

                                        <a href="#quick-view-popup" class="btn bdr" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <!--action-->
                                </div>
                            </li>
                            <!--product-->

                            <li class="product flip">
                                <figure class="img-animi">
                                    <a href="#"><img src="{{asset('assets/images/product7.jpg')}}" alt=""></a>
                                </figure>

                                <div class="pdt-right">
                                    <div class="pdt-cat bm-5">
                                        <span>Ladies fashion</span>
                                    </div>

                                    <div class="flx-element bm-10">
                                        <h3 class="bm-0"><a href="#">Ladies full sleeves</a></h3>

                                        <div class="star-rate">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star-half-full"></i>
                                        </div>
                                    </div>
                                    <!--flex element-->

                                    <div class="disc bm-20">
                                        Globally expedite real-time best practices whereas collaborative catalysts for
                                        change. Efficiently extend enterprise imperatives after resource-leveling
                                        infomediaries.
                                    </div>

                                    <div class="price bm-25">
                                        <del>$189.00</del>
                                        <ins>$189.00</ins>
                                    </div>

                                    <div class="btn-wrap">
                                        <a href="#" class="btn add-to-cart pri-bg" data-toggle="tooltip"
                                           data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i> ADD TO
                                            CART</a>
                                        <a href="#" class="btn add-to-favorite bdr" data-toggle="tooltip"
                                           data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>

                                        <a href="#quick-view-popup" class="btn bdr" data-toggle="tooltip"
                                           data-placement="top" data-rel="quickview-popup" title="Quick View"><i
                                                class="pe-7s-look"></i></a>
                                    </div>
                                    <!--action-->
                                </div>
                            </li>
                            <!--product-->
                        </ul>
                    </div>
                    <!--product wrap-->

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
                    <!--bottom sorting-->
                </div>
                <!--left-->

                <div class="col-md-3 col-sm-3 sidebar">
                    <div class="sidebar_widget">
                        <div class="widget_title"><h4>Categories</h4></div>

                        <ul class="detail-cat">
                            <li><a href="#">Clothings <span class="item-count">[1200]</span></a></li>
                            <li><a href="#">Accessories <span class="item-count">[590]</span></a></li>
                            <li><a href="#">Man <span class="item-count">[125]</span></a></li>
                            <li><a href="#">Woman <span class="item-count">[248]</span></a></li>
                            <li><a href="#">New arrivals <span class="item-count">[258]</span></a>
                            <li><a href="#">Shoes <span class="item-count">[587]</span></a></li>
                            <li><a href="#">Socks <span class="item-count">[35]</span></a></li>
                            <li><a href="#">Jacket <span class="item-count">[300]</span></a></li>
                        </ul>
                    </div>
                    <!--category-->

                    <div class="sidebar_widget price-filter">
                        <div class="widget_title"><h4>Filter by price</h4></div>

                        <div id="price-range"></div>
                        <input type="hidden" id="amount1">
                        <input type="hidden" id="amount2">

                        <div class="range-bottom">
                            <div id="amount"></div>
                            <button type="submit" class="btn text-uppercase">Filter</button>
                        </div>
                        <!--range bottom-->
                    </div>
                    <!--price range-->

                    <div class="sidebar_widget color-filter">
                        <div class="widget_title"><h4>Filter by color</h4></div>

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

                    <div class="sidebar_widget size-filter">
                        <div class="widget_title"><h4>Filter by size</h4></div>

                        <div class="size-filter">
                            <form>
                                <div class="check-wrap">
                                    <input type="checkbox">
                                    <label>L (20)</label>
                                </div>
                                <!--red-->

                                <div class="check-wrap">
                                    <input type="checkbox">
                                    <label>M (80)</label>
                                </div>
                                <!--black-->

                                <div class="check-wrap">
                                    <input type="checkbox">
                                    <label>S (10)</label>
                                </div>
                                <!--yellow-->

                                <div class="check-wrap">
                                    <input type="checkbox">
                                    <label>X (100)</label>
                                </div>
                                <!--blue-->

                                <div class="check-wrap">
                                    <input type="checkbox">
                                    <label>XL (70)</label>
                                </div>
                                <!--blue-->

                                <div class="check-wrap">
                                    <input type="checkbox">
                                    <label>XS (50)</label>
                                </div>
                                <!--blue-->
                            </form>
                        </div>
                    </div>
                    <!--size filter-->

                    <div class="sidebar_widget">
                        <figure class="img-animi">
                            <a href="#">
                                <img src="{{asset('assets/images/shop-sidebar.jpg')}}" alt="">
                            </a>
                        </figure>
                    </div>
                </div>
                <!--sidebar-->
            </div>
        </div>
    </main>
    <!--main-->
@endsection
