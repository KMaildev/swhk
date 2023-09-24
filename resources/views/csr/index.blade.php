@extends('layouts.main')
@section('title', 'Activities')
@section('content')

    <section class="page-banner bg-image section-padding" style="background-image: url({{ asset('data/Bagan_banner.jpg') }})">
        <div class="gaps-right d-none d-sm-block float-bob-x">
            <img src="{{ asset('assets/images/shape/gaps-primary.png') }}" alt="">
        </div>
        <div class="gaps-left d-none d-sm-block float-bob-x">
            <img src="{{ asset('assets/images/shape/gaps-primary.png') }}" alt="">
        </div>
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                CSR
            </h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">
                <a href="{{ route('home') }}">Home :</a>
                <span>
                    Certificates and Recognitions
                </span>
            </div>
        </div>
    </section>



    <section class="who-we-are-page"
        style="
        box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
        background-color: #08AC61;
        background: -webkit-gradient(linear, left top, left bottom, from(#08AC61), to(#FBD313));
        background: -webkit-linear-gradient(top, #08AC61, #FBD313);
        background: -moz-linear-gradient(top, #08AC61, #FBD313);
        background: -ms-linear-gradient(top, #08AC61, #FBD313);
        background: -o-linear-gradient(top, #08AC61, #FBD313); 
    ">
        <div class="container project section-padding">

            <div class="row d-flex justify-content-center">
                <div class="col-md-9 col-lg-9 col-sm-12">
                    <div class="section-header">
                        <h5 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                            CSR
                        </h5>
                        <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s" style="color: white;">
                            <center>
                                Certificates and Recognitions
                            </center>
                        </h2>
                        <p style="text-align: center; color: white; font-size: 18px;" class="wow fadeInUp"
                            data-wow-duration="1.9s" data-wow-delay=".9s">
                            At Shwe Wutt Hmone Kha Co.,Ltd, we believe in the power of responsible business practices to
                            make a
                            positive impact on society and the communities in which we operate. Our commitment to Corporate
                            Social Responsibility (CSR) is deeply ingrained in our core values and is integral to every
                            aspect
                            of our operations.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center project-wrp">

                @foreach ($csrs as $csr)
                    @php
                        $images = explode(',', $csr->photo);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                            <div class="p-a30 m-b30 radius-sm bg-gray clearfix"
                                style="box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">
                                <img src="{{ $image }}" alt="" data-enlargeable=""
                                    style="object-position: top; width: 100%; height: 450px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                                    class="img-enlargeable">
                            </div>
                        </div>
                    @endforeach
                @endforeach

            </div>
        </div>
    </section>

@endsection
