@extends('shoping.layouts.app')
@section('title', 'Contact')
@section('content')

    <div class="pg-header jarallax overlay parlx-pad sec-mar">
        <img class="jarallax-img" src="{{asset('assets/images/contact-banner.jpg')}}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2>Contact </h2>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--page title-->

    <main class="main">
        <div class="container">
            <div class="row sec-mar contact-form">
                <div class="col-md-6 col-sm-6 left-block">
                    <div class="title bm-30"><h2>Make an enquiry</h2></div>
                    <form>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" placeholder="First name">
                            </div>
                            <!--name-->

                            <div class="form-group col-sm-6">
                                <input type="text" placeholder="Last name">
                            </div>
                            <!--last name-->

                            <div class="form-group col-sm-6">
                                <input type="email" placeholder="Email">
                            </div>
                            <!--name-->

                            <div class="form-group col-sm-6">
                                <input type="tel" placeholder="Phone">
                            </div>
                            <!--last name-->

                            <div class="form-group col-sm-12">
                                <textarea placeholder="Message"></textarea>
                            </div>
                            <!--message-->

                            <div class="form-group col-sm-12">
                                <input type="submit" value="SUBMIT">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="title bm-20"><h2>Company information</h2></div>
                    <div class="content-hold bm-40">
                        <p>
                            Intrinsicly predominate impactful benefits rather than optimal internal or "organic"
                            sources. Authoritatively target tactical markets for standards compliant "outside the box".
                        </p>
                    </div>

                    <div class="contact-bottom ">
                        <div class="wrap style-2">
                            <div class="info">
                                <div class="icon-wrap">
                                    <span class="icon radius-circle pri-bg text-white"><i
                                            class="pe-7s-phone"></i></span>
                                </div>

                                <div>
                                    <p>+01 234 5685</p>
                                    <p>+01 234 5685</p>
                                </div>
                            </div>

                            <div class="info">
                                <div class="icon-wrap">
                                    <span class="icon radius-circle pri-bg text-white"><i class="pe-7s-mail"></i></span>
                                </div>

                                <div>
                                    <p>info@evostore.com</p>
                                    <p>sales@evostore.com</p>
                                </div>
                            </div>

                            <div class="info">
                                <div class="icon-wrap">
                                    <span class="icon radius-circle pri-bg text-white"><i class="pe-7s-map-marker"></i></span>
                                </div>

                                <div>
                                    <p>Progressively iterate seamless technology </p>
                                </div>
                            </div>

                            <div class="info">
                                <div class="icon-wrap">
                                    <span class="icon radius-circle pri-bg text-white"><i
                                            class="pe-7s-clock"></i></span>
                                </div>

                                <div>
                                    <p>
                                        Mon-Sat : 7.00 - 20.00 <br>
                                        Sun : OFF
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--form-->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="map-hold sec-mar">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424143.279121209!2d150.65108987709291!3d-33.8479254539181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2snp!4v1513605431022"
                            width="600" height="450" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--enquiry form-->
    </main>
    <!--main-->


@endsection
