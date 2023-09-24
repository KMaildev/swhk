@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')

    <section class="page-banner bg-image section-padding" style="background-image: url({{ asset('data/contactus-banner.jpg') }})">
        <div class="gaps-right d-none d-sm-block float-bob-x">
            <img src="{{ asset('assets/images/shape/gaps-primary.png') }}" alt="">
        </div>
        <div class="gaps-left d-none d-sm-block float-bob-x">
            <img src="{{ asset('assets/images/shape/gaps-primary.png') }}" alt="">
        </div>
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">Contact Us</h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">
                <a href="{{ route('home') }}">Home :</a>
                <span>Contact us</span>
            </div>
        </div>
    </section>

    <section class="contact section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="content bg-image"
                        style="background-image: url({{ asset('data/contact.jpg') }})">
                        <h2>Have something in mind? <br>
                            Let's talk.
                        </h2>
                        <p>
                            Alternatively, you may contact us by filling up the contact form. Our team will response you
                            shortly.
                        </p>

                        <div class="arry">
                            <img src="{{ asset('assets/images/icon/arry.png') }}" alt="">
                        </div>

                        <ul>
                            <li>
                                <a href="https://maps.app.goo.gl/JA5K6BtgW3Lc6bdL7" target="_blank">
                                    <i class="fa-solid fa-location-dot"></i>
                                    No.95, A1 Ground Floor, Bandoola Road, Yangon 11421
                                </a>
                            </li>
                            <li>
                                <a href="tel:+959 4258 47416">
                                    <i class="fa-solid fa-phone-volume"></i>
                                    +959 4258 47416
                                </a>
                            </li>

                            <li>
                                <a href="mailto:info@shwewutthmonekha.com ">
                                    <i class="fa-solid fa-envelope"></i>
                                    info@shwewutthmonekha.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-area">

                        <form id="create-form" class="cons-contact-form" method="post"
                            action="{{ route('contact.store') }}" autocomplete="off">
                            @csrf

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input name="name" type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input name="email" type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input name="phone" type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input name="subject" type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <textarea name="message" class="form-control" rows="2" placeholder="Message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button class="">
                                    Submit Now
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.729966772413!2d96.18809617445514!3d16.889247383915475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1934ebf8c534f%3A0xcc913728f5cd149a!2sShwe%20Wutt%20Hmone%20Kha%20Co.%2CLtd!5e0!3m2!1sen!2smm!4v1695463659270!5m2!1sen!2smm"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact') !!}
@endsection
