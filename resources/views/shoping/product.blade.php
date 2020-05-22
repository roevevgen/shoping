@extends('shoping.layouts.app')
@section('content')
    <main class="main single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Shop</li>
                    </ul>
                </div>
            </div>
            <!--breadcrumb-->

            <div class="row product sec-mar">
                <div class="col-md-8 col-sm-8 image pdt-single-slider">
                    <ul class="pdt-thumb">
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
                    </ul>

                    <ul class="pdt-single">
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
                    </ul>
                </div>
                <!--slider-->

                <div class="col-md-4 col-sm-4 summary ">
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

                        <div class="disc bm-25">
                            Globally expedite real-time best practices whereas collaborative catalysts for change.
                            Efficiently extend enterprise imperatives
                        </div>
                        <!--disc-->

                        <div class="flx-element bm-25">
                            <div><strong>Availability :</strong> 10
                                <span class="text-green"><i class="fa fa-check-square"></i> Stock</span>
                            </div>
                            <div><strong>SKU :</strong> BLFG01</div>
                        </div>
                        <!--flex-->

                        <div class="color-option bm-25">
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

                        <div class="size-option bm-30">
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

                        <div class="btn-wrap bm-30">
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
            <!--product-->

            <div class="row product sec-mar">
                <div class="col-md-12 col-sm-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs sec-font" role="tablist">
                        <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                        <li><a href="#information" data-toggle="tab">Information</a></li>
                        <li><a href="#reviews" data-toggle="tab">Reviews</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="description">
                            <p>
                                Compellingly formulate customized functionalities vis-a-vis orthogonal leadership
                                skills. Holisticly reconceptualize go forward interfaces and tactical action items.
                                Enthusiastically provide access to user friendly markets rather than equity invested
                                technologies. Appropriately coordinate enterprise-wide imperatives for empowered
                                solutions. Collaboratively monetize state of the art deliverables rather than
                                transparent total linkage.
                            </p>

                            <p>
                                Continually deploy revolutionary methods of empowerment before fully tested
                                opportunities. Progressively exploit client-based services with team driven methods of
                                empowerment. Energistically fashion real-time catalysts for change through goal-oriented
                                materials. Credibly negotiate just in time e-services through functional opportunities.
                                Appropriately maximize multidisciplinary best practices without principle-centered core
                                competencies.
                            </p>
                        </div>
                        <!--description-->

                        <div role="tabpanel" class="tab-pane" id="information">
                            Information
                        </div>
                        <!--information-->

                        <div role="tabpanel" class="tab-pane" id="reviews">
                            Reviews
                        </div>
                        <!--reviews-->
                    </div>
                </div>
            </div>
            <!--descripton tab-->
        </div>
        <!--container-->

        <div class="trending">
            <div class="bg-soft-gray sec-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="title mid-sep">
                                <h2>Related Products</h2>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 product-wrap product-slide-wrap">
                            <ul class="products product-slider">
                                <li class="product">
                                    <figure class="img-animi">
                                        <div class="actions trans">
                                            <a class="link-layer" href="#">&nbsp;</a>

                                            <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                               data-placement="top" title="Add to Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="actn add-to-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                            <a href="#" class="actn" data-toggle="tooltip" data-placement="top"
                                               title="Quick View"><i class="pe-7s-look"></i></a>
                                        </div>
                                        <a href="#"><img src="{{asset('assets/images/product1.jpg')}}" alt=""></a>
                                    </figure>

                                    <div class="price-wrap">
                                        <div class="price">
                                            <del>$189.00</del>
                                            <ins>$189.00</ins>
                                        </div>
                                        <div class="star-rate">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star-half-full"></i>
                                        </div>
                                    </div>

                                    <h4><a href="#">Ladies black full sleeves</a></h4>
                                </li>
                                <!--product-->

                                <li class="product">
                                    <figure class="img-animi">
                                        <div class="actions trans">
                                            <a class="link-layer" href="#">&nbsp;</a>

                                            <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                               data-placement="top" title="Add to Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="actn add-to-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                            <a href="#" class="actn" data-toggle="tooltip" data-placement="top"
                                               title="Quick View"><i class="pe-7s-look"></i></a>
                                        </div>
                                        <a href="#"><img src="{{asset('assets/images/product2.jpg')}}" alt=""></a>
                                    </figure>

                                    <div class="price-wrap">
                                        <div class="price">
                                            <ins>$109.00</ins>
                                        </div>
                                        <div class="star-rate">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star-half-full"></i>
                                        </div>
                                    </div>

                                    <h4><a href="#">Mens Shirt</a></h4>
                                </li>
                                <!--product-->

                                <li class="product">
                                    <figure class="img-animi">
                                        <div class="actions trans">
                                            <a class="link-layer" href="#">&nbsp;</a>

                                            <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                               data-placement="top" title="Add to Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="actn add-to-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                            <a href="#" class="actn" data-toggle="tooltip" data-placement="top"
                                               title="Quick View"><i class="pe-7s-look"></i></a>
                                        </div>
                                        <a href="#"><img src="{{asset('assets/images/product3.jpg')}}" alt=""></a>
                                    </figure>

                                    <div class="price-wrap">
                                        <div class="price">
                                            <del>$80.00</del>
                                            <ins>$75.00</ins>
                                        </div>
                                        <div class="star-rate">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star-half-full"></i>
                                        </div>
                                    </div>

                                    <h4><a href="#">Ladies black top</a></h4>
                                </li>
                                <!--product-->

                                <li class="product">
                                    <figure class="img-animi">
                                        <div class="actions trans">
                                            <a class="link-layer" href="#">&nbsp;</a>

                                            <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                               data-placement="top" title="Add to Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="actn add-to-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                            <a href="#" class="actn" data-toggle="tooltip" data-placement="top"
                                               title="Quick View"><i class="pe-7s-look"></i></a>
                                        </div>
                                        <a href="#"><img src="{{asset('assets/images/product4.jpg')}}" alt=""></a>
                                    </figure>

                                    <div class="price-wrap">
                                        <div class="price">
                                            <del>$99.00</del>
                                            <ins>$95.00</ins>
                                        </div>
                                        <div class="star-rate">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star-half-full"></i>
                                        </div>
                                    </div>

                                    <h4><a href="#">Ladies blue jeans</a></h4>
                                </li>
                                <!--product-->

                                <li class="product">
                                    <figure class="img-animi">
                                        <div class="actions trans">
                                            <a class="link-layer" href="#">&nbsp;</a>

                                            <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                               data-placement="top" title="Add to Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="actn add-to-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                            <a href="#" class="actn" data-toggle="tooltip" data-placement="top"
                                               title="Quick View"><i class="pe-7s-look"></i></a>
                                        </div>
                                        <a href="#"><img src="{{asset('assets/images/product5.jpg')}}" alt=""></a>
                                    </figure>

                                    <div class="price-wrap">
                                        <div class="price">
                                            <ins>$109.00</ins>
                                        </div>
                                        <div class="star-rate">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star-half-full"></i>
                                        </div>
                                    </div>

                                    <h4><a href="#">Mens Shirt</a></h4>
                                </li>
                                <!--product-->

                                <li class="product">
                                    <figure class="img-animi">
                                        <div class="actions trans">
                                            <a class="link-layer" href="#">&nbsp;</a>

                                            <a href="#" class="actn add-to-favorite" data-toggle="tooltip"
                                               data-placement="top" title="Add to Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="actn add-to-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                            <a href="#" class="actn" data-toggle="tooltip" data-placement="top"
                                               title="Quick View"><i class="pe-7s-look"></i></a>
                                        </div>
                                        <a href="#"><img src="{{asset('assets/images/product6.jpg')}}" alt=""></a>
                                    </figure>

                                    <div class="price-wrap">
                                        <div class="price">
                                            <del>$80.00</del>
                                            <ins>$75.00</ins>
                                        </div>
                                        <div class="star-rate">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star-half-full"></i>
                                        </div>
                                    </div>

                                    <h4><a href="#">Ladies black top</a></h4>
                                </li>
                                <!--product-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--tranding-->
    </main>
@endsection

