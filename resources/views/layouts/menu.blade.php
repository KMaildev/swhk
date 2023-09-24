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
                            HOME
                        </a>
                    </li>

                    <li>
                        <a href="#">ABOUT <i class="fas fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="">Company Introduction</a></li>
                            <li><a href="">Company History</a></li>
                            <li><a href="">MD's Insight</a></li>
                            <li><a href="">Our Team Members</a></li>
                            <li><a href="">ISO Certificates</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="">OUR NETWORK</a>
                    </li>

                    <li>
                        <a href="{{ route('service.index') }}">
                            SERVICES
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('csr.index') }}">
                            CSR
                        </a>
                    </li>

                    <li>
                        <a href="javascript::void(0)">
                            LABORS JOURNEY
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
                            CONTACT
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
