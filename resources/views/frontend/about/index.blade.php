@section('seo')
    @include('frontend.seo', [
        'name' => $about_us->seo_title ?? '',
        'title' => $about_us->seo_title ?? $about_us->title,
        'description' => $about_us->meta_description ?? '',
        'keyword' => $about_us->meta_keywords ?? '',
        'schema' => $about_us->seo_schema ?? '',
        'created_at' => $about_us->created_at,
        'updated_at' => $about_us->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')

<!-- =========================================
     ABOUT PAGE HERO
========================================= -->

<section class="about-page-hero">

    <div class="container">

        <div class="about-hero-content">

            <div class="about-small-title">
                <span></span>
                <p>About The Hotel Tirupati</p>
            </div>

            <h1>
                A Place of Comfort,
                <span>Warmth & Hospitality</span>
            </h1>

            <p>
                Welcome to The Hotel Tirupati, where comfortable stays,
                delicious food and warm Nepali hospitality come together
                to create memorable experiences.
            </p>

            <div class="about-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <i class="ri-arrow-right-line"></i>
                <span>About Us</span>
            </div>

        </div>

    </div>

</section>


<!-- =========================================
     OUR STORY
========================================= -->

<section class="about-story-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- Image -->

            <div class="col-lg-6">

                <div class="about-story-image">

                    <img
                        src="{{ asset('frontend/assets/image/temple.jpeg') }}"
                        alt="The Hotel Tirupati"
                    >

                    <div class="about-image-badge">

                        <strong>Since</strong>

                        <span>2011</span>

                        <small>Hospitality & Care</small>

                    </div>

                </div>

            </div>


            <!-- Content -->

            <div class="col-lg-6">

                <div class="about-story-content">

                    <div class="about-section-label">

                        <span></span>

                        <p>Our Story</p>

                    </div>

                    <h2>
                        Hospitality With
                        <span>Heart</span>
                    </h2>

                    <p>
                        The Hotel Tirupati was built with a simple vision:
                        to create a welcoming place where every guest feels
                        comfortable, cared for and at home.
                    </p>

                    <p>
                        From peaceful rooms and delicious meals to friendly
                        service, every detail is thoughtfully prepared to
                        make your stay enjoyable. We believe that true
                        hospitality is not only about providing a room,
                        but about creating an experience worth remembering.
                    </p>

                    <p>
                        Today, we continue to welcome travelers, families
                        and guests from near and far with the same warmth,
                        honesty and dedication.
                    </p>


                    <div class="story-highlights">

                        <div>
                            <i class="ri-home-heart-line"></i>

                            <span>
                                <strong>Comfort</strong>
                                <small>Feel at home</small>
                            </span>
                        </div>

                        <div>
                            <i class="ri-restaurant-line"></i>

                            <span>
                                <strong>Delicious Food</strong>
                                <small>Fresh & authentic</small>
                            </span>
                        </div>

                        <div>
                            <i class="ri-customer-service-2-line"></i>

                            <span>
                                <strong>Warm Service</strong>
                                <small>Always here for you</small>
                            </span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================
     WHY CHOOSE US
========================================= -->

<section class="about-why-section">

    <div class="container">

        <div class="text-center about-section-heading">

            <div class="about-section-label justify-content-center">

                <span></span>

                <p>Why Choose Us</p>

            </div>

            <h2>
                More Than Just A Stay
            </h2>

            <p>
                Everything we do is designed around your comfort,
                convenience and happiness.
            </p>

        </div>


        <div class="row g-4 mt-4">

            <!-- Card 1 -->

            <div class="col-lg-3 col-md-6">

                <div class="why-about-card">

                    <div class="why-about-icon">
                        <i class="ri-hotel-bed-line"></i>
                    </div>

                    <h4>Comfortable Rooms</h4>

                    <p>
                        Clean, cozy and thoughtfully designed rooms
                        for a relaxing stay.
                    </p>

                </div>

            </div>


            <!-- Card 2 -->

            <div class="col-lg-3 col-md-6">

                <div class="why-about-card">

                    <div class="why-about-icon">
                        <i class="ri-restaurant-2-line"></i>
                    </div>

                    <h4>Delicious Food</h4>

                    <p>
                        Enjoy fresh local and international dishes
                        prepared with care.
                    </p>

                </div>

            </div>


            <!-- Card 3 -->

            <div class="col-lg-3 col-md-6">

                <div class="why-about-card">

                    <div class="why-about-icon">
                        <i class="ri-map-pin-line"></i>
                    </div>

                    <h4>Great Location</h4>

                    <p>
                        Conveniently located so you can explore
                        the attractions around us.
                    </p>

                </div>

            </div>


            <!-- Card 4 -->

            <div class="col-lg-3 col-md-6">

                <div class="why-about-card">

                    <div class="why-about-icon">
                        <i class="ri-customer-service-2-line"></i>
                    </div>

                    <h4>Friendly Service</h4>

                    <p>
                        Our team is always ready to make your stay
                        comfortable and memorable.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================
     FACILITIES
========================================= -->

<section class="about-facilities-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- Content -->

            <div class="col-lg-6">

                <div class="about-facilities-content">

                    <div class="about-section-label">

                        <span></span>

                        <p>Our Facilities</p>

                    </div>

                    <h2>
                        Everything You Need
                        <span>Under One Roof</span>
                    </h2>

                    <p>
                        We provide convenient facilities and thoughtful
                        services to make your stay easy, comfortable
                        and enjoyable.
                    </p>


                    <div class="row g-3">

                        <div class="col-md-6">

                            <div class="facility-about-item">

                                <i class="ri-wifi-line"></i>

                                <div>
                                    <h5>Free Wi-Fi</h5>
                                    <p>Stay connected</p>
                                </div>

                            </div>

                        </div>


                        <div class="col-md-6">

                            <div class="facility-about-item">

                                <i class="ri-parking-box-line"></i>

                                <div>
                                    <h5>Free Parking</h5>
                                    <p>Safe & secure</p>
                                </div>

                            </div>

                        </div>


                        <div class="col-md-6">

                            <div class="facility-about-item">

                                <i class="ri-restaurant-line"></i>

                                <div>
                                    <h5>Restaurant</h5>
                                    <p>Fresh & delicious</p>
                                </div>

                            </div>

                        </div>


                        <div class="col-md-6">

                            <div class="facility-about-item">

                                <i class="ri-t-shirt-line"></i>

                                <div>
                                    <h5>Laundry</h5>
                                    <p>Fresh & clean</p>
                                </div>

                            </div>

                        </div>


                        <div class="col-md-6">

                            <div class="facility-about-item">

                                <i class="ri-car-line"></i>

                                <div>
                                    <h5>Airport Pickup</h5>
                                    <p>Easy transfer</p>
                                </div>

                            </div>

                        </div>


                        <div class="col-md-6">

                            <div class="facility-about-item">

                                <i class="ri-customer-service-line"></i>

                                <div>
                                    <h5>24/7 Service</h5>
                                    <p>Always available</p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Image -->

            <div class="col-lg-6">

                <div class="facilities-about-image">

                    <img
                        src="{{ asset('frontend/assets/image/temple.jpeg') }}"
                        alt="Hotel Facilities"
                    >

                    <div class="facilities-floating-card">

                        <i class="ri-heart-3-fill"></i>

                        <div>
                            <strong>Feel At Home</strong>
                            <small>Relax • Enjoy • Explore</small>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================
     CALL TO ACTION
========================================= -->

<section class="about-cta-section">

    <div class="container">

        <div class="about-cta-content">

            <div>

                <div class="about-section-label">

                    <span></span>

                    <p>Your Journey Starts Here</p>

                </div>

                <h2>Make Your Stay Memorable</h2>

                <p>
                    Relax, explore and create wonderful memories
                    at The Hotel Tirupati.
                </p>

            </div>

            <div class="about-cta-buttons">

                <a href=""
                   class="about-orange-btn">
                    Explore Rooms
                    <i class="ri-arrow-right-line"></i>
                </a>

                <a href="{{ route('frontend.contact') }}"
                   class="about-outline-btn">
                    Contact Us
                </a>

            </div>

        </div>

    </div>

</section>

@endsection
