<!-- Footer area start here -->
<footer class="footer-one secondary-bg">
    <div class="map">
        <img src="{{ asset('assets/images/footer/map.png') }}" alt="">
    </div>
    <div class="container">
        <div
            class="footer_one_top position-relative d-flex flex-wrap align-items-center justify-content-between pt-65 pb-65">
            <div class="logo">
                <img src="{{ asset('data/logo_png.png') }}" alt="logo" style="width: 100px;">
            </div>
            <div class="social-icon mt-sm-0">
                <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#0"><i class="fa-brands fa-twitter"></i></a>
                <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#0"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
        <div class="bor-top position-relative">
            <div class="row g-4">

                <div class="col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s">
                    <div class="item g-4">
                        <div class="title">
                            <h4>Official info</h4>
                        </div>
                        <ul>
                            <li>
                                <a href="#0">
                                    <i class="fa-solid fa-location-dot pe-1 text-white"></i>
                                    No.95, A1 Ground Floor, Bandoola Road, Yangon 11421
                                </a>

                                <a href="https://maps.app.goo.gl/TgJhh6gVxbvU9pKRA" class="map-popup">View Map <i
                                        class="fa-solid fa-location-arrow"></i>
                                </a>
                            </li>

                            <li>
                                <a href="tel:+959 4258 47416">
                                    <i class="fa-solid fa-phone-volume pe-1 text-white"></i>
                                    +959 4258 47416
                                </a>
                            </li>

                            <li>
                                <a href="mailto:info@shwewutthmonekha.com">
                                    <i class="fa-solid fa-envelope pe-1 text-white"></i>
                                    info@shwewutthmonekha.com</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-duration="1.7s" data-wow-delay=".5s">
                    <div class="item">
                        <div class="title">
                            <h4>main menu</h4>
                        </div>
                        <div class="row g-2">
                            <div class="col-6">
                                <ul>
                                    <li>
                                        <a href="{{ route('about.index') }}">
                                            Company Introduction
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('history') }}">
                                            Company History
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
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li>
                                        <a href="{{ route('service.index') }}">
                                            Services
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript::void(0)">
                                            Vocational Training School
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('csr.index') }}">
                                            CSR
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('contact.index') }}">
                                            Contact Us
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".6s">
                    <div class="item gallery">
                        <div class="title">
                            <h4>
                                Facebook
                            </h4>
                        </div>
                        <div class="row g-2">
                            <div class="col-12">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>
                Copyright © {{ now()->year }}
                Shwe Wutt Hmone Kha Co.,Ltd. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>
<!-- Footer area end here -->

<!-- Back to top area start here -->
<div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Back to top area end here -->
