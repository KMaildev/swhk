@extends('layouts.main')
@section('content')
    <section class="page-about section-padding">
        <div class="shape1 d-none d-lg-block float-bob-y">
            <img src="{{ asset('assets/images/shape/shape1.png') }}" alt="">
        </div>
        <div class="shape2 d-none d-lg-block float-bob-y">
            <img src="{{ asset('assets/images/shape/shape2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="image">
                        <img src="assets/images/about/01.jpg" alt="image">
                        <div class="sm-image d-none d-sm-block">
                            <img src="{{ asset('assets/images/about/02.png') }}" alt="image">
                        </div>
                        <div class="video-btn-wrp d-none d-sm-block">
                            <div class="">
                                <a class="video-popup secondary-bg" href=""><i class=""></i></a>
                            </div>
                        </div>
                        <div class="info d-none d-sm-block">
                            <h2 style="color:yellowgreen"><span class="count" style="color:yellowgreen">25</span>+</h2>
                            <span>Years Experience</span>
                        </div>
                        <div class="stroke-text d-none d-sm-block" style="color:yellowgreen">
                            <h2>since 1980</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-item">
                        <div class="section-header mb-5">
                            <h5 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">CONSTRUCTION
                                COMPANY</h5>
                            <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">We Are Here to
                                Increase Your Knowledge With Experience</h2>
                            <p class="wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".9s">We have
                                facility to produce advance work various industrial applications based on
                                specially developed technol-ogy. We
                                are also ready to developement by according to users changing.</p>
                        </div>
                        <div class="row g-4">
                            <div class="col-6 wow fadeInLeft" data-wow-duration="1.6s" data-wow-delay=".6s">
                                <ul>
                                    <li><i class="fa-solid mb-4 me-2  fa-gear" style="color:yellowgreen"></i> Best
                                        Quality
                                        Support
                                    </li>
                                    <li><i class="fa-solid me-2 primary-color fa-gear"></i> Professional
                                        Expertise
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 wow fadeInRight" data-wow-duration="1.6s" data-wow-delay=".6s">
                                <ul>
                                    <li><i class="fa-solid mb-4 me-2 primary-color fa-gear"></i> 100%
                                        Quality Design
                                    </li>
                                    <li><i class="fa-solid me-2 primary-color fa-gear"></i> 24/7 On Time
                                        Support
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="about_info d-flex align-items-center pt-65 wow fadeInUp" data-wow-duration="1.9s"
                            data-wow-delay=".9s">
                            <a href="" class="btn-one" style="background-color: yellowgreen;"><span>Contact Us</span>
                                <i class="fa-solid fa-arrow-right"></i></a>
                            <span class="bor-left d-none d-sm-block mx-4"></span>
                            <div class="info d-flex flex-wrap align-items-center">
                                <i class="fa-solid fa-phone-volume ring-animation" style="color:yellowgreen"></i>
                                <div class="about_info_con">
                                    <span class="d-block text-capitalize">call any time</span>
                                    <a href="tel:+912659302003">+91 2659 302 003</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="choose bg-image section-padding">
        <div class="shape d-none d-xl-block float-bob-x">
            <img src="assets/images/choose/shape.png" alt="">
        </div>
        <div class="container">
            <div class="row mb-5 mb-lg-0 ">
                <div class="col-lg-6">
                    <div class="section-header">
                        <h5 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">CORE FEATURES</h5>
                        <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">Why Choose Us</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".9s">We have
                        facility to produce advance work various industrial applications based on
                        specially developed technol-ogy. We
                        are also ready to developement by according to users changing.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="item">
                        <img src="assets/images/icon/choose1.png" alt="icon">
                        <h4>Expert Teams</h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="item">
                        <img src="assets/images/icon/choose2.png" alt="icon">
                        <h4>Commit to Clients</h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="item">
                        <img src="assets/images/icon/choose3.png" alt="icon">
                        <h4>Maintenance & Renovation</h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="item">
                        <img src="assets/images/icon/choose4.png" alt="icon">
                        <h4>Eco Power Technologies</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
