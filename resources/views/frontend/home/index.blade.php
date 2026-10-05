@section('seo')
    @include('frontend.seo', [
        'name' => $settings['homepage_title'] ?? '',
        'title' => $settings['homepage_seo_title'] ?? '',
        'description' => $settings['home_seo_description'] ?? '',
        'keyword' => $settings['homepage_seo_keywords'] ?? '',
        'created_at' => '2024-04-26T08:09:15+00:00',
        'updated_at' => '2024-04-26T10:54:05+00:00',
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    @foreach ($popup as $popups)
        <!-- Bootstrap Modal -->
        <div class="modal fade" id="popupModal{{ $popups->id }}" tabindex="-1" aria-labelledby="popupModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="d-flex">
                        <div class="modal-headerpopup">
                            <button class="btn-close red-close-btn" data-bs-dismiss="modal" type="button"
                                aria-label="Close">
                            </button>
                        </div>
                    </div>
                    <div class="modal-body text-center">
                        @if ($popups->image)
                            <img class="img-fluid popup-img" src="{{ asset($popups->image) }}" alt="Popup Image"
                                style=" object-fit: fill;">
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Auto Trigger Script -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var myModal = new bootstrap.Modal(document.getElementById('popupModal{{ $popups->id }}'));
                myModal.show();
            });
        </script>
    @endforeach
    <section class="main-container">
        <section class="hotel-hero"
            style="background-image: url('{{ $sliders && $sliders->image ? asset($sliders->image) : asset('frontend/assets/image/main.jpg') }}');">

            <!-- Dark gradient overlay -->
            <div class="hero-overlay"></div>

            <div class="container hero-container">

                <!-- LEFT CONTENT -->
                <div class="hero-content">

                    <div class="welcome-text">
                        Welcome to
                    </div>

                    <h1 class="hero-title">
                        The Hotel <span>Tirupati</span>
                    </h1>

                    <p class="hero-subtitle">
                        Comfortable Rooms &nbsp; | &nbsp;
                        Delicious Food &nbsp; | &nbsp;
                        Unforgettable Experience
                    </p>

                    <p class="hero-description">
                        Experience a perfect blend of comfort, elegance and warm
                        Nepali hospitality. Relax, enjoy delicious food and make
                        unforgettable memories.
                    </p>

                    <a href="" class="hero-btn">
                        Explore Our Rooms
                        <i class="ri-arrow-right-line"></i>
                    </a>

                </div>


                <!-- RIGHT RESERVATION CARD -->
                <div class="reservation-card">

                    <div class="reservation-header">

                        <div class="reservation-icon">
                            <i class="ri-hotel-bed-line"></i>
                        </div>

                        <div>
                            <h4>Room Reservation</h4>
                            <small>Book your stay with us</small>
                        </div>

                    </div>


                    <form action="#" method="POST">

                        @csrf

                        <div class="reservation-field">
                            <label>
                                <i class="ri-calendar-line"></i>
                                Check In
                            </label>

                            <input type="date" name="check_in" value="{{ date('Y-m-d') }}">
                        </div>


                        <div class="reservation-field">
                            <label>
                                <i class="ri-calendar-line"></i>
                                Check Out
                            </label>

                            <input type="date" name="check_out" value="{{ date('Y-m-d', strtotime('+1 day')) }}">
                        </div>


                        {{-- <div class="reservation-field">
                            <label>
                                <i class="ri-user-line"></i>
                                Guests
                            </label>

                            <select name="guests">
                                <option value="1">1 Guest</option>
                                <option value="2" selected>2 Guests</option>
                                <option value="3">3 Guests</option>
                                <option value="4">4 Guests</option>
                                <option value="5">5 Guests</option>
                                <option value="6">6+ Guests</option>
                            </select>
                        </div> --}}


                        <button type="submit" class="reservation-btn">
                            Check Availability
                            <i class="ri-arrow-right-line"></i>
                        </button>

                    </form>

                </div>

            </div>
        </section>
        <section class="hotel-features">
            <div class="container-fluid px-0">
                <div class="hotel-features-wrapper">
        
                    <div class="hotel-feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-bed"></i>
                        </div>
                        <div class="feature-content">
                            <h6>Comfortable Rooms</h6>
                            <p>Cozy & clean rooms</p>
                        </div>
                    </div>
        
                    <div class="hotel-feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="feature-content">
                            <h6>Delicious Food</h6>
                            <p>Local & international cuisine</p>
                        </div>
                    </div>
        
                    <div class="hotel-feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-wifi"></i>
                        </div>
                        <div class="feature-content">
                            <h6>Free Wi-Fi</h6>
                            <p>Stay connected</p>
                        </div>
                    </div>
        
                    <div class="hotel-feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-parking"></i>
                        </div>
                        <div class="feature-content">
                            <h6>Free Parking</h6>
                            <p>Safe & secure</p>
                        </div>
                    </div>
        
                    <div class="hotel-feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="feature-content">
                            <h6>24/7 Service</h6>
                            <p>Always at your service</p>
                        </div>
                    </div>
        
                </div>
            </div>
        </section>
    </section>
    {{-- about us section --}}
    <section class="about-us-section">
        <div class="container">
            <div class="row align-items-center g-4">
    
                {{-- ================= IMAGE ================= --}}
                <div class="col-lg-5 col-md-6">
                    <div class="about-image-wrapper">
    
                        <div class="about-image">
                            <img src="{{ asset($about_us->image_1) }}"
                                 alt="{{ $about_us->title ?? 'About Us' }}">
                        </div>
    
                        {{-- Small handwritten text --}}
                        {{-- <div class="image-note">
                            <span>More than just a stay</span>
                            <small>it's an experience ♡</small>
                        </div>
     --}}
                    </div>
                </div>
    
    
                {{-- ================= CONTENT ================= --}}
                <div class="col-lg-7 col-md-6">
                    <div class="about-content">
    
                        {{-- Small heading --}}
                        <div class="about-small-title">
                            <span>About Us</span>
                        </div>
    
                        {{-- Main title --}}
                        <h2>
                            {{ $about_us->title ?? 'A Place of Comfort and Good Food' }}
                        </h2>
    
                        {{-- Description --}}
                        <div class="about-description">
                            {!! $about_us->description !!}
                        </div>
    
    
                        {{-- ================= FEATURES ================= --}}
                        <div class="about-features">
    
                            <div class="about-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-bed"></i>
                                </div>
                                <div>
                                    <strong>Friendly Stay</strong>
                                    <span>Comfortable rooms</span>
                                </div>
                            </div>
    
                            <div class="about-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-utensils"></i>
                                </div>
                                <div>
                                    <strong>Delicious Food</strong>
                                    <span>Fresh & tasty meals</span>
                                </div>
                            </div>
    
                            <div class="about-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-hotel"></i>
                                </div>
                                <div>
                                    <strong>Comfortable Rooms</strong>
                                    <span>Clean & cozy</span>
                                </div>
                            </div>
    
                            <div class="about-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <strong>Great Location</strong>
                                    <span>Easy to reach</span>
                                </div>
                            </div>
    
                        </div>
    
    
                        {{-- ================= BUTTON ================= --}}
                        <a href="{{ route('frontend.about') }}" class="about-btn">
                            Learn More About Us
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
    
                    </div>
    
    
                    {{-- ================= QUOTE ================= --}}
                    <div class="about-quote">
                        <span>“</span>
                        <p>Good food,<br>good mood!</p>
                    </div>
    
                </div>
    
            </div>
        </div>
    </section>
    {{-- room  section --}}
    <section class="rooms-section">
        <div class="container">
            <div class="row align-items-center g-4">
                {{-- ================= LEFT CONTENT ================= --}}
                <div class="col-lg-3 col-md-12">
                    <div class="rooms-intro">
                        <div class="rooms-small-title">
                            <span>Our Rooms</span>
                        </div>
                        <h2>
                            Stay in Comfort
                        </h2>
                        <p>
                            We offer a variety of rooms to suit your needs,
                            from cozy standard rooms to spacious family suites.
                        </p>
    
                        <a href="" class="rooms-main-btn">
                            View All Rooms
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
    
                    </div>
    
                </div>
    
    
                {{-- ================= ROOM CARDS ================= --}}
                <div class="col-lg-9 col-md-12">

                    <div class="row g-3">
                
                        @foreach ($services->take(3) as $room)
                
                            <div class="col-lg-4 col-md-6 col-12">
                
                                <div class="room-card">
                
                                    <div class="room-image">
                                        <img
                                            src="{{ asset($room->image_1) }}"
                                            alt="{{ $room->title }}"
                                        >
                                    </div>
                
                                    <div class="room-card-content">
                
                                        <h5>
                                            {{ $room->title }}
                                        </h5>
                
                                        <div class="room-details">
                
                                            <span>
                                                <i class="fas fa-user"></i>
                                                {{ $room->capacity ?? 2 }} Adults
                                            </span>
                
                                            <span>
                                                <i class="fas fa-bed"></i>
                                                {{ $room->beds ?? 1 }} Bed
                                            </span>
                
                                        </div>
                
                                        <div class="room-price">
                                            <strong>
                                                ${{ $room->price ?? '80' }}
                                            </strong>
                
                                            <small>/ night</small>
                                        </div>
                
                                        <a
                                            href=""
                                            class="room-book-btn"
                                        >
                                            Book Now
                                        </a>
                
                                    </div>
                
                                </div>
                
                            </div>
                
                        @endforeach
                
                    </div>
                
                </div>
    
            </div>
    
        </div>
    </section>
    <!-- =========================================
     OUR FACILITIES SECTION
========================================= -->

<section class="facilities-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- Image -->
            <div class="col-lg-6">

                <div class="facilities-image">

                    <img
                        src="{{ asset('frontend/assets/image/hotel-facilities.jpg') }}"
                        alt="Hotel Facilities"
                    >

                </div>

            </div>


            <!-- Content -->
            <div class="col-lg-6">

                <div class="facilities-content">

                    <!-- Label -->
                    <div class="section-small-title">
                        <span></span>
                        <p>Our Facilities</p>
                    </div>


                    <h2>
                        Everything You Need
                    </h2>


                    <p class="facilities-description">
                        We provide a range of modern facilities to make your
                        stay comfortable, convenient and memorable. Enjoy the
                        perfect blend of comfort and hospitality with us.
                    </p>


                    <!-- Facilities -->
                    <div class="row g-3">

                        <!-- Swimming Pool -->
                        {{-- <div class="col-md-6">

                            <div class="facility-card">

                                <div class="facility-icon">
                                    <i class="ri-water-flash-line"></i>
                                </div>

                                <div>
                                    <h5>Swimming Pool</h5>
                                    <p>Relax and refresh</p>
                                </div>

                            </div>

                        </div> --}}


                        <!-- Restaurant -->
                        <div class="col-md-6">

                            <div class="facility-card">

                                <div class="facility-icon">
                                    <i class="ri-restaurant-line"></i>
                                </div>

                                <div>
                                    <h5>Restaurant & Dining</h5>
                                    <p>Local & international cuisine</p>
                                </div>

                            </div>

                        </div>


                        <!-- WiFi -->
                        <div class="col-md-6">

                            <div class="facility-card">

                                <div class="facility-icon">
                                    <i class="ri-wifi-line"></i>
                                </div>

                                <div>
                                    <h5>Free Wi-Fi</h5>
                                    <p>Stay connected</p>
                                </div>

                            </div>

                        </div>


                        <!-- Parking -->
                        <div class="col-md-6">

                            <div class="facility-card">

                                <div class="facility-icon">
                                    <i class="ri-parking-box-line"></i>
                                </div>

                                <div>
                                    <h5>Free Parking</h5>
                                    <p>Safe & secure</p>
                                </div>

                            </div>

                        </div>


                        <!-- Laundry -->
                        {{-- <div class="col-md-6">

                            <div class="facility-card">

                                <div class="facility-icon">
                                    <i class="ri-t-shirt-line"></i>
                                </div>

                                <div>
                                    <h5>Laundry Service</h5>
                                    <p>Fresh & clean always</p>
                                </div>

                            </div>

                        </div> --}}


                        <!-- Airport -->
                        {{-- <div class="col-md-6">

                            <div class="facility-card">

                                <div class="facility-icon">
                                    <i class="ri-car-line"></i>
                                </div>

                                <div>
                                    <h5>Airport Pickup</h5>
                                    <p>Easy & convenient</p>
                                </div>

                            </div>

                        </div> --}}


                        <!-- Reception -->
                        <div class="col-md-6">

                            <div class="facility-card">

                                <div class="facility-icon">
                                    <i class="ri-user-star-line"></i>
                                </div>

                                <div>
                                    <h5>24/7 Reception</h5>
                                    <p>Always here for you</p>
                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
    {{-- <section class="page-bg-color">
        <div class="container py-5 ">
            <div class="row g-4 d-flex align-items-center justify-content-center">
                <div class="col-lg-4 about-content-container">
                    <h1 class="fw-bold mb-3">{{ $settings['services_title'] ?? '' }} </h1>
                    <h1 class="text-underline">{{ $settings['services_subtitle'] ?? '' }}</h1>
                    <p class="pt-3"> {{ $settings['services_description'] ?? '' }}</p>
                    <button class="btn1"><a href="{{ route('frontend.service') }}">View All Services</a></button>
                </div>
                <div class="col-lg-8">
                    <div class="row g-3">
                        @foreach ($services as $service)
                            <div class="col-md-6 py-2 position-relative ">
                                <div class="service-card-home p-5">
                                    <div class="icon mb-2">
                                        <img src="{{ asset($service->image_1) }}" alt="">
                                    </div>
                                    <h5 class="fw-bold">{{ $service->title }}</h5>
                                    <p class="line-clamp-3">{{ $service->short_description }}</p>
                                </div>
                                <a class="stretched-link"
                                    href="{{ route('frontend.servicesingle', $service->slug) }}"></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- menusection --}}
<!-- Food Menu Section Start -->
<section class="food-menu-section">

    <div class="container-fluid px-0">

        <div class="food-menu-wrapper">

            <!-- Left Image -->
            <div class="food-menu-image">
                <img src="{{asset('frontend/assets/image/food-menu-background.jpg')}}" alt="Food Menu">
            </div>
            <!-- Content -->
            <div class="food-menu-content">

                <!-- Text -->
                <div class="food-menu-text">

                    <div class="food-menu-label">
                        <span>Food Menu</span>
                    </div>

                    <h2>Taste the Best</h2>

                    <p>
                        We serve a variety of fresh, local and continental dishes.
                        From traditional Nepali meals to your favorite international
                        cuisine, our food is made with love and the finest ingredients.
                    </p>

                    <a href="#" class="food-menu-btn">
                        View Full Menu
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>


                <!-- Food Categories -->
                <div class="food-categories">

                    <!-- Nepali -->
                    <div class="food-category">

                        <div class="food-category-img">
                            <img src="assets/images/nepali-food.jpg"
                                 alt="Nepali Food">
                        </div>

                        <h5>Nepali</h5>

                        <p>
                            Traditional & Authentic
                        </p>

                    </div>


                    <!-- Continental -->
                    <div class="food-category">

                        <div class="food-category-img">
                            <img src="assets/images/continental.jpg"
                                 alt="Continental Food">
                        </div>

                        <h5>Continental</h5>

                        <p>
                            Fresh, Pure & Delicious
                        </p>

                    </div>


                    <!-- Local Special -->
                    <div class="food-category">

                        <div class="food-category-img">
                            <img src="assets/images/local-food.jpg"
                                 alt="Local Special">
                        </div>
                        <h5>Local Special</h5>
                        <p>
                            Famous Local Dishes
                        </p>
                    </div>
                    <!-- Beverages -->
                    <div class="food-category">

                        <div class="food-category-img">
                            <img src="assets/images/beverages.jpg"
                                 alt="Beverages">
                        </div>
                        <h5>Beverages</h5>
                        <p>
                            Tea, Coffee & More
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Food Menu Section End -->
<!-- =========================================
     EXPLORE AROUND US
========================================= -->

<section class="explore-section">

    <div class="container">

        <div class="row align-items-center g-5">


            <!-- Content -->
            <div class="col-lg-5">

                <div class="explore-content">

                    <div class="section-small-title">

                        <span></span>

                        <p>Explore Around Us</p>

                    </div>


                    <h2>
                        Discover • Relax • Explore
                    </h2>


                    <p>
                        Our hotel is perfectly located for exploring nearby
                        attractions, cultural sites and natural beauty.
                        Make your stay more memorable by discovering
                        the best places around us.
                    </p>


                    <a href="#" class="hotel-orange-btn">

                        View Nearby Attractions

                        <i class="ri-arrow-right-line"></i>

                    </a>

                </div>

            </div>


            <!-- Image -->
            <div class="col-lg-4">

                <div class="explore-image">

                    <img
                        src="{{ asset('frontend/assets/image/temple.jpeg') }}"
                        alt="Explore Around Us"
                    >

                    <div class="explore-caption">
                        Explore the Beauty Around Us ♡
                    </div>

                </div>

            </div>


            <!-- Nearby Places -->
            <div class="col-lg-3">

                <div class="nearby-card">

                    <h4>
                        <i class="ri-map-pin-line"></i>
                        Nearby Attractions
                    </h4>


                    <div class="nearby-item">

                        <span>
                            <i class="ri-building-2-line"></i>
                            Temple
                        </span>

                        <strong>5 min</strong>

                    </div>


                    <div class="nearby-item">

                        <span>
                            <i class="ri-tree-line"></i>
                            Park & Nature
                        </span>

                        <strong>8 min</strong>

                    </div>


                    <div class="nearby-item">

                        <span>
                            <i class="ri-shopping-bag-line"></i>
                            Local Market
                        </span>

                        <strong>10 min</strong>

                    </div>


                    <div class="nearby-item">

                        <span>
                            <i class="ri-bus-line"></i>
                            Bus Station
                        </span>

                        <strong>15 min</strong>

                    </div>


                    <div class="nearby-item">

                        <span>
                            <i class="ri-plane-line"></i>
                            Airport
                        </span>

                        <strong>25 min</strong>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Why Choose Us Start -->
<section class="why-choose-section">
    <div class="container">

        <div class="why-choose-wrapper">

            <!-- Why Choose Us -->
            <div class="why-choose-intro">
                <h5>Why Choose Us?</h5>
                <p>We’re here to make your stay special.</p>
            </div>


            <!-- Free Wi-Fi -->
            <div class="hotel-service-item">

                <div class="hotel-service-icon">
                    <i class="ri-wifi-line"></i>
                </div>

                <div class="hotel-service-content">
                    <h6>Free Wi-Fi</h6>
                    <p>Stay connected</p>
                </div>

            </div>


            <!-- Parking -->
            <div class="hotel-service-item">

                <div class="hotel-service-icon">
                    <i class="ri-car-line"></i>
                </div>

                <div class="hotel-service-content">
                    <h6>Parking</h6>
                    <p>Safe & secure</p>
                </div>

            </div>


            <!-- Room Service -->
            <div class="hotel-service-item">

                <div class="hotel-service-icon">
                    <i class="ri-service-line"></i>
                </div>

                <div class="hotel-service-content">
                    <h6>Room Service</h6>
                    <p>24/7 assistance</p>
                </div>

            </div>


            <!-- Laundry -->
            <div class="hotel-service-item">

                <div class="hotel-service-icon">
                    <i class="ri-t-shirt-line"></i>
                </div>

                <div class="hotel-service-content">
                    <h6>Laundry Service</h6>
                    <p>For your convenience</p>
                </div>

            </div>


            <!-- Airport Pickup -->
            <div class="hotel-service-item">

                <div class="hotel-service-icon">
                    <i class="ri-plane-line"></i>
                </div>

                <div class="hotel-service-content">
                    <h6>Airport Pickup</h6>
                    <p>Easy & convenient</p>
                </div>

            </div>

        </div>

    </div>
</section>
<!-- Why Choose Us End -->
  
    {{-- testimonail section --}}
  
<!-- =========================================
     TESTIMONIAL + OUR STORY SECTION
========================================= -->

<section class="testimonial-story-section">

    <div class="container">

        <!-- Section Heading -->
        <div class="section-heading">

            <span class="section-line"></span>

            <h2>Guest Testimonials</h2>

            <p>What Our Guests Say</p>

        </div>


        <div class="row g-4 align-items-stretch">


            <!-- =====================================
                 TESTIMONIAL
            ====================================== -->

            <div class="col-lg-4">

                <div class="testimonial-card">

                    <div class="testimonial-content">

                        <p class="testimonial-text">
                            “The rooms were clean and cozy, the food was amazing,
                            and the staff were so polite and helpful. I had a
                            wonderful stay and will definitely visit again!”
                        </p>


                        <div class="testimonial-bottom">

                            <div class="guest-info">

                                <img
                                    src="{{asset('frontend/assets/image/testimonial-avatar.jpg')}}"
                                    alt="Guest"
                                    class="guest-avatar"
                                >

                                <div>

                                    <h6>Sarah Williams</h6>

                                    <span>Canada</span>

                                    <div class="guest-stars">
                                        ★ ★ ★ ★ ★
                                    </div>

                                </div>

                            </div>


                            <!-- Arrows -->
                            <div class="testimonial-arrows">

                                <button>
                                    <i class="ri-arrow-left-line"></i>
                                </button>

                                <button>
                                    <i class="ri-arrow-right-line"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- =====================================
                 HAPPY GUESTS IMAGE
            ====================================== -->

            <div class="col-lg-4">

                <div class="happy-guests-image">

                    <img
                        src="{{asset("frontend/assets/image/happy-guests.jpg")}}"
                        alt="Happy Guests"
                    >

                </div>

            </div>


            <!-- =====================================
                 OUR STORY
            ====================================== -->

            <div class="col-lg-4">

                <div class="our-story-card">

                    <!-- Story Content -->

                    <div class="our-story-content">

                        <div class="story-label">

                            <span></span>

                            <small>Our History</small>

                        </div>


                        <h2>Our Story</h2>


                        <p>
                            Himalayan Stay was founded with a simple dream —
                            to create a place where people can relax, enjoy good
                            food and feel at home. What started as a small family
                            effort has now grown into a beloved hotel, serving
                            guests from all over the world. We continue to build
                            on our values of hospitality, quality and trust.
                        </p>


                        <a href="#" class="story-btn">

                            Learn More

                            <i class="ri-arrow-right-line"></i>

                        </a>

                    </div>


                    <!-- Mountain Image -->

                    <div class="story-image">

                        <img
                            src="{{asset('frontend/assets/image/our-story-mountain.jpg')}}"
                            alt="Our Story"
                        >

                        <div class="story-image-caption">
                            The journey continues... ♡
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
@endsection
