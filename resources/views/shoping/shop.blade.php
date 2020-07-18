@extends('layouts.app')
@section('title', 'Shop')
@section('content')
    <div class="pg-header jarallax overlay parlx-pad sec-mar">
        <img class="jarallax-img" src="{{asset('assets/images/page-title.jpg')}}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
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
                    @include('shoping.includes.shop.filter')
                </div>
                <!--filter toggle-->
            </div>
            <!--sorting outer-->

            <div class="sec-mar">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 product-wrap product-listing">
                        @include('shoping.includes.shop.products')
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
