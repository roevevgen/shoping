@extends('layouts.app')
@section('title', 'Product')
@section('content')
    <main class="main single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/category">Category</a></li>
                        <li><a href="/category/list">List</a></li>
                        <li class="active">Product</li>
                    </ul>
                </div>
            </div>
            <!--breadcrumb-->

            @include('shoping.includes.product.products')
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
            @include('shoping.includes.product.trending')
        </div>
        <!--tranding-->
    </main>
@endsection

