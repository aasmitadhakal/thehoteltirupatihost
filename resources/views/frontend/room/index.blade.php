@extends('layouts.frontend.master')

@section('content')

{{-- =========================================
     ROOMS HERO
========================================= --}}
<section class="rooms-page-hero">

    <div class="container">

        <div class="rooms-hero-content">

            <div class="rooms-small-title">
                <span></span>
                <p>Our Rooms</p>
            </div>

            <h1>
                Stay In
                <span>Comfort</span>
            </h1>

            <p>
                Relax in thoughtfully designed rooms with modern
                comforts, warm hospitality and everything you need
                for a pleasant stay.
            </p>

            <div class="rooms-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <i class="ri-arrow-right-line"></i>
                <span>Rooms</span>
            </div>

        </div>

    </div>

</section>


{{-- =========================================
     INTRO
========================================= --}}
<section class="rooms-intro-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <div class="rooms-intro-image">

                    <img
                        src="{{ asset('frontend/assets/image/room.jpg') }}"
                        alt="Comfortable Hotel Room"
                    >

                    <div class="rooms-image-note">

                        <i class="ri-hotel-bed-line"></i>

                        <div>
                            <strong>Comfortable Stay</strong>
                            <small>Relax • Rest • Enjoy</small>
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="rooms-intro-content">

                    <div class="rooms-section-label">
                        <span></span>
                        <p>Stay With Us</p>
                    </div>

                    <h2>
                        A Comfortable Place
                        <span>To Call Home</span>
                    </h2>

                    <p>
                        At The Hotel Tirupati, every room is designed
                        with your comfort in mind. Whether you are
                        travelling for business, enjoying a family
                        holiday or taking a short break, our rooms
                        provide a peaceful place to relax.
                    </p>

                    <p>
                        Enjoy clean interiors, comfortable beds,
                        convenient facilities and warm Nepali
                        hospitality throughout your stay.
                    </p>

                    <div class="rooms-intro-features">

                        <div>
                            <i class="ri-wifi-line"></i>
                            <span>Free Wi-Fi</span>
                        </div>

                        <div>
                            <i class="ri-air-conditioning-line"></i>
                            <span>Air Conditioning</span>
                        </div>

                        <div>
                            <i class="ri-tv-line"></i>
                            <span>Smart TV</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================
     ROOM LIST
========================================= --}}
<section class="hotel-rooms-section">

    <div class="container">

        <div class="rooms-section-heading">

            <div class="rooms-section-label">
                <span></span>
                <p>Choose Your Room</p>
            </div>

            <h2>
                Find Your Perfect Stay
            </h2>

            <p>
                Comfortable rooms designed for relaxing nights
                and memorable stays.
            </p>

        </div>


        <div class="row g-4 mt-4">


            {{-- ROOM 1 --}}
            <div class="col-lg-4 col-md-6">

                <div class="hotel-room-card">

                    <div class="room-card-image">

                        <img
                            src="{{ asset('frontend/assets/image/room.jpg') }}"
                            alt="Standard Room"
                        >

                        <span class="room-type-badge">
                            Popular
                        </span>

                    </div>


                    <div class="room-card-content">

                        <h3>Standard Room</h3>

                        <p class="room-short-description">
                            A cozy and comfortable room for
                            solo travellers and couples.
                        </p>


                        <div class="room-details">

                            <span>
                                <i class="ri-user-line"></i>
                                2 Guests
                            </span>

                            <span>
                                <i class="ri-hotel-bed-line"></i>
                                1 Bed
                            </span>

                            <span>
                                <i class="ri-ruler-line"></i>
                                250 sq.ft.
                            </span>

                        </div>


                        <div class="room-card-bottom">

                            <div class="room-price">

                                <strong>$80</strong>

                                <span>/ night</span>

                            </div>

                            <a href="#"
                               class="room-book-btn">

                                Book Now

                                <i class="ri-arrow-right-line"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>


            {{-- ROOM 2 --}}
            <div class="col-lg-4 col-md-6">

                <div class="hotel-room-card">

                    <div class="room-card-image">

                        <img
                            src="{{ asset('frontend/assets/image/room.jpg') }}"
                            alt="Deluxe Room"
                        >

                        <span class="room-type-badge">
                            Best Value
                        </span>

                    </div>


                    <div class="room-card-content">

                        <h3>Deluxe Room</h3>

                        <p class="room-short-description">
                            A spacious room offering extra comfort
                            and a relaxing atmosphere.
                        </p>


                        <div class="room-details">

                            <span>
                                <i class="ri-user-line"></i>
                                2 Guests
                            </span>

                            <span>
                                <i class="ri-hotel-bed-line"></i>
                                1 King Bed
                            </span>

                            <span>
                                <i class="ri-ruler-line"></i>
                                320 sq.ft.
                            </span>

                        </div>


                        <div class="room-card-bottom">

                            <div class="room-price">

                                <strong>$100</strong>

                                <span>/ night</span>

                            </div>

                            <a href="#"
                               class="room-book-btn">

                                Book Now

                                <i class="ri-arrow-right-line"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>


            {{-- ROOM 3 --}}
            <div class="col-lg-4 col-md-6">

                <div class="hotel-room-card">

                    <div class="room-card-image">

                        <img
                            src="{{ asset('frontend/assets/image/room.jpg') }}"
                            alt="Family Room"
                        >

                        <span class="room-type-badge">
                            Family Choice
                        </span>

                    </div>


                    <div class="room-card-content">

                        <h3>Family Room</h3>

                        <p class="room-short-description">
                            Spacious accommodation made for
                            families and longer stays.
                        </p>


                        <div class="room-details">

                            <span>
                                <i class="ri-user-line"></i>
                                4 Guests
                            </span>

                            <span>
                                <i class="ri-hotel-bed-line"></i>
                                2 Beds
                            </span>

                            <span>
                                <i class="ri-ruler-line"></i>
                                400 sq.ft.
                            </span>

                        </div>


                        <div class="room-card-bottom">

                            <div class="room-price">

                                <strong>$130</strong>

                                <span>/ night</span>

                            </div>

                            <a href="#"
                               class="room-book-btn">

                                Book Now

                                <i class="ri-arrow-right-line"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>


            {{-- ROOM 4 --}}
            <div class="col-lg-4 col-md-6">

                <div class="hotel-room-card">

                    <div class="room-card-image">

                        <img
                            src="{{ asset('frontend/assets/image/room.jpg') }}"
                            alt="Suite Room"
                        >

                    </div>


                    <div class="room-card-content">

                        <h3>Suite Room</h3>

                        <p class="room-short-description">
                            An elegant and spacious room for guests
                            looking for an extra special stay.
                        </p>


                        <div class="room-details">

                            <span>
                                <i class="ri-user-line"></i>
                                3 Guests
                            </span>

                            <span>
                                <i class="ri-hotel-bed-line"></i>
                                1 King Bed
                            </span>

                            <span>
                                <i class="ri-ruler-line"></i>
                                450 sq.ft.
                            </span>

                        </div>


                        <div class="room-card-bottom">

                            <div class="room-price">

                                <strong>$150</strong>

                                <span>/ night</span>

                            </div>

                            <a href="#"
                               class="room-book-btn">

                                Book Now

                                <i class="ri-arrow-right-line"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>


            {{-- ROOM 5 --}}
            <div class="col-lg-4 col-md-6">

                <div class="hotel-room-card">

                    <div class="room-card-image">

                        <img
                            src="{{ asset('frontend/assets/image/room.jpg') }}"
                            alt="Twin Room"
                        >

                    </div>


                    <div class="room-card-content">

                        <h3>Twin Room</h3>

                        <p class="room-short-description">
                            Two comfortable beds and practical
                            facilities for friends or colleagues.
                        </p>


                        <div class="room-details">

                            <span>
                                <i class="ri-user-line"></i>
                                2 Guests
                            </span>

                            <span>
                                <i class="ri-hotel-bed-line"></i>
                                2 Beds
                            </span>

                            <span>
                                <i class="ri-ruler-line"></i>
                                300 sq.ft.
                            </span>

                        </div>


                        <div class="room-card-bottom">

                            <div class="room-price">

                                <strong>$95</strong>

                                <span>/ night</span>

                            </div>

                            <a href="#"
                               class="room-book-btn">

                                Book Now

                                <i class="ri-arrow-right-line"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>


            {{-- ROOM 6 --}}
            <div class="col-lg-4 col-md-6">

                <div class="hotel-room-card">

                    <div class="room-card-image">

                        <img
                            src="{{ asset('frontend/assets/image/room.jpg') }}"
                            alt="Premium Room"
                        >

                    </div>


                    <div class="room-card-content">

                        <h3>Premium Room</h3>

                        <p class="room-short-description">
                            Enjoy a refined stay with extra space,
                            comfort and thoughtful amenities.
                        </p>


                        <div class="room-details">

                            <span>
                                <i class="ri-user-line"></i>
                                3 Guests
                            </span>

                            <span>
                                <i class="ri-hotel-bed-line"></i>
                                1 King Bed
                            </span>

                            <span>
                                <i class="ri-ruler-line"></i>
                                380 sq.ft.
                            </span>

                        </div>


                        <div class="room-card-bottom">

                            <div class="room-price">

                                <strong>$120</strong>

                                <span>/ night</span>

                            </div>

                            <a href="#"
                               class="room-book-btn">

                                Book Now

                                <i class="ri-arrow-right-line"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================
     ROOM FACILITIES
========================================= --}}
<section class="room-facilities-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <div class="room-facilities-content">

                    <div class="rooms-section-label">

                        <span></span>

                        <p>Room Facilities</p>

                    </div>

                    <h2>
                        Everything You Need
                        <span>For A Relaxing Stay</span>
                    </h2>

                    <p>
                        From everyday essentials to thoughtful
                        conveniences, our rooms are equipped to
                        make your stay comfortable.
                    </p>


                    <div class="facilities-grid">

                        <div>
                            <i class="ri-wifi-line"></i>
                            <span>Free Wi-Fi</span>
                        </div>

                        <div>
                            <i class="ri-tv-line"></i>
                            <span>Television</span>
                        </div>

                        <div>
                            <i class="ri-air-conditioning-line"></i>
                            <span>Air Conditioning</span>
                        </div>

                        <div>
                            <i class="ri-cup-line"></i>
                            <span>Tea & Coffee</span>
                        </div>

                        <div>
                            <i class="ri-drop-line"></i>
                            <span>Hot Water</span>
                        </div>

                        <div>
                            <i class="ri-customer-service-2-line"></i>
                            <span>24/7 Support</span>
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="room-facilities-image">

                    <img
                        src="{{ asset('frontend/assets/image/room.jpg') }}"
                        alt="Hotel Room Facilities"
                    >

                    <div class="room-facility-floating">

                        <i class="ri-heart-3-fill"></i>

                        <div>
                            <strong>Feel At Home</strong>
                            <small>Relax • Rest • Enjoy</small>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================
     CTA
========================================= --}}
<section class="rooms-cta-section">

    <div class="container">

        <div class="rooms-cta-content">

            <div>

                <div class="rooms-section-label">

                    <span></span>

                    <p>Your Comfortable Stay Awaits</p>

                </div>

                <h2>
                    Ready To Book Your Stay?
                </h2>

                <p>
                    Choose your room and experience warm hospitality
                    at The Hotel Tirupati.
                </p>

            </div>


            <div class="rooms-cta-buttons">

                <a href="#"
                   class="room-orange-btn">

                    Book Your Room

                    <i class="ri-arrow-right-line"></i>

                </a>

                <a href="{{ route('frontend.contact') }}"
                   class="room-outline-btn">

                    Contact Us

                </a>

            </div>

        </div>

    </div>

</section>

@endsection