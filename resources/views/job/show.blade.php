@extends('layouts.main')
@section('title', 'Jobs')
@section('content')

    <div class="tp-cta-4__area">
        <div class="tp-cta-4__bg fix p-relative">
            
            <div class="tp-cta-4__shape-1 d-none d-lg-block">
                <img src="{{ asset('data/cta-4-1 (1).png') }}" alt="" style="width: 90%;">
            </div>

            <div class="tp-cta-4__shape-6 d-none d-xl-block" style="right: -0%; top: 30%;">
                <img src="{{ asset('data/job-offer.png') }}" alt="" style="width: 30%; float: right">
            </div>

            <div class="tp-cta-4__shape-3 d-none d-lg-block">
                <img src="{{ asset('assets/img/cta/cta-4-3.png') }}" alt="">
            </div>
            <div class="tp-cta-4__shape-4 d-none d-lg-block">
                <img src="{{ asset('assets/img/cta/cta-4-4.png') }}" alt="">
            </div>

            <div class="container custom-container-3">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-cta-4__content text-center z-index">
                            <h3 class="tp-cta-4__title">
                                Jobs Available In
                                <span class="p-relative">
                                    {{ $country_detail->country ?? '' }}
                                    <span class="tp-title-shape">
                                        <svg width="147" height="4" viewBox="0 0 147 4" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M145.048 3.21678C145.499 3.21678 146.249 3.18881 146.7 3.24476C145.949 3.24476 145.198 3.27273 144.598 3.27273C144.298 3.32867 145.048 3.35664 145.349 3.38462C145.949 3.38462 146.55 3.38462 147 3.44056C146.55 3.46853 145.949 3.46853 145.349 3.46853C144.748 3.46853 143.997 3.44056 143.547 3.4965C143.997 3.52448 143.997 3.52448 143.997 3.58042C142.946 3.60839 142.946 3.77622 141.295 3.72028C140.694 3.72028 140.094 3.72028 139.493 3.72028C138.743 3.83217 137.842 3.94406 135.89 3.88811C135.29 3.91608 134.689 3.91608 134.089 3.88811C132.437 3.94406 130.786 3.91608 129.134 3.94406C128.984 3.97203 128.834 3.97203 128.684 3.94406C128.083 3.94406 127.483 3.94406 126.882 3.94406H126.732H126.582C125.981 3.94406 125.531 3.97203 124.93 3.94406C122.829 3.94406 120.577 3.94406 118.475 3.97203C117.124 3.97203 116.073 3.94406 115.322 3.86014H115.172H115.022C114.571 3.91608 114.721 4 113.22 4C111.719 3.97203 110.217 3.97203 108.566 3.97203C107.515 3.94406 106.464 4 105.413 3.97203C101.66 3.94406 97.9066 3.94406 94.1533 3.91608C90.8504 3.91608 87.5474 3.88811 84.2445 3.86014C83.0434 3.91608 81.8424 3.86014 80.7915 3.86014C74.7861 3.83217 68.6307 3.83217 62.6254 3.74825C59.923 3.72028 57.2206 3.74825 54.5182 3.69231C52.1161 3.69231 49.8641 3.66434 47.462 3.63636C41.9071 3.58042 36.3522 3.52448 30.9474 3.41259C28.6954 3.41259 26.5935 3.38462 24.6418 3.3007C21.489 3.3007 18.4864 3.21678 15.6339 3.13287C15.1834 3.13287 14.8832 3.1049 14.5829 3.1049C13.3819 3.13287 12.4811 3.07692 11.4301 3.02098C10.6795 3.02098 10.0789 2.99301 9.62854 2.96504C9.17813 2.93706 8.72774 2.93706 8.27734 2.90909C7.82693 2.85315 7.07628 2.85315 6.32561 2.85315C5.12454 2.7972 3.62323 2.76923 3.32297 2.62937C1.07097 2.6014 0.470444 2.48951 0.620575 2.34965C-0.280228 2.18182 -0.130096 2.01399 0.620575 1.84615C0.620575 1.76224 0.620575 1.67832 0.620575 1.59441V1.56643C0.320297 1.37063 1.97176 1.2028 1.52136 1.03497C1.37123 0.895105 2.27202 0.783217 2.87254 0.671329C2.87254 0.643357 2.87256 0.587413 3.47308 0.559441C3.62323 0.531469 4.07362 0.503497 4.67416 0.475525C5.42482 0.363636 6.32559 0.27972 7.82692 0.251748C8.1272 0.195804 8.72772 0.223776 9.17812 0.223776C9.62852 0.195804 10.0789 0.167832 10.5293 0.13986C10.9797 0.111888 11.4301 0.111888 11.8805 0.111888C13.6821 0.0559441 15.4837 0.027972 17.4354 0.027972C18.1861 0.027972 18.7866 0.027972 19.5373 0.027972C19.8376 0.027972 20.2879 0.027972 20.5882 0C24.6418 0 28.8455 0 32.8991 0.027972C35.001 0.027972 37.1028 0 39.2047 0.0839161C41.0063 0.0839161 43.1081 0.027972 45.0599 0.111888C45.5103 0.111888 45.9607 0.111888 46.2609 0.111888C47.6121 0.0839161 48.8132 0.0839161 50.1644 0.111888C53.4673 0.111888 56.7702 0.13986 59.923 0.167832C60.9739 0.167832 62.175 0.13986 63.0758 0.195804C63.6763 0.223776 64.2769 0.223776 64.8774 0.195804C66.8291 0.195804 68.7808 0.195804 70.7326 0.223776C71.0328 0.223776 71.3331 0.223776 71.6334 0.223776C72.384 0.251748 73.2848 0.223776 74.0355 0.251748C75.0864 0.251748 76.2875 0.251748 77.3384 0.251748C78.2392 0.251748 79.2901 0.251748 80.0408 0.27972C80.6413 0.27972 81.2419 0.27972 81.8424 0.27972C83.0434 0.27972 84.3946 0.251748 85.5957 0.307692C87.8477 0.307692 90.0997 0.335664 92.2015 0.335664C95.8047 0.335664 99.4079 0.391608 103.011 0.41958C104.212 0.41958 105.263 0.41958 106.464 0.447553C105.413 0.447553 104.212 0.447553 103.161 0.447553C104.212 0.41958 105.413 0.41958 106.464 0.447553C108.416 0.447553 110.217 0.447553 112.019 0.503497C112.77 0.503497 113.52 0.503497 114.271 0.531469C114.421 0.531469 114.571 0.531469 114.721 0.531469C116.373 0.531469 118.024 0.559441 119.676 0.615385C121.177 0.615385 122.528 0.671329 123.88 0.699301C124.63 0.699301 125.381 0.699301 126.132 0.755245C127.483 0.783217 128.684 0.811189 129.134 0.895105C130.035 0.839161 130.636 0.895105 131.386 0.923077C132.137 0.979021 131.837 1.06294 132.737 1.11888C132.287 1.11888 131.837 1.11888 131.386 1.11888C131.536 1.14685 131.686 1.17483 131.837 1.17483C132.888 1.23077 133.938 1.25874 134.989 1.28671C135.14 1.28671 135.29 1.28671 135.44 1.28671C136.491 1.28671 137.692 1.25874 138.593 1.31469H138.743C138.743 1.31469 138.743 1.34266 138.593 1.34266C137.992 1.34266 137.392 1.34266 136.941 1.34266H136.791C137.542 1.31469 138.142 1.31469 138.593 1.34266C138.893 1.45455 137.992 1.48252 137.692 1.53846C137.842 1.56643 137.091 1.59441 137.692 1.62238C138.142 1.62238 138.893 1.59441 138.743 1.65035C138.593 1.70629 137.692 1.67832 137.241 1.67832C137.091 1.67832 136.941 1.70629 136.791 1.70629C137.992 1.79021 139.193 1.81818 140.394 1.87413C142.196 1.87413 142.946 1.98601 143.997 2.06993C144.298 2.0979 144.748 2.06993 144.898 2.0979C143.997 2.0979 144.448 2.18182 143.847 2.20979C141.745 2.26573 141.745 2.34965 143.697 2.46154C144.298 2.48951 145.499 2.51748 145.799 2.6014C145.799 2.62937 145.799 2.65734 145.799 2.65734C146.099 2.65734 146.399 2.65734 146.399 2.68531C146.249 2.74126 145.799 2.71329 145.349 2.71329C145.048 2.71329 144.598 2.71329 144.448 2.74126C144.748 2.82518 144.598 2.85315 143.697 2.85315C143.997 2.90909 144.898 2.88112 144.748 2.96504C145.198 2.96504 145.499 2.99301 145.949 2.99301C145.499 3.04895 144.598 2.99301 144.448 3.04895C144.898 3.1049 144.898 3.13287 144.147 3.1049C143.547 3.1049 142.796 3.07692 143.547 3.16084C143.997 3.16084 144.598 3.16084 145.048 3.21678ZM4.22374 1.48252C4.07361 1.48252 4.07361 1.48252 4.07361 1.51049C4.07361 1.48252 4.22374 1.48252 4.22374 1.48252ZM42.0572 1.9021C42.2073 1.93007 42.2073 1.9021 42.3575 1.9021C42.2073 1.9021 42.0572 1.9021 42.0572 1.9021ZM60.8238 2.32168C60.6737 2.32168 60.6737 2.32168 60.8238 2.32168V2.32168ZM48.2126 2.01399C48.2126 1.98601 48.2126 1.98601 48.2126 2.01399V2.01399ZM41.1564 2.54545C41.0063 2.54545 41.0063 2.54545 40.8561 2.51748C40.8561 2.51748 40.706 2.51748 40.706 2.54545C40.8561 2.54545 41.0063 2.54545 41.1564 2.54545ZM24.4917 2.18182C24.6418 2.15385 24.4917 2.15385 24.4917 2.18182V2.18182ZM48.8132 2.7972C48.9633 2.7972 48.9633 2.7972 48.8132 2.7972V2.7972ZM45.8105 2.71329C45.6604 2.71329 45.6604 2.74126 45.3601 2.74126C45.5102 2.71329 45.6604 2.71329 45.8105 2.71329ZM17.2853 2.18182C17.2853 2.20979 17.2853 2.20979 17.2853 2.18182V2.18182ZM110.518 1.62238C110.518 1.62238 110.518 1.59441 110.368 1.62238C110.368 1.62238 110.368 1.62238 110.217 1.62238C110.368 1.62238 110.368 1.62238 110.518 1.62238ZM122.678 2.62937C122.678 2.6014 122.829 2.6014 122.829 2.57343C122.528 2.6014 122.528 2.6014 122.678 2.62937ZM87.5474 3.02098C87.5474 3.02098 87.3973 3.02098 87.3973 3.04895C87.5474 3.04895 87.8477 3.04895 87.9978 3.04895C87.8477 3.02098 87.6976 3.02098 87.5474 3.02098ZM97.0058 1.45455C97.0058 1.42657 97.0058 1.42657 97.0058 1.45455C97.0058 1.42657 96.8557 1.42657 97.0058 1.45455ZM119.826 1.84615C119.976 1.84615 119.976 1.84615 119.826 1.84615C119.976 1.81818 120.126 1.81818 120.126 1.79021C119.976 1.79021 119.826 1.79021 119.676 1.79021C119.826 1.81818 119.826 1.81818 119.826 1.84615ZM118.175 1.37063C118.024 1.3986 118.024 1.3986 118.175 1.37063V1.37063ZM74.7861 3.41259C74.7861 3.44056 74.7861 3.44056 74.636 3.46853C74.7861 3.46853 74.9363 3.46853 75.0864 3.46853C74.9363 3.44056 74.9363 3.44056 74.7861 3.41259ZM105.413 0.867133C105.563 0.867133 105.563 0.867133 105.713 0.867133C105.713 0.867133 105.563 0.867133 105.413 0.867133ZM61.4243 0.531469C61.2742 0.531469 61.2742 0.531469 61.4243 0.531469V0.531469ZM142.196 3.58042C142.796 3.52448 143.247 3.55245 143.847 3.58042C143.397 3.58042 142.796 3.58042 142.196 3.58042ZM80.3411 0.335664C80.4912 0.335664 80.6413 0.335664 80.7915 0.363636C80.4912 0.335664 80.3411 0.335664 80.3411 0.335664Z"
                                                fill="url(#paint0_linear_122_8)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_122_8" x1="124.235" y1="4.37008e-06"
                                                    x2="-2.57609" y2="44.3541" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#EF5C92" />
                                                    <stop offset="0.247843" stop-color="#A85CC5" />
                                                    <stop offset="1" stop-color="#6698FB" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </span>
                                </span>
                            </h3>
                            <a class="tp-btn-lg" href="javascript::void(0)">
                                Submit Resume
                                <i>
                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.6742 4.74002C17.3484 4.25133 16.8597 3.92554 16.2896 3.76264C15.0679 3.5183 13.9276 4.25133 13.6018 5.3916L12.8688 7.99794L5.78281 1.07486C4.96833 0.260384 3.66516 0.260384 2.93213 1.07486L2.85068 1.15631C2.60633 1.40065 2.52489 1.645 2.44344 1.97079C1.8733 1.88934 1.22172 2.13369 0.81448 2.54093C-0.081448 3.27396 -0.162896 4.57712 0.570136 5.3916L0.651584 5.47305L1.14027 6.04319C0.977376 6.12463 0.81448 6.20608 0.651584 6.36898C0.244344 6.77622 0 7.26491 0 7.83504C0 8.40518 0.244344 8.89386 0.570136 9.38255C5.04977 13.9436 6.67873 15.4097 7.08597 15.7355C7.9819 16.4685 9.36652 16.9572 10.6697 16.9572C11.4842 16.9572 12.2172 16.7943 12.9502 16.3056C14.3348 15.3282 15.4751 14.0251 16.0452 12.8034C16.2896 12.3961 16.6968 11.1744 17.9186 6.36898C18.0814 5.79884 18 5.22871 17.6742 4.74002ZM14.4163 12.2332C14.0091 13.2106 13.0317 14.2694 11.8914 15.0025C11.0769 15.5726 9.12217 15.2468 8.1448 14.4323C7.819 14.1065 6.19005 12.7219 1.79186 8.16083C1.71041 8.07938 1.62896 7.99794 1.62896 7.83504C1.62896 7.75359 1.71041 7.5907 1.79186 7.50925C1.95475 7.26491 2.28054 7.26491 2.52489 7.50925L5.04977 10.0341C5.21267 10.197 5.45701 10.2785 5.61991 10.2785H5.70136C5.86425 10.2785 6.1086 10.197 6.27149 9.95269C6.59728 9.62689 6.59728 9.13821 6.27149 8.81242L1.79186 4.25133C1.62896 4.08844 1.62896 3.84409 1.79186 3.76264C2.0362 3.5183 2.36199 3.5183 2.60633 3.76264L4.80543 5.88029L7.00453 8.07938C7.16742 8.24228 7.41176 8.32373 7.65611 8.32373C7.90045 8.32373 8.06335 8.24228 8.22624 8.07938C8.55204 7.75359 8.55204 7.26491 8.22624 6.93911L4.0724 2.86672C3.9095 2.70382 3.9095 2.37803 4.0724 2.13369C4.23529 1.97079 4.47964 1.97079 4.64253 2.13369L12.7059 10.0341C12.8688 10.197 13.0317 10.2785 13.276 10.2785C13.5204 10.2785 13.7647 10.197 13.8462 10.1156C14.0091 9.95269 14.009 9.87124 14.0905 9.70834V9.62689L15.1493 5.79884C15.2308 5.47305 15.5566 5.31016 15.8824 5.3916C16.0452 5.3916 16.1267 5.47305 16.2081 5.63595C16.2896 5.79884 16.2896 5.88029 16.2896 6.04319C15.1493 10.3599 14.6606 11.826 14.4163 12.2332ZM8.06335 1.56355C8.30769 1.645 8.47059 1.80789 8.71493 1.88934C8.95928 1.97079 9.12217 2.13369 9.36652 2.29658C9.69231 2.54093 10.0995 2.86672 10.4253 3.19251C10.7511 3.5183 11.0769 3.84409 11.3213 4.25133C11.4842 4.41423 11.7285 4.57712 11.9729 4.57712C12.1357 4.57712 12.2986 4.49568 12.3801 4.41423C12.7873 4.16988 12.8688 3.6812 12.6244 3.27396C12.2986 2.78527 11.9729 2.37803 11.5656 1.97079C11.1584 1.56355 10.7511 1.23776 10.2624 0.911967C10.0181 0.749072 9.77376 0.667624 9.52941 0.504728C9.20362 0.341832 8.95928 0.178936 8.71493 0.0974882C8.30769 -0.146856 7.819 0.0974882 7.65611 0.504728C7.41176 0.911967 7.65611 1.40065 8.06335 1.56355ZM4.96833 14.7581C4.72398 14.6767 4.47964 14.5138 4.31674 14.4323C4.0724 14.2694 3.9095 14.188 3.66516 14.0251C3.25792 13.6993 2.93213 13.3735 2.60633 13.0477C2.28054 12.7219 2.0362 12.3147 1.79186 11.9074C1.54751 11.5816 1.05882 11.4187 0.651584 11.6631C0.325792 11.9074 0.162896 12.3961 0.40724 12.8034C0.733032 13.2921 1.05882 13.7807 1.46606 14.188C1.8733 14.5952 2.28054 15.0025 2.76923 15.3282L3.50226 15.8169C3.50226 15.8169 3.99095 16.0613 4.23529 16.2242C4.31674 16.3056 4.47964 16.3056 4.56109 16.3056C4.88688 16.3056 5.13122 16.1427 5.37557 15.8169C5.53846 15.4097 5.37557 14.921 4.96833 14.7581Z"
                                            fill="url(#paint0_linear_106_218)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_106_218" x1="0" y1="8.47848"
                                                x2="18" y2="8.47848" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="#EE0979" />
                                                <stop offset="1" stop-color="#FF6A00" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="tp-trend-product-5__area pb-65 pt-50">
        <div class="container custom-container-4">
            <div class="tp-trend-product-5__top-mb">
                <div class="row align-items-center">

                    <div class="col-xl-4 col-lg-4 col-md-5">
                        <div class="tp-trend-product-5__section-title">
                            <h4 class="tp-section-title-5">
                                <span class="p-relative">
                                    Jobs
                                    <span class="tp-title-shape">
                                        <svg width="169" height="4" viewBox="0 0 169 4" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M166.756 3.21678C167.274 3.21678 168.137 3.18881 168.655 3.24476C167.792 3.24476 166.929 3.27273 166.238 3.27273C165.893 3.32867 166.756 3.35664 167.101 3.38462C167.792 3.38462 168.482 3.38462 169 3.44056C168.482 3.46853 167.792 3.46853 167.101 3.46853C166.411 3.46853 165.548 3.44056 165.03 3.4965C165.548 3.52448 165.548 3.52448 165.548 3.58042C164.34 3.60839 164.34 3.77622 162.441 3.72028C161.751 3.72028 161.06 3.72028 160.37 3.72028C159.507 3.83217 158.471 3.94406 156.227 3.88811C155.537 3.91608 154.847 3.91608 154.156 3.88811C152.258 3.94406 150.359 3.91608 148.46 3.94406C148.288 3.97203 148.115 3.97203 147.943 3.94406C147.252 3.94406 146.562 3.94406 145.871 3.94406H145.699H145.526C144.836 3.94406 144.318 3.97203 143.628 3.94406C141.211 3.94406 138.622 3.94406 136.206 3.97203C134.652 3.97203 133.444 3.94406 132.581 3.86014H132.408H132.236C131.718 3.91608 131.891 4 130.165 4C128.439 3.97203 126.713 3.97203 124.814 3.97203C123.606 3.94406 122.398 4 121.189 3.97203C116.874 3.94406 112.559 3.94406 108.244 3.91608C104.447 3.91608 100.65 3.88811 96.8525 3.86014C95.4717 3.91608 94.0909 3.86014 92.8827 3.86014C85.9786 3.83217 78.902 3.83217 71.9979 3.74825C68.8911 3.72028 65.7843 3.74825 62.6774 3.69231C59.9158 3.69231 57.3268 3.66434 54.5651 3.63636C48.1789 3.58042 41.7926 3.52448 35.579 3.41259C32.9899 3.41259 30.5735 3.38462 28.3297 3.3007C24.7051 3.3007 21.253 3.21678 17.9736 3.13287C17.4558 3.13287 17.1106 3.1049 16.7654 3.1049C15.3846 3.13287 14.349 3.07692 13.1408 3.02098C12.2778 3.02098 11.5874 2.99301 11.0695 2.96503C10.5518 2.93706 10.034 2.93706 9.51614 2.90909C8.99834 2.85315 8.13533 2.85315 7.27232 2.85315C5.89151 2.7972 4.1655 2.76923 3.82028 2.62937C1.23126 2.6014 0.540848 2.48951 0.713455 2.34965C-0.322159 2.18182 -0.149551 2.01399 0.713455 1.84615C0.713455 1.76224 0.713455 1.67832 0.713455 1.59441V1.56643C0.368256 1.37063 2.26688 1.2028 1.74907 1.03497C1.57646 0.895105 2.61206 0.783217 3.30247 0.671329C3.30247 0.643357 3.30247 0.587413 3.99287 0.559441C4.16548 0.531469 4.6833 0.503497 5.3737 0.475524C6.23671 0.363636 7.27231 0.27972 8.99832 0.251748C9.34352 0.195804 10.0339 0.223776 10.5517 0.223776C11.0695 0.195804 11.5874 0.167832 12.1052 0.13986C12.623 0.111888 13.1408 0.111888 13.6586 0.111888C15.7298 0.0559441 17.801 0.027972 20.0448 0.027972C20.9078 0.027972 21.5983 0.027972 22.4613 0.027972C22.8065 0.027972 23.3243 0.027972 23.6695 0C28.3297 0 33.1626 0 37.8228 0.027972C40.2392 0.027972 42.6556 0 45.0721 0.0839161C47.1433 0.0839161 49.5597 0.027972 51.8035 0.111888C52.3213 0.111888 52.8391 0.111888 53.1843 0.111888C54.7377 0.0839161 56.1186 0.0839161 57.672 0.111888C61.4692 0.111888 65.2664 0.13986 68.8911 0.167832C70.0993 0.167832 71.4801 0.13986 72.5157 0.195804C73.2061 0.223776 73.8965 0.223776 74.5869 0.195804C76.8308 0.195804 79.0746 0.195804 81.3184 0.223776C81.6636 0.223776 82.0088 0.223776 82.354 0.223776C83.217 0.251748 84.2526 0.223776 85.1156 0.251748C86.3238 0.251748 87.7047 0.251748 88.9129 0.251748C89.9485 0.251748 91.1567 0.251748 92.0197 0.27972C92.7101 0.27972 93.4005 0.27972 94.0909 0.27972C95.4717 0.27972 97.0251 0.251748 98.406 0.307692C100.995 0.307692 103.584 0.335664 106 0.335664C110.143 0.335664 114.285 0.391608 118.428 0.41958C119.809 0.41958 121.017 0.41958 122.398 0.447552C121.189 0.447552 119.809 0.447552 118.6 0.447552C119.809 0.41958 121.189 0.41958 122.398 0.447552C124.641 0.447552 126.713 0.447552 128.784 0.503497C129.647 0.503497 130.51 0.503497 131.373 0.531469C131.545 0.531469 131.718 0.531469 131.891 0.531469C133.789 0.531469 135.688 0.559441 137.587 0.615385C139.313 0.615385 140.866 0.671329 142.419 0.699301C143.282 0.699301 144.145 0.699301 145.008 0.755245C146.562 0.783217 147.943 0.811189 148.46 0.895105C149.496 0.839161 150.186 0.895105 151.049 0.923077C151.912 0.979021 151.567 1.06294 152.603 1.11888C152.085 1.11888 151.567 1.11888 151.049 1.11888C151.222 1.14685 151.395 1.17483 151.567 1.17483C152.775 1.23077 153.984 1.25874 155.192 1.28671C155.364 1.28671 155.537 1.28671 155.71 1.28671C156.918 1.28671 158.299 1.25874 159.334 1.31469H159.507C159.507 1.31469 159.507 1.34266 159.334 1.34266C158.644 1.34266 157.953 1.34266 157.436 1.34266H157.263C158.126 1.31469 158.817 1.31469 159.334 1.34266C159.68 1.45455 158.644 1.48252 158.299 1.53846C158.471 1.56643 157.608 1.59441 158.299 1.62238C158.817 1.62238 159.68 1.59441 159.507 1.65035C159.334 1.70629 158.299 1.67832 157.781 1.67832C157.608 1.67832 157.436 1.70629 157.263 1.70629C158.644 1.79021 160.025 1.81818 161.406 1.87413C163.477 1.87413 164.34 1.98601 165.548 2.06993C165.893 2.0979 166.411 2.06993 166.584 2.0979C165.548 2.0979 166.066 2.18182 165.375 2.20979C162.959 2.26573 162.959 2.34965 165.203 2.46154C165.893 2.48951 167.274 2.51748 167.619 2.6014C167.619 2.62937 167.619 2.65734 167.619 2.65734C167.964 2.65734 168.31 2.65734 168.31 2.68531C168.137 2.74126 167.619 2.71329 167.101 2.71329C166.756 2.71329 166.238 2.71329 166.066 2.74126C166.411 2.82517 166.238 2.85315 165.203 2.85315C165.548 2.90909 166.584 2.88112 166.411 2.96503C166.929 2.96503 167.274 2.99301 167.792 2.99301C167.274 3.04895 166.238 2.99301 166.066 3.04895C166.584 3.1049 166.584 3.13287 165.721 3.1049C165.03 3.1049 164.167 3.07692 165.03 3.16084C165.548 3.16084 166.238 3.16084 166.756 3.21678ZM4.85588 1.48252C4.68329 1.48252 4.68329 1.48252 4.68329 1.51049C4.68329 1.48252 4.85588 1.48252 4.85588 1.48252ZM118.083 1.76224C117.91 1.76224 117.737 1.76224 117.565 1.79021C117.737 1.76224 117.91 1.76224 118.083 1.76224ZM29.7105 1.87413C29.8831 1.87413 29.8831 1.87413 29.7105 1.87413C29.8831 1.87413 29.8831 1.87413 29.7105 1.87413ZM48.3515 1.9021C48.5241 1.93007 48.5241 1.9021 48.6967 1.9021C48.5241 1.9021 48.3515 1.9021 48.3515 1.9021ZM69.9267 2.32168C69.9267 2.32168 69.7541 2.29371 69.9267 2.32168C69.7541 2.32168 69.7541 2.32168 69.9267 2.32168ZM55.4282 2.01399C55.4282 1.98601 55.4282 2.01399 55.4282 2.01399C55.4282 1.98601 55.4282 1.98601 55.4282 2.01399C55.4282 2.01399 55.4282 1.98601 55.4282 2.01399ZM47.3159 2.54545C47.1433 2.54545 47.1433 2.54545 46.9707 2.51748C46.9707 2.51748 46.7981 2.51748 46.7981 2.54545C46.9707 2.54545 47.1433 2.54545 47.3159 2.54545ZM34.8886 2.20979C35.0612 2.20979 35.0612 2.20979 34.8886 2.20979C35.0612 2.20979 35.0612 2.20979 34.8886 2.20979C34.8886 2.20979 35.0612 2.20979 34.8886 2.20979ZM28.1571 2.18182C28.3297 2.15385 28.1571 2.15385 28.1571 2.18182C28.1571 2.15385 28.1571 2.15385 28.1571 2.18182C28.1571 2.15385 28.1571 2.15385 28.1571 2.18182ZM56.1186 2.7972C56.2912 2.7972 56.2912 2.7972 56.1186 2.7972C56.2912 2.7972 56.2912 2.7972 56.1186 2.7972C56.2912 2.7972 56.2912 2.7972 56.1186 2.7972ZM52.6665 2.71329C52.4939 2.71329 52.4939 2.74126 52.1487 2.74126C52.3213 2.71329 52.4939 2.71329 52.6665 2.71329ZM19.8722 2.18182C19.8722 2.20979 19.8722 2.20979 19.8722 2.18182C19.8722 2.20979 19.8722 2.20979 19.8722 2.18182C19.8722 2.20979 19.8722 2.20979 19.8722 2.18182ZM127.058 1.62238C127.058 1.62238 127.058 1.59441 126.885 1.62238C126.885 1.62238 126.885 1.62238 126.713 1.62238C126.885 1.62238 126.885 1.62238 127.058 1.62238ZM141.039 2.62937C141.039 2.6014 141.211 2.6014 141.211 2.57343C140.866 2.6014 140.866 2.6014 141.039 2.62937ZM100.65 3.02098C100.65 3.02098 100.477 3.02098 100.477 3.04895C100.65 3.04895 100.995 3.04895 101.168 3.04895C100.995 3.02098 100.822 3.02098 100.65 3.02098ZM111.524 1.45455C111.524 1.42657 111.524 1.42657 111.524 1.45455C111.524 1.42657 111.351 1.42657 111.524 1.45455C111.351 1.45455 111.524 1.45455 111.524 1.45455ZM113.94 3.1049C114.113 3.1049 114.113 3.1049 113.94 3.1049C114.113 3.1049 114.113 3.1049 113.94 3.1049ZM26.2585 0.979021C26.2585 0.951049 26.2585 0.979021 26.2585 0.979021C26.2585 0.951049 26.2585 0.979021 26.2585 0.979021ZM137.759 1.84615C137.932 1.84615 137.932 1.84615 137.759 1.84615C137.932 1.81818 138.104 1.81818 138.104 1.79021C137.932 1.79021 137.759 1.79021 137.587 1.79021C137.759 1.81818 137.759 1.81818 137.759 1.84615ZM146.389 1.45455C146.217 1.45455 146.044 1.45455 145.871 1.45455C146.044 1.45455 146.217 1.45455 146.389 1.45455ZM135.86 1.37063C135.688 1.3986 135.688 1.3986 135.86 1.37063C136.206 1.37063 136.551 1.37063 136.896 1.37063C136.551 1.37063 136.206 1.37063 135.86 1.37063ZM85.9786 3.41259C85.9786 3.44056 85.9786 3.44056 85.806 3.46853C85.9786 3.46853 86.1512 3.46853 86.3238 3.46853C86.1512 3.44056 86.1512 3.44056 85.9786 3.41259ZM121.189 0.867133C121.362 0.867133 121.362 0.867133 121.535 0.867133C121.535 0.867133 121.362 0.867133 121.189 0.867133ZM3.64769 1.76224C3.64769 1.76224 3.47508 1.76224 3.64769 1.76224V1.76224ZM39.031 0.307692H38.8584H39.031ZM70.6171 0.531469C70.4445 0.531469 70.4445 0.531469 70.6171 0.531469C70.6171 0.531469 70.4445 0.531469 70.6171 0.531469ZM78.3842 0.391608C78.5568 0.391608 78.5568 0.391608 78.7294 0.391608C78.5568 0.391608 78.5568 0.391608 78.3842 0.391608ZM163.477 3.58042C164.167 3.52448 164.685 3.55245 165.375 3.58042C164.858 3.58042 164.167 3.58042 163.477 3.58042ZM51.6309 0.111888V0.13986V0.111888ZM92.3649 0.335664C92.5375 0.335664 92.7101 0.335664 92.8827 0.363636C92.5375 0.335664 92.3649 0.335664 92.3649 0.335664ZM154.156 1.62238C154.156 1.62238 154.156 1.65035 154.156 1.62238V1.62238Z"
                                                fill="url(#paint0_linear_492_315)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_492_315" x1="142.827" y1="4.37008e-06"
                                                    x2="1.97766" y2="56.6374" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#3AFFDC" />
                                                    <stop offset="0.247843" stop-color="#94E7A5" />
                                                    <stop offset="1" stop-color="#FFCA63" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </span>
                                </span>
                                Available
                            </h4>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-7">
                        <div class="tp-trend-product-5__button-box">
                            <nav>
                                <div class="nav nav-tab justify-content-center" id="nav-tab" role="tablist">
                                    @foreach ($countries as $c)
                                        <a href="{{ route('job.show', $c->id) }}" class="tp-main-btn" style="margin: 10px;">
                                            <i class="fa fa-flag"></i>
                                            {{ $c->country ?? '' }}
                                        </a>
                                    @endforeach
                                </div>
                            </nav>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                        <div class="tp-trend-product-5__button">
                            <a class="tp-btn-border" href="{{ route('contact.index') }}">
                                Contract Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-Cards" role="tabpanel" aria-labelledby="nav-Cards-tab"
                        tabindex="0">
                        <div class="tp-trend-product-5__wrapper">
                            <div class="row">
                                @foreach ($jobs as $job)
                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                        <div class="tp-trend-product-5__item-box">
                                            <div class="tp-trend-product-5__item">

                                                <div class="tp-trend-product-5__thumb fix p-relative">
                                                    <img src="{{ $job->photo }}" alt=""
                                                        style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                                                    <div class="tp-trend-product-5__thumb-text">
                                                        <span>Available</span>
                                                    </div>
                                                </div>

                                                <div class="tp-trend-product-5__content">
                                                    <ul>
                                                        <li>
                                                            <div class="tp-trend-product-5__star">
                                                                <span>
                                                                    Job in {{ $country_detail->country ?? '' }}
                                                                </span>

                                                                <span style="text-align: right">
                                                                    SWHK
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="tp-trend-product-5__title-box">
                                                                <h4 class="tp-trend-product-5__title-sm">
                                                                    <a href="shop-details.html">
                                                                        {{ $job->title ?? '' }}
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="tp-trend-product-5__link-box text-center">
                                                <a class="tp-btn-cart" href="javascript::void(0)">
                                                    <span>
                                                        <i class="fa fa-edit"></i>
                                                    </span>
                                                    Submit Resume
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
