@extends('layouts.main')
@section('title', 'Welcome')
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

                        <img src="{{ asset('data/sdagon.jpg') }}" alt="image" style="width: 100%;">
                        <div class="sm-image d-none d-sm-block">
                            <img src="{{ asset('data/logo_png.png') }}" alt="image">
                        </div>

                        <div class="info d-none d-sm-block">
                            <h2><span class="count">5</span>+</h2>
                            <span>Years Experience</span>
                        </div>
                        <div class="stroke-text d-none d-sm-block">
                            <h2>since 2018</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="right-item">
                        <div class="section-header mb-5">


                            {{-- <h2 style="font-size: 30px;" class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">
                            Shwe Wutt Hmone Kha Co.,Lt
                        </h2> --}}

                            <h5 style="padding-bottom: 5px;" class="wow fadeInUp" data-wow-duration="1.3s"
                                data-wow-delay=".3s">
                                Shwe Wutt Hmone Kha Co.,Ltd
                            </h5>

                            <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">
                                Succeed with us
                            </h2>

                            <h5 style="padding-top: 15px;" class="wow fadeInUp" data-wow-duration="1.3s"
                                data-wow-delay=".3s">
                                “Empowering Futures, Connecting Worlds”
                            </h5>

                            <br>
                            <h5 style="color: black;">
                                Introduction
                            </h5>
                            <p style="text-align: justify; margin-top: 0px;" class="wow fadeInUp" data-wow-duration="1.9s"
                                data-wow-delay=".9s">
                                Shwe Wutt Hmone Kha Co., Ltd (Overseas Myanmar Manpower Employment Agency) was
                                founded in 2018, emerging as a distinguished and expertly managed international manpower
                                recruitment consultant. With a core focus on Thailand, Malaysia, and Japan job markets, we
                                deliver premium recruitment services to diverse industries. Drawing from our extensive
                                recruitment experience, we cater to various employment levels as per our clients' demands
                                across
                                multiple sectors. These include poultry processing, food and beverages production, wood
                                processing, plastics and rubber manufacturing, leather production, construction, hospitality
                                services, agriculture, and other vital sectors.
                            </p>
                        </div>

                        <div class="about_info d-flex align-items-center  wow fadeInUp" data-wow-duration="1.9s"
                            data-wow-delay=".9s">

                            <a href="{{ route('contact.index') }}" class="btn-one"><span>Contact Us</span> <i
                                    class="fa-solid fa-arrow-right"></i></a>
                            <span class="bor-left d-none d-sm-block mx-4"></span>

                            <div class="info d-flex flex-wrap align-items-center">
                                <i class="fa-solid fa-phone-volume ring-animation"></i>
                                <div class="about_info_con">
                                    <span class="d-block text-capitalize">call any time</span>
                                    <a href="tel:+959 4258 47416">+959 4258 47416</a>
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
            <img src="{{ asset('assets/images/choose/shape.png') }}" alt="">
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
                    <p class="wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".9s">
                        We consider our clients’ tasks as one
                        of our own, therefore we doing our best to satisfy all expectations.
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="item">
                        <img src="{{ asset('assets/images/icon/choose1.png') }}" alt="icon">
                        <h4>Expert Teams</h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="item">
                        <img src="{{ asset('assets/images/icon/choose2.png') }}" alt="icon">
                        <h4>Commit to Clients</h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="item">
                        <img src="{{ asset('data/lightbulb.png') }}" alt="icon" style="width: 40%;">
                        <h4>Innovation</h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="item">
                        <img src="{{ asset('data/reputation-management.png') }}" alt="icon" style="width: 40%;">
                        <h4>Reputation</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="story section-padding sub-bg">
        <div class="container">
            <div class="section-header text-center position-relative">
                <h5 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">our case study</h5>
                <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">Cour recent work
                </h2>
            </div>
            <div class="wrp">
                <div class="line d-none d-lg-block"></div>
                <div class="main-item pb-65">
                    <div class="row g-5 align-items-center ">
                        <div class="col-lg-6 d-flex justify-content-end">
                            <img style="width: 40%;" src="{{ asset('data/monitoring.png') }}" alt="image">
                        </div>
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                                    <span class="primary-color pb-2">
                                        Shwe Wutt Hmone Kha Co.,Ltd
                                    </span>
                                    <h3 class="text-capitalize">
                                        <a href="javascript::void(0)">
                                            Our Vision
                                        </a>
                                    </h3>
                                    <p class="pt-4">
                                        To provide skillful Myanmar workers to all over the world according to the
                                        international labour
                                        standards and to be the most successful firm.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-item pb-65">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                                    <span class="primary-color left-span pb-2">
                                        Shwe Wutt Hmone Kha Co.,Ltd
                                    </span>
                                    <h3 class="text-capitalize">
                                        <a href="javascript::void(0)">
                                            Our mission
                                        </a>
                                    </h3>
                                    <p class="pt-4">
                                        To establish a seamless connection between skilled Myanmar workers and world-class
                                        companies situated in all over the world. Through this collaboration, we seek to
                                        cultivate mutual
                                        growth and prosperity for both parties involved.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <a href="javascript::void()" class="image d-block">
                                <img style="width: 40%;" src="{{ asset('data/target.png') }}" alt="image">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="main-item">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 d-flex justify-content-end">
                            <img style="width: 40%;" src="{{ asset('data/market.png') }}" alt="image">
                        </div>
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                                    <span class="primary-color pb-2">
                                        Shwe Wutt Hmone Kha Co.,Ltd
                                    </span>
                                    <h3 class="text-capitalize">
                                        <a href="javascript::void(0)">
                                            Values
                                        </a>
                                    </h3>
                                    <p class="pt-4">
                                        Our values underscore our commitment to excellence
                                    </p>

                                    <div class="row g-4 py-3">
                                        <div class="col-6 wow fadeInLeft" data-wow-duration="1.6s" data-wow-delay=".6s">
                                            <ul>
                                                <li><i class="fa-solid mb-4 me-2 primary-color fa-gear"></i>
                                                    Safety and Security
                                                </li>
                                                <li><i class="fa-solid  mb-4 me-2 primary-color fa-gear"></i>
                                                    Customer Priority
                                                </li>

                                                <li><i class="fa-solid me-2 primary-color fa-gear"></i>
                                                    Training Contribution
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6 wow fadeInRight" data-wow-duration="1.6s" data-wow-delay=".6s">
                                            <ul>
                                                <li><i class="fa-solid mb-4 me-2 primary-color fa-gear"></i>
                                                    Affordability
                                                </li>
                                                <li><i class="fa-solid me-2 primary-color fa-gear"></i>
                                                    Service Excellence
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="video-area bg-2 bg-image section-padding" style="background-image: url({{ asset('data/obj.jpg') }})">
        <div class="container">
            <h2 class="pt-65 wow fadeInDown" data-wow-duration="1.9s" data-wow-delay=".3s">
                Objectives
            </h2>

            <p style="color: white; font-size: 18px;">
                Our central objective is to bridge the gap between Myanmar's skilled workforce and the global
                business landscape. By sourcing and deploying highly skilled individuals, we aim to fulfill the
                employment needs of various industries while actively combating unemployment challenges
                within our country.
            </p>
        </div>
    </section>




    <section class="blog-three section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h5 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                    Shwe Wutt Hmone Kha Co.,Ltd
                </h5>
                <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">
                    Our Services
                </h2>
            </div>

            <div class="row g-4">

                <div class="col-md-6 col-xl-4 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('data/passport-check-send.webp') }}" alt="image"
                                style="width: 100%; height: 360px; background-size: top; object-fit: cover;">
                            <div class="content">
                                <h3>
                                    Passport Application
                                </h3>
                            </div>
                        </div>
                        <div class="content-up">
                            <h3>
                                <a href="{{ route('service.index') }}">
                                    Passport Application
                                </a>
                            </h3>
                            <p>
                                "Get your passport with ease through our dedicated passport application services in Myanmar.
                                We streamline the process, ensuring a hassle-free experience for our overseas employment
                                candidates."
                            </p>
                            <a href="{{ route('service.index') }}" class="btn-two">
                                More Detail
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-xl-4 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('data/visa.webp') }}" alt="image"
                                style="width: 100%; height: 360px; background-size: top; object-fit: cover;">
                            <div class="content">
                                <h3>
                                    Visa Registration
                                </h3>
                            </div>
                        </div>
                        <div class="content-up">
                            <h3>
                                <a href="{{ route('service.index') }}">
                                    Visa Registration
                                </a>
                            </h3>
                            <p>
                                "Count on us for seamless visa registration services in Myanmar. We simplify the process,
                                ensuring our overseas employment candidates are well-prepared for their international
                                assignments."
                            </p>
                            <a href="{{ route('service.index') }}" class="btn-two">
                                More Detail
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-xl-4 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('data/air4.webp') }}" alt="image"
                                style="width: 100%; height: 360px; background-size: top; object-fit: cover;">
                            <div class="content">
                                <h3>
                                    Air Ticket Services
                                </h3>
                            </div>
                        </div>
                        <div class="content-up">
                            <h3>
                                <a href="{{ route('service.index') }}">
                                    Air Ticket Services
                                </a>
                            </h3>
                            <p>
                                "When it comes to air ticket services, we've got you covered. At Shwe Wutt Hmone Kha
                                Co.,Ltd, we offer seamless and hassle-free booking solutions for all your travel needs. Our
                                experienced team is dedicated to finding the best flight options, ensuring convenience and
                                affordability for your journey."
                            </p>
                            <a href="{{ route('service.index') }}" class="btn-two">
                                More Detail
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="story section-padding secondary-bg">
        <div class="map">
            <img src="assets/images/story/map.png" alt="">
        </div>
        <div class="container">
            <div class="section-header text-center position-relative">
                <h5 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">our story</h5>
                <h2 class="wow fadeInUp text-white" data-wow-duration="1.6s" data-wow-delay=".6s">Company
                    history
                </h2>
            </div>
            <div class="wrp">
                <div class="line d-none d-lg-block"></div>
                <div class="main-item pb-65">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="image">
                                <img src="{{ asset('data/h1.png') }}" alt="image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="title">
                                    <span class="primary-color pb-2">2018</span>
                                    <h3 class="text-white text-capitalize">start the company story</h3>
                                    <p class="text-white pt-4" style="text-align: justify">
                                        Shwe Wutt Hmone Kha Co., Ltd (Overseas Myanmar Manpower Employment Agency)
                                        embarked on its journey in 2018 with a vision to revolutionize the recruitment
                                        landscape.
                                        Founded by Mrs.Ei Ei Khaing, our company was established with a commitment to
                                        connect
                                        skilled Myanmar workers with international opportunities. Over the years, we have
                                        grown from a
                                        promising startup to a reputable name in the industry, driven by our unwavering
                                        dedication to
                                        professionalism, integrity, and client satisfaction. Milestone by milestone, we have
                                        achieved
                                        significant success, serving as a bridge between skilled talent and global
                                        enterprises.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-item pb-65">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="title">
                                    <span class="primary-color left-span pb-2">2019 - 2020</span>
                                    <h3 class="text-white text-capitalize">
                                        Sent to Thailand
                                    </h3>
                                    <p class="text-white pt-4">
                                        More than 2500 Myanmar MOU workers sent to Thailand
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image">
                                <img src="{{ asset('data/thai.jpg') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-item">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="image">
                                <img src="{{ asset('data/jp.jpg') }}" alt="image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="title">
                                    <span class="primary-color pb-2">
                                        2021 - 2023
                                    </span>
                                    <h3 class="text-white text-capitalize">
                                        Sent To Malaysia & Japan
                                    </h3>
                                    <p class="text-white pt-4">
                                        More than 3000 Myanmar MOU workers sent to Malaysia & Japan
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
