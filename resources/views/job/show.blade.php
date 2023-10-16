@extends('layouts.main')
@section('title', 'Jobs')
@section('content')

    <section class="product secondary-bg section-padding">
        <div class="map">
            <img src="{{ asset('assets/images/product/map.png') }}" alt="">
        </div>
        <div class="container">
            <div class="section-header text-center position-relative">
                <h5 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                    Diverse Industry Placement
                </h5>
                <h2 class="text-white wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">
                    Our recruitment experience covers <br> a wide range of industries:
                </h2>
            </div>
            <div class="swiper product-slider">
                <div class="swiper-wrapper">
                    @foreach ($countries as $c)
                        <div class="swiper-slide">
                            <div class="item">
                                <img src="{{ $c->photo }}" alt=""
                                    style="width: 100%; height: 200px; background-size: top; object-fit: cover;" />
                                <div class="content">
                                    <h4>
                                        <a href="{{ route('job.show', $c->id) }}">
                                            {{ $c->country ?? '' }}
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="arry-prev product-arry-prev"><i class="ti-angle-left"></i></button>
                <button class="arry-next product-arry-next"><i class="ti-angle-right"></i></button>
            </div>
        </div>
    </section>


    <section class="page-service section-padding" style="padding: 30px 0px;">
        <div class="container">
            <div class="row d-flex justify-content-center">

                <div class="col-md-9 col-lg-9 col-sm-12">
                    <div class="section-header">
                        <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s" style="color: black;">
                            <center>
                                Jobs Available In
                                <span>
                                    {{ $country_detail->country ?? '' }}
                                </span>
                            </center>
                        </h2>
                        <p style="text-align: center; color: black; font-size: 18px;" class="wow fadeInUp"
                            data-wow-duration="1.9s" data-wow-delay=".9s">
                            We are one of the best oversea employment agency in myanmar.
                            <br>
                            {{ $country_detail->description ?? '' }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                @foreach ($jobs as $job)
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                        <div class="item">
                            <h3 style="font-size: 20px;">
                                <a href="javascript::void(0)">
                                    {{ $job->title ?? '' }}
                                </a>
                            </h3>
                            <a href="javascript::void(0)" class="image d-block">
                                <img src="{{ $job->photo }}" alt=""
                                    style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                                <div class="gaps-right d-none d-sm-block float-bob-x">
                                    <img src="{{ asset('assets/images/shape/gaps-primary.png') }}" alt="">
                                </div>
                                <div class="gaps-left d-none d-sm-block float-bob-x">
                                    <img src="{{ asset('assets/images/shape/gaps-primary.png') }}" alt="">
                                </div>
                            </a>
                            <a class="btn-three" href="javascript::void(0)">
                                Submit Resume
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
