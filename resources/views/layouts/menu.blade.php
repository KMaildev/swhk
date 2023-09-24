<header class="header">
    <div class="header-top d-none d-md-block">
        <div class="container">
            <div class="header-top-wrp">
                <ul class="info">
                    <li>
                        <i class="fa-solid fa-paper-plane"></i>
                        <a href="#0">
                            info@shwewutthmonekha.com
                        </a>
                    </li>

                    <li class="bor-left ms-4 ps-4">
                        <i class="fa-solid fa-location-dot"></i>
                        <a href="#0">
                            contact@shwewutthmonekha.com
                        </a>
                    </li>
                </ul>

                <ul class="link-info">

                    <li class="bor-right">
                        <a href="#0">
                            <i class="fa-brands fa-facebook-f">
                            </i>
                        </a>
                    </li>

                    <li class="bor-right">
                        <a href="#0">
                            <i class="fa-brands fa-twitter">
                            </i>
                        </a>
                    </li>

                    <li class="bor-right">
                        <a href="#0">
                            <i class="fa-brands fa-linkedin-in">
                            </i>
                        </a>
                    </li>

                    <li>
                        <a href="#0">
                            <i class="fa-brands fa-youtube">
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="header-section">
        <div class="container">
            <div class="header-wrapper">

                <div class="logo-menu">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="logo">
                    </a>
                </div>

                <div class="header-bar d-xl-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <ul class="main-menu">

                    <li>
                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="javascript::void(0)">
                            About
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="sub-menu">
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
                    </li>

                    <li>
                        <a href="javascript::void(0)">
                            Our Network
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="sub-menu">
                            @foreach ($countries as $country)
                                <li>
                                    <a href="{{ route('job.show', $country->id) }}">
                                        {{ $country->country ?? '' }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>



                    <li>
                        <a href="javascript::void(0)">
                            Services
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="sub-menu">
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
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('csr.index') }}">
                            CSR
                        </a>
                    </li>

                    <li>
                        <a href="javascript::void(0)">
                            Labors Journey
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="sub-menu">
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('activities.show', $category->id) }}">
                                        {{ $category->title ?? '' }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('contact.index') }}">
                            Contact
                        </a>
                    </li>

                    <li class="m-0 menu_info ms-0 ms-xl-3 mt-4 mt-xl-0">
                        <i class="fa-solid call_ico fa-phone-volume"></i>
                        <div class="call_info">
                            <span>Call Any Time</span>
                            <a class="d-block p-0" href="tel:+912659302003">+91 2659 302 003</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
