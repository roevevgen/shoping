@extends('layouts.app')
@section('title', 'Category')
@section('content')
    <div class="pg-header jarallax overlay parlx-pad sec-mar">
        <img class="jarallax-img" src="{{asset('assets/images/page-title.jpg')}}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2>Category</h2>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Category</li>
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
                        @include('shoping.includes.categories.filter')
                    </div>
                    <!--sorting outer-->

                    <div class="product-wrap lst-vw product-listing">
                        @include('shoping.includes.categories.products')
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
                    @include('shoping.includes.categories.sidebar')

                </div>
                <!--sidebar-->
            </div>
        </div>
    </main>
    <!--main-->
@endsection
