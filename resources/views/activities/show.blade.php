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
                Gallery & Activities
            </h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">
                <a href="{{ route('home') }}">Home :</a>
                <span>
                    Gallery & Activities :
                </span>
                <span>
                    {{ $category->title ?? '' }}
                </span>
            </div>
        </div>
    </section>

    <style>
        .gradient-border {
            --border-width: 4px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Lato, sans-serif;
            text-transform: uppercase;
            color: white;
            background: white;
            /* border-radius: var(--border-width);
                            border-radius: 15px 30px; */

            &::after {
                position: absolute;
                content: "";
                top: calc(-1 * var(--border-width));
                left: calc(-1 * var(--border-width));
                z-index: -1;
                width: calc(100% + var(--border-width) * 2);
                height: calc(100% + var(--border-width) * 2);
                background: linear-gradient(60deg,
                        hsl(224, 85%, 66%),
                        hsl(269, 85%, 66%),
                        hsl(314, 85%, 66%),
                        hsl(359, 85%, 66%),
                        hsl(44, 85%, 66%),
                        hsl(89, 85%, 66%),
                        hsl(134, 85%, 66%),
                        hsl(179, 85%, 66%));
                background-size: 300% 300%;
                background-position: 0 50%;
                /* border-radius: calc(2 * var(--border-width)); */
                animation: moveGradient 3s alternate infinite;
                /* border-radius: 15px 30px; */
            }
        }

        @keyframes moveGradient {
            50% {
                background-position: 100% 50%;
            }
        }
    </style>

    <section class="blog-three section-padding">
        <div class="container">
            <div class="row g-4">

                @foreach ($activities as $activity)
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-md-3 col-xl-3 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">
                            <div class="item gradient-border"
                                style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;">
                                <div class="image">
                                    <img data-enlargeable="" src="{{ $image }}" alt=""
                                        style="width: 100%; height: 350px; background-size: top; object-fit: cover;">
                                    <div class="content" style="padding: 20px; width: 100%; background-color: white;">
                                        <h3 style="padding-bottom: 0px; font-size: 18px">
                                            {{ $activity->title ?? '' }}
                                        </h3>
                                        <div class="info">
                                            <span>
                                                Shwe Wutt Hmone Kha
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach

            </div>
        </div>
    </section>

@endsection
