@section('seo')
    @include('frontend.seo', [
        'name' => $service_page->seo_title ?? '',
        'title' => $service_page->seo_title ?? $service_page->title,
        'description' => $service_page->meta_description ?? '',
        'keyword' => $service_page->meta_keywords ?? '',
        'schema' => $service_page->seo_schema ?? '',
        'created_at' => $service_page->created_at,
        'updated_at' => $service_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')

@section('content')

<!-- =========================================
     SERVICE PAGE HERO
========================================= -->

<section class="service-page-hero">

    <div class="container">

        <div class="service-hero-content">

            <div class="service-small-title">
                <span></span>
                <p>Our Services</p>
            </div>

            <h1>
                Comfort,
                <span>Convenience & Care</span>
            </h1>

            <p>
                From comfortable rooms and delicious food to convenient
                services, we are here to make your stay easy, relaxing
                and memorable.
            </p>

            <div class="service-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <i class="ri-arrow-right-line"></i>
                <span>Services</span>
            </div>

        </div>

    </div>

</section>


<!-- =========================================
     INTRODUCTION
========================================= -->

<section class="service-intro-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- Image -->

            <div class="col-lg-6">

                <div class="service-intro-image">

                    <img
                        src="{{ asset('frontend/assets/image/temple.jpeg') }}"
                        alt="Hotel Tirupati Services"
                    >

                    <div class="service-image-note">
                        <i class="ri-heart-3-fill"></i>

                        <div>
                            <strong>Made For You</strong>
                            <small>Comfort • Care • Hospitality</small>
                        </div>
                    </div>

                </div>

            </div>


            <!-- Content -->

            <div class="col-lg-6">

                <div class="service-intro-content">

                    <div class="service-section-label">

                        <span></span>

                        <p>What We Offer</p>

                    </div>

                    <h2>
                        Everything You Need
                        <span>For A Comfortable Stay</span>
                    </h2>

                    <p>
                        At The Hotel Tirupati, we believe that a great stay
                        is about more than just a comfortable room. That's
                        why we offer a range of thoughtful services designed
                        to make your visit convenient and enjoyable.
                    </p>

                    <p>
                        Whether you are travelling for business, enjoying
                        a family trip or simply looking for a relaxing stay,
                        our team is always ready to help.
                    </p>

                    <a href="{{ route('frontend.contact') }}"
                       class="service-orange-btn">

                        Contact Us

                        <i class="ri-arrow-right-line"></i>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================
     OUR SERVICES
========================================= -->

<section class="hotel-services-section">

    <div class="container">

        <div class="text-center service-section-heading">

            <div class="service-section-label justify-content-center">

                <span></span>

                <p>Our Services</p>

            </div>

            <h2>
                Designed Around Your Comfort
            </h2>

            <p>
                Thoughtful services to make every moment of your stay
                simple, comfortable and enjoyable.
            </p>

        </div>


        <div class="row g-4 mt-4">


            <!-- Service 1 -->

            <div class="col-lg-4 col-md-6">

                <div class="hotel-service-card">

                    <div class="service-card-icon">
                        <i class="ri-hotel-bed-line"></i>
                    </div>

                    <h4>Comfortable Rooms</h4>

                    <p>
                        Relax in clean, cozy and thoughtfully designed
                        rooms made for a peaceful stay.
                    </p>

                    <a href="">
                        Explore Rooms
                        <i class="ri-arrow-right-line"></i>
                    </a>

                </div>

            </div>


            <!-- Service 2 -->

            <div class="col-lg-4 col-md-6">

                <div class="hotel-service-card">

                    <div class="service-card-icon">
                        <i class="ri-restaurant-2-line"></i>
                    </div>

                    <h4>Delicious Food</h4>

                    <p>
                        Enjoy fresh local and international dishes
                        prepared with quality ingredients and care.
                    </p>

                    <a href="#">
                        View Food Menu
                        <i class="ri-arrow-right-line"></i>
                    </a>

                </div>

            </div>


            <!-- Service 3 -->

            <div class="col-lg-4 col-md-6">

                <div class="hotel-service-card">

                    <div class="service-card-icon">
                        <i class="ri-wifi-line"></i>
                    </div>

                    <h4>Free Wi-Fi</h4>

                    <p>
                        Stay connected with complimentary Wi-Fi
                        available throughout the hotel.
                    </p>

                    <a href="#">
                        Learn More
                        <i class="ri-arrow-right-line"></i>
                    </a>

                </div>

            </div>


            <!-- Service 4 -->

            <div class="col-lg-4 col-md-6">

                <div class="hotel-service-card">

                    <div class="service-card-icon">
                        <i class="ri-parking-box-line"></i>
                    </div>

                    <h4>Free Parking</h4>

                    <p>
                        Enjoy convenient and secure parking during
                        your stay with us.
                    </p>

                    <a href="#">
                        Learn More
                        <i class="ri-arrow-right-line"></i>
                    </a>

                </div>

            </div>


            <!-- Service 5 -->

            <div class="col-lg-4 col-md-6">

                <div class="hotel-service-card">

                    <div class="service-card-icon">
                        <i class="ri-t-shirt-line"></i>
                    </div>

                    <h4>Laundry Service</h4>

                    <p>
                        Keep your clothes fresh and clean with our
                        convenient laundry service.
                    </p>

                    <a href="#">
                        Learn More
                        <i class="ri-arrow-right-line"></i>
                    </a>

                </div>

            </div>


            <!-- Service 6 -->

            <div class="col-lg-4 col-md-6">

                <div class="hotel-service-card">

                    <div class="service-card-icon">
                        <i class="ri-car-line"></i>
                    </div>

                    <h4>Airport Pickup</h4>

                    <p>
                        Start your journey comfortably with our
                        convenient airport pickup service.
                    </p>

                    <a href="#">
                        Learn More
                        <i class="ri-arrow-right-line"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================
     FEATURED SERVICE
========================================= -->

<section class="service-feature-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- Content -->

            <div class="col-lg-6">

                <div class="service-feature-content">

                    <div class="service-section-label">

                        <span></span>

                        <p>Delicious Dining</p>

                    </div>

                    <h2>
                        Taste The Best
                        <span>At Our Restaurant</span>
                    </h2>

                    <p>
                        Enjoy a variety of fresh, local and continental
                        dishes prepared with care. From traditional Nepali
                        meals to familiar international favorites, our menu
                        is designed to satisfy every guest.
                    </p>

                    <div class="service-food-points">

                        <div>
                            <i class="ri-restaurant-line"></i>
                            <span>Fresh Ingredients</span>
                        </div>

                        <div>
                            <i class="ri-leaf-line"></i>
                            <span>Local Flavors</span>
                        </div>

                        <div>
                            <i class="ri-heart-3-line"></i>
                            <span>Made With Care</span>
                        </div>

                    </div>

                    <a href="#"
                       class="service-orange-btn">

                        View Full Menu

                        <i class="ri-arrow-right-line"></i>

                    </a>

                </div>

            </div>


            <!-- Image -->

            <div class="col-lg-6">

                <div class="service-feature-image">

                    <img
                        src="{{ asset('frontend/assets/image/food.jpg') }}"
                        alt="Hotel Restaurant"
                    >

                    <div class="food-floating-card">

                        <i class="ri-restaurant-2-fill"></i>

                        <div>
                            <strong>Fresh & Delicious</strong>
                            <small>Local & Continental Cuisine</small>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================
     SERVICE BENEFITS
========================================= -->

<section class="service-benefits-section">

    <div class="container">

        <div class="text-center service-section-heading">

            <div class="service-section-label justify-content-center">

                <span></span>

                <p>Why Our Services</p>

            </div>

            <h2>
                Your Comfort Comes First
            </h2>

            <p>
                We focus on the little details that make your stay
                feel special.
            </p>

        </div>


        <div class="row g-4 mt-4">

            <div class="col-lg-4 col-md-6">

                <div class="service-benefit-card">

                    <div class="benefit-number">
                        01
                    </div>

                    <h4>Friendly Hospitality</h4>

                    <p>
                        Our team is always ready to welcome you with
                        warmth and assist whenever you need us.
                    </p>

                </div>

            </div>


            <div class="col-lg-4 col-md-6">

                <div class="service-benefit-card">

                    <div class="benefit-number">
                        02
                    </div>

                    <h4>Reliable Service</h4>

                    <p>
                        We pay attention to every detail so your stay
                        remains smooth and stress-free.
                    </p>

                </div>

            </div>


            <div class="col-lg-4 col-md-6">

                <div class="service-benefit-card">

                    <div class="benefit-number">
                        03
                    </div>

                    <h4>Guest Satisfaction</h4>

                    <p>
                        Your comfort and satisfaction are at the heart
                        of everything we do.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================
     CTA
========================================= -->

<section class="service-cta-section">

    <div class="container">

        <div class="service-cta-content">

            <div>

                <div class="service-section-label">

                    <span></span>

                    <p>Your Journey Starts Here</p>

                </div>

                <h2>
                    Let Us Make Your Stay Special
                </h2>

                <p>
                    Relax, enjoy and experience warm hospitality
                    at The Hotel Tirupati.
                </p>
            </div>
            <div class="service-cta-buttons">
                <a href=""
                   class="service-orange-btn">

                    Explore Rooms

                    <i class="ri-arrow-right-line"></i>

                </a>
                <a href="{{ route('frontend.contact') }}"
                   class="service-outline-btn">

                    Contact Us
                </a>
            </div>

        </div>

    </div>

</section>

@endsection