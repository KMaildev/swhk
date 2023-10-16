@extends('layouts.main')
@section('title', 'Founder’s Message')
@section('content')

    <div class="tp-testimonial__area p-relative fix purple-bg pt-50 pb-85">
        <div class="tp-testimonial__shape-1">
            <img src="{{ asset('assets/img/testimonial/shape-1-1.png') }}" alt="">
        </div>
        <div class="tp-testimonial__shape-2">
            <img src="{{ asset('assets/img/testimonial/shape-1-2.png') }}" alt="">
        </div>

        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-12 col-lg-12">
                    <div class="tp-testimonial__wrapper">
                        <div class="swiper-container tp-testimonial__active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tp-testimonial__item">
                                        <div
                                            class="tp-testimonial__top-box d-flex align-items-center justify-content-between">
                                            <div class="tp-testimonial__author-box d-flex align-items-center">
                                                <div class="tp-testimonial__thumb">
                                                    <img src="{{ asset('data/md.jpg') }}" alt="" style="width: 200px; height: auto;">
                                                </div>
                                                <div class="tp-testimonial__author-info">
                                                    <h5 class="tp-testimonial__author-name">
                                                        Mrs.Ei Ei Khaing
                                                    </h5>
                                                    <span>Founder of <b>Shwe Wutt Hmone Kha Co.,Ltd</b></span>
                                                </div>
                                            </div>
                                            <div class="tp-testimonial__icon">
                                                <span>
                                                    <svg width="80" height="59" viewBox="0 0 80 59" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M25.4728 30.145C25.6478 30.145 25.8225 30.1931 25.9736 30.2911C26.26 30.4728 26.4188 30.7961 26.3839 31.1287C25.883 35.9726 24.5966 40.4871 22.5596 44.5478C20.7596 48.1345 18.4029 51.2829 15.5199 53.959C29.5929 46.6069 35.3206 30.9205 33.3885 18.2473C32.1752 10.2921 27.3364 1.79015 17.3947 1.79015C8.81424 1.7901 1.83177 8.61387 1.83177 17.001C1.83193 25.3865 8.81418 32.2103 17.3947 32.2103C20.0693 32.2102 22.7058 31.5358 25.0226 30.26C25.1625 30.1823 25.3184 30.145 25.4727 30.145L25.4728 30.145ZM9.57128 58.2231C9.21976 58.2231 8.88901 58.0243 8.73635 57.6995C8.5471 57.2908 8.69503 56.8075 9.08458 56.5682C19.6385 50.1158 23.2608 40.2602 24.3613 32.5801C22.1748 33.5125 19.7975 34.0005 17.3948 34.0005C7.80297 34.0004 0 26.3734 0 17.001C0.000154185 7.6271 7.80294 4.13748e-09 17.3948 4.13748e-09C22.1813 -0.000100408 26.3887 1.82747 29.5627 5.28367C32.4664 8.44444 34.4158 12.8363 35.1998 17.9847C37.5088 33.1225 29.4037 52.3568 9.83839 58.1844C9.74932 58.2108 9.65865 58.2232 9.57132 58.2232L9.57128 58.2231Z"
                                                            fill="#F15C92" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M69.8891 30.145C70.0641 30.145 70.2389 30.1932 70.3916 30.2911C70.6779 30.4728 70.8352 30.7961 70.8019 31.1287C70.301 35.9726 69.0129 40.4871 66.9759 44.5478C65.176 48.1345 62.8209 51.283 59.9379 53.9591C74.0078 46.6069 79.7369 30.9205 77.8048 18.2473C76.5917 10.2921 71.7543 1.79015 61.8127 1.79015C53.2306 1.7901 46.2498 8.61388 46.2498 17.001C46.2499 25.3865 53.2306 32.2103 61.8127 32.2103C64.4859 32.2102 67.1238 31.5359 69.4407 30.26C69.5807 30.1823 69.7348 30.145 69.8891 30.145L69.8891 30.145ZM53.9876 58.2231C53.6362 58.2231 53.3054 58.0243 53.1543 57.6995C52.9636 57.2908 53.1129 56.8075 53.501 56.5682C64.0566 50.1158 67.6772 40.2602 68.7775 32.5802C66.5913 33.5125 64.2154 34.0006 61.8127 34.0006C52.221 34.0005 44.418 26.3734 44.418 17.001C44.4181 7.6271 52.2209 4.13748e-09 61.8127 4.13748e-09C66.5975 -0.000100408 70.805 1.82748 73.979 5.28367C76.8828 8.44445 78.8321 12.8363 79.6177 17.9832C81.9251 33.1225 73.82 52.3568 54.2547 58.1844C54.1658 58.2108 54.0766 58.2232 53.9876 58.2232V58.2231Z"
                                                            fill="#F15C92" />
                                                    </svg>

                                                </span>
                                            </div>
                                        </div>
                                        <div class="tp-testimonial__content">
                                            <p style="text-align: justify">
                                                Greetings,
                                                <br>
                                                When we embarked on the journey of establishing Shwe Wutt Hmone Kha Co., Ltd
                                                in 2018, we
                                                envisioned more than just a company; we saw an opportunity to bridge
                                                aspirations with
                                                possibilities. Our journey began with a simple yet powerful idea – to
                                                connect Myanmar's
                                                skilled
                                                workforce with global opportunities while addressing the pressing issue of
                                                unemployment
                                                within
                                                our nation.
                                                <br>
                                                Our commitment to this vision has been unwavering. We understood that behind
                                                every resume,
                                                there is potential waiting to be harnessed, and behind every enterprise,
                                                there is a need for
                                                exceptional talent. This understanding fueled our determination to create an
                                                agency that
                                                transcends traditional recruitment, one that stands as a conduit for
                                                meaningful connections
                                                that
                                                transform lives and drive business success.
                                                <br>
                                                As founders, we navigated challenges, learned from experiences, and
                                                collaborated with
                                                remarkable individuals who share our passion. We witnessed the
                                                transformative impact of
                                                matching skilled workers with organizations that value their expertise. And
                                                in doing so, we
                                                also
                                                recognized our responsibility to contribute positively to the socio-economic
                                                fabric of our
                                                nation.
                                                <br>
                                                Shwe Wutt Hmone Kha Co., Ltd's journey is a story of empowerment – one that
                                                empowers
                                                workers to realize their potential on a global stage and empowers businesses
                                                with the right
                                                talent
                                                to achieve their goals. It's a story of partnerships built on trust, ethics,
                                                and excellence.
                                                It's a story
                                                that constantly reminds us of the change we can inspire when we align vision
                                                with action.
                                                <br>
                                                Today, as we reflect on our path, we see how far we've come, but we're also
                                                reminded of how
                                                much further we can go. Our dedication to professionalism, integrity, and
                                                innovation remains
                                                unyielding. We look ahead with enthusiasm, as we continue to evolve, expand,
                                                and adapt to
                                                the
                                                changing landscapes of both the job market and our society.
                                                <br>
                                                To the aspiring job seekers, our esteemed clients, and the dedicated team
                                                that fuels our
                                                progress
                                                – thank you for being part of our narrative. Together, we are not just
                                                shaping a company; we
                                                are
                                                shaping futures and shaping a legacy.
                                                <br>
                                                With utmost gratitude and excitement for the journey ahead,
                                                <br><br>
                                                Mrs.Ei Ei Khaing
                                                <br>
                                                Founder
                                                <br>
                                                <span>“Shwe Wutt Hmone Kha Co., Ltd“</span>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
