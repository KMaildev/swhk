@extends('layouts.main')
@section('title', 'Founder’s Message')
@section('content')

    <section class="page-banner bg-image section-padding" style="background-image: url({{ asset('data/md_bg.jpg') }})">
        <div class="gaps-right d-none d-sm-block float-bob-x">
            <img src="{{ asset('assets/images/shape/gaps-primary.png') }}" alt="">
        </div>
        <div class="gaps-left d-none d-sm-block float-bob-x">
            <img src="{{ asset('assets/images/shape/gaps-primary.png') }}" alt="">
        </div>
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">Our Team Members</h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">
                <a href="{{ route('home') }}">Home :</a>
                <span>Our Team Members</span>
            </div>
        </div>
    </section>

    <section class="team-single section-padding pb-65">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="image">
                        <img src="https://static.vecteezy.com/system/resources/previews/011/459/669/original/people-avatar-icon-png.png"
                            alt="image">
                        <div class="team-info">
                            <a class="d-block" href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                            <a class="d-block" href="#0"><i class="fa-brands fa-twitter"></i></a>
                            <a class="d-block" href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="team_single_info">
                        <div class="title pb-30 mb-30 bor-bottom">
                            <h3>
                                Founder’s Message
                            </h3>
                            <span class="primary-color mt-1">
                                Shwe Wutt Hmone Kha Co.,Ltd
                            </span>
                        </div>
                        <div class="info">
                            <p style="text-align: justify">
                                Greetings,
                                <br><br>
                                When we embarked on the journey of establishing Shwe Wutt Hmone Kha Co., Ltd in 2018, we
                                envisioned more than just a company; we saw an opportunity to bridge aspirations with
                                possibilities. Our journey began with a simple yet powerful idea – to connect Myanmar's
                                skilled
                                workforce with global opportunities while addressing the pressing issue of unemployment
                                within
                                our nation.
                                <br><br>
                                Our commitment to this vision has been unwavering. We understood that behind every resume,
                                there is potential waiting to be harnessed, and behind every enterprise, there is a need for
                                exceptional talent. This understanding fueled our determination to create an agency that
                                transcends traditional recruitment, one that stands as a conduit for meaningful connections
                                that
                                transform lives and drive business success.
                                <br><br>
                                As founders, we navigated challenges, learned from experiences, and collaborated with
                                remarkable individuals who share our passion. We witnessed the transformative impact of
                                matching skilled workers with organizations that value their expertise. And in doing so, we
                                also
                                recognized our responsibility to contribute positively to the socio-economic fabric of our
                                nation.
                                <br><br>
                                Shwe Wutt Hmone Kha Co., Ltd's journey is a story of empowerment – one that empowers
                                workers to realize their potential on a global stage and empowers businesses with the right
                                talent
                                to achieve their goals. It's a story of partnerships built on trust, ethics, and excellence.
                                It's a story
                                that constantly reminds us of the change we can inspire when we align vision with action.
                                <br><br>
                                Today, as we reflect on our path, we see how far we've come, but we're also reminded of how
                                much further we can go. Our dedication to professionalism, integrity, and innovation remains
                                unyielding. We look ahead with enthusiasm, as we continue to evolve, expand, and adapt to
                                the
                                changing landscapes of both the job market and our society.
                                <br><br>
                                To the aspiring job seekers, our esteemed clients, and the dedicated team that fuels our
                                progress
                                – thank you for being part of our narrative. Together, we are not just shaping a company; we
                                are
                                shaping futures and shaping a legacy.
                                <br><br>
                                With utmost gratitude and excitement for the journey ahead,
                                <br><br>
                                Mrs.Ei Ei Khaing
                                <br>
                                Founder
                                <br>
                                Shwe Wutt Hmone Kha Co., Ltd
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
