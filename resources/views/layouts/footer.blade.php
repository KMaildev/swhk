<div class="tp-instagram-2__area fix">
    <div class="container-fluid g-0">
        <div class="tp-instagram-2-warpper">
            <div class="swiper-container tp-instagram-2-active">
                <div class="swiper-wrapper">
                    @foreach ($footer_activities as $footer_activitie)
                        @php
                            $images = explode(',', $footer_activitie->images);
                        @endphp
                        @foreach ($images as $image)
                            <div class="swiper-slide">
                                <div class="tp-instagram-2__thumb">
                                    <img src="{{ $image }}" alt=""
                                        style="width: 100%; height: 230px; background-size: top; object-fit: cover;">
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="fix">
    <!-- footer-area-start -->
    <div class="tp-footer-2__area tp-footer-2__bg" style="background-color: #0E9A58;">
        <div class="container">

            <div class="tp-footer-2__ptb">
                <div class="row">


                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50  wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".3s">
                        <div class="tp-footer-2__widget footer-col-5">
                            <div class="tp-footer-2__logo">
                                <img src="{{ asset('assets/data/swlogo.png') }}" alt="" style="width: 100%;">
                            </div>
                            <div class="tp-footer-2__text">
                                <p>
                                    We have Shwe Wutt Hmone Kha Co., Ltd (Overseas Myanmar Manpower Employment Agency)
                                    was founded in 2018,
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50  wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".5s">
                        <div class="tp-footer-2__widget footer-col-6">
                            <h4 class="tp-footer-2__widget-title">Our office</h4>
                            <div class="tp-footer-2__list">
                                <div class="tp-footer-2__text">
                                    <p>
                                        No.95, A1 Ground Floor,
                                        Bandoola Road, Yangon 11421
                                    </p>
                                </div>
                                <div class="tp-footer-2__contact-list">
                                    <a href="tel:+959 4258 47416">
                                        +959 4258 47416
                                    </a>
                                </div>
                                <div class="tp-footer-2__social-box">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50  wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".7s">
                        <div class="tp-footer-2__widget footer-col-7">
                            <h4 class="tp-footer-2__widget-title">
                                Main Menu
                            </h4>
                            <div class="tp-footer-2__list">
                                <ul>
                                    <li>
                                        <a href="{{ route('about.index') }}">
                                            Company Introduction
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('md') }}">
                                            Founder’s Message
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('team') }}">
                                            Our Team Members
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('service.index') }}">
                                            Services
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('csr.index') }}">
                                            CSR
                                        </a>
                                    </li>

                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="{{ route('activities.show', $category->id) }}">
                                                {{ $category->title ?? '' }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50  wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".9s">
                        <div class="tp-footer-2__widget footer-col-8">
                            <h4 class="tp-footer-2__widget-title">Our Location</h4>
                            <div class="tp-footer-2__location">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.729966772413!2d96.18809617445514!3d16.889247383915475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1934ebf8c534f%3A0xcc913728f5cd149a!2sShwe%20Wutt%20Hmone%20Kha%20Co.%2CLtd!5e0!3m2!1sen!2smm!4v1695463659270!5m2!1sen!2smm"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>


                                <br><br>
                                <div id="fb-root"></div>
                                <script async defer crossorigin="anonymous"
                                    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=210045094312905&autoLogAppEvents=1"
                                    nonce="PosYNXjc"></script>

                                <div class="fb-page"
                                    data-href="https://www.facebook.com/profile.php?id=100067013401097&mibextid=LQQJ4d"
                                    data-tabs="timeline" data-width="" style="width: 100%;" data-height="200" data-small-header="false"
                                    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                    <blockquote
                                        cite="https://www.facebook.com/profile.php?id=100067013401097&mibextid=LQQJ4d"
                                        class="fb-xfbml-parse-ignore"><a
                                            href="https://www.facebook.com/profile.php?id=100067013401097&mibextid=LQQJ4d">Facebook</a>
                                    </blockquote>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- footer-area-end -->

    <!-- copyright-area-start -->
    <div class="tp-copyright-2__area black-bg-2 theme-bg">
        <div class="container">
            <div class="tp-copyright-2__bdr">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="tp-copyright-2__text text-center text-md-start">
                            <span><strong>© 2023</strong> Shwe Wutt Hmone Kha Co.,Ltd. All Rights Reserved.</span>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="tp-copyright-2__thumb text-end d-none d-md-block">
                            <img src="{{ asset('data/icon/thailand.png') }}" alt="" style="width: 50px;">
                            <img src="{{ asset('data/icon/malaysia.png') }}" alt="" style="width: 50px;">
                            <img src="{{ asset('data/icon/japan.png') }}" alt="" style="width: 50px;">
                            <img src="{{ asset('data/icon/singapore.png') }}" alt="" style="width: 50px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright-area-end -->

</footer>
