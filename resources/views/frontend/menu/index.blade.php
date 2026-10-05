@extends('layouts.frontend.master')

@section('content')

{{-- =========================================
     MENU HERO
========================================= --}}
<section class="menu-page-hero">

    <div class="container">

        <div class="menu-hero-content">

            <div class="menu-small-title">
                <span></span>
                <p>Our Food Menu</p>
            </div>

            <h1>
                Taste the
                <span>Best</span>
            </h1>

            <p>
                Enjoy delicious Nepali, local and continental dishes
                prepared with fresh ingredients and served with
                warmth and care.
            </p>

            <div class="menu-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <i class="ri-arrow-right-line"></i>
                <span>Menu</span>
            </div>

        </div>

    </div>

</section>


{{-- =========================================
     MENU INTRO
========================================= --}}
<section class="menu-intro-section">

    <div class="container">

        <div class="row align-items-center g-5">

            {{-- IMAGE --}}
            <div class="col-lg-6">

                <div class="menu-intro-image">

                    <img
                        src="{{ asset('frontend/assets/image/food.jpg') }}"
                        alt="Hotel Tirupati Food"
                    >

                    <div class="menu-image-note">

                        <i class="ri-restaurant-line"></i>

                        <div>
                            <strong>Fresh & Delicious</strong>
                            <small>Prepared With Care</small>
                        </div>

                    </div>

                </div>

            </div>


            {{-- CONTENT --}}
            <div class="col-lg-6">

                <div class="menu-intro-content">

                    <div class="menu-section-label">
                        <span></span>
                        <p>Food Menu</p>
                    </div>

                    <h2>
                        Good Food,
                        <span>Good Mood</span>
                    </h2>

                    <p>
                        At The Hotel Tirupati, we believe that good
                        food makes every stay more memorable. Our
                        kitchen brings together traditional Nepali
                        flavors and delicious international favorites.
                    </p>

                    <p>
                        From a hearty breakfast to a relaxing dinner,
                        every dish is prepared with fresh ingredients
                        and served with care.
                    </p>

                    <div class="menu-intro-features">

                        <div>
                            <i class="ri-restaurant-2-line"></i>
                            <span>Fresh Ingredients</span>
                        </div>

                        <div>
                            <i class="ri-heart-3-line"></i>
                            <span>Made With Care</span>
                        </div>

                        <div>
                            <i class="ri-leaf-line"></i>
                            <span>Authentic Flavors</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================
     MENU CATEGORY
========================================= --}}
<section class="hotel-menu-section">

    <div class="container">

        <div class="menu-section-heading">

            <div class="menu-section-label">
                <span></span>
                <p>Explore Our Menu</p>
            </div>

            <h2>
                Something Delicious
                <span>For Everyone</span>
            </h2>

            <p>
                Discover our selection of freshly prepared dishes,
                local favorites and refreshing beverages.
            </p>

        </div>


        {{-- CATEGORY BUTTONS --}}
        <div class="menu-category-tabs">

            <button class="active">
                All
            </button>

            <button>
                Nepali
            </button>

            <button>
                Continental
            </button>

            <button>
                Local Special
            </button>

            <button>
                Beverages
            </button>

        </div>


        {{-- =====================================
             MENU CARDS
        ====================================== --}}
        <div class="row g-4 mt-3">


            {{-- ITEM 1 --}}
            <div class="col-lg-4 col-md-6">

                <div class="menu-food-card">

                    <div class="menu-food-image">

                        <img
                            src="{{ asset('frontend/assets/image/food.jpg') }}"
                            alt="Nepali Thali"
                        >

                        <span class="menu-food-category">
                            Nepali
                        </span>

                    </div>

                    <div class="menu-food-content">

                        <div class="menu-food-title">

                            <h3>Nepali Thali</h3>

                            <strong>$12</strong>

                        </div>

                        <p>
                            Traditional Nepali meal served with
                            rice, dal, vegetables, achar and curry.
                        </p>

                    </div>

                </div>

            </div>


            {{-- ITEM 2 --}}
            <div class="col-lg-4 col-md-6">

                <div class="menu-food-card">

                    <div class="menu-food-image">

                        <img
                            src="{{ asset('frontend/assets/image/food.jpg') }}"
                            alt="Chicken Curry"
                        >

                        <span class="menu-food-category">
                            Local Special
                        </span>

                    </div>

                    <div class="menu-food-content">

                        <div class="menu-food-title">

                            <h3>Chicken Curry</h3>

                            <strong>$10</strong>

                        </div>

                        <p>
                            Tender chicken cooked with aromatic
                            Nepali spices and fresh herbs.
                        </p>

                    </div>

                </div>

            </div>


            {{-- ITEM 3 --}}
            <div class="col-lg-4 col-md-6">

                <div class="menu-food-card">

                    <div class="menu-food-image">

                        <img
                            src="{{ asset('frontend/assets/image/food.jpg') }}"
                            alt="Momo"
                        >

                        <span class="menu-food-category">
                            Nepali
                        </span>

                    </div>

                    <div class="menu-food-content">

                        <div class="menu-food-title">

                            <h3>Chicken Momo</h3>

                            <strong>$8</strong>

                        </div>

                        <p>
                            Soft steamed dumplings filled with
                            seasoned chicken and served with achar.
                        </p>

                    </div>

                </div>

            </div>


            {{-- ITEM 4 --}}
            <div class="col-lg-4 col-md-6">

                <div class="menu-food-card">

                    <div class="menu-food-image">

                        <img
                            src="{{ asset('frontend/assets/image/food.jpg') }}"
                            alt="Chicken Pizza"
                        >

                        <span class="menu-food-category">
                            Continental
                        </span>

                    </div>

                    <div class="menu-food-content">

                        <div class="menu-food-title">

                            <h3>Chicken Pizza</h3>

                            <strong>$14</strong>

                        </div>

                        <p>
                            Freshly baked pizza topped with chicken,
                            vegetables and melted cheese.
                        </p>

                    </div>

                </div>

            </div>


            {{-- ITEM 5 --}}
            <div class="col-lg-4 col-md-6">

                <div class="menu-food-card">

                    <div class="menu-food-image">

                        <img
                            src="{{ asset('frontend/assets/image/food.jpg') }}"
                            alt="Club Sandwich"
                        >

                        <span class="menu-food-category">
                            Continental
                        </span>

                    </div>

                    <div class="menu-food-content">

                        <div class="menu-food-title">

                            <h3>Club Sandwich</h3>

                            <strong>$9</strong>

                        </div>

                        <p>
                            Fresh bread layered with chicken,
                            vegetables, egg and delicious sauce.
                        </p>

                    </div>

                </div>

            </div>


            {{-- ITEM 6 --}}
            <div class="col-lg-4 col-md-6">

                <div class="menu-food-card">

                    <div class="menu-food-image">

                        <img
                            src="{{ asset('frontend/assets/image/food.jpg') }}"
                            alt="Fresh Juice"
                        >

                        <span class="menu-food-category">
                            Beverage
                        </span>

                    </div>

                    <div class="menu-food-content">

                        <div class="menu-food-title">

                            <h3>Fresh Fruit Juice</h3>

                            <strong>$5</strong>

                        </div>

                        <p>
                            Freshly prepared seasonal fruit juice
                            served chilled.
                        </p>

                    </div>

                </div>

            </div>


            {{-- ITEM 7 --}}
            <div class="col-lg-4 col-md-6">

                <div class="menu-food-card">

                    <div class="menu-food-image">

                        <img
                            src="{{ asset('frontend/assets/image/food.jpg') }}"
                            alt="Fried Rice"
                        >

                        <span class="menu-food-category">
                            Local Special
                        </span>

                    </div>

                    <div class="menu-food-content">

                        <div class="menu-food-title">

                            <h3>Chicken Fried Rice</h3>

                            <strong>$9</strong>

                        </div>

                        <p>
                            Flavorful fried rice prepared with
                            chicken, vegetables and fresh herbs.
                        </p>

                    </div>

                </div>

            </div>


            {{-- ITEM 8 --}}
            <div class="col-lg-4 col-md-6">

                <div class="menu-food-card">

                    <div class="menu-food-image">

                        <img
                            src="{{ asset('frontend/assets/image/food.jpg') }}"
                            alt="Pasta"
                        >

                        <span class="menu-food-category">
                            Continental
                        </span>

                    </div>

                    <div class="menu-food-content">

                        <div class="menu-food-title">

                            <h3>Chicken Pasta</h3>

                            <strong>$11</strong>

                        </div>

                        <p>
                            Creamy pasta prepared with chicken,
                            herbs and fresh vegetables.
                        </p>

                    </div>

                </div>

            </div>


            {{-- ITEM 9 --}}
            <div class="col-lg-4 col-md-6">

                <div class="menu-food-card">

                    <div class="menu-food-image">

                        <img
                            src="{{ asset('frontend/assets/image/food.jpg') }}"
                            alt="Milk Tea"
                        >

                        <span class="menu-food-category">
                            Beverage
                        </span>

                    </div>

                    <div class="menu-food-content">

                        <div class="menu-food-title">

                            <h3>Milk Tea</h3>

                            <strong>$3</strong>

                        </div>

                        <p>
                            Warm and refreshing Nepali-style milk
                            tea prepared with aromatic spices.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================
     CHEF / FOOD EXPERIENCE
========================================= --}}
<section class="food-experience-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <div class="food-experience-image">

                    <img
                        src="{{ asset('frontend/assets/image/food.jpg') }}"
                        alt="Fresh Hotel Food"
                    >

                    <div class="food-experience-note">

                        <i class="ri-heart-3-fill"></i>

                        <div>
                            <strong>Made With Love</strong>
                            <small>Fresh • Tasty • Delicious</small>
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="food-experience-content">

                    <div class="menu-section-label">

                        <span></span>

                        <p>Our Food Promise</p>

                    </div>

                    <h2>
                        Fresh Food,
                        <span>Happy Guests</span>
                    </h2>

                    <p>
                        We carefully select fresh ingredients to
                        ensure every meal served at The Hotel
                        Tirupati is delicious and satisfying.
                    </p>

                    <p>
                        Whether you are enjoying a traditional Nepali
                        meal or your favorite continental dish, our
                        team prepares every plate with attention
                        and care.
                    </p>


                    <div class="food-promise-list">

                        <div>
                            <i class="ri-checkbox-circle-fill"></i>
                            <span>Fresh Ingredients</span>
                        </div>

                        <div>
                            <i class="ri-checkbox-circle-fill"></i>
                            <span>Authentic Flavors</span>
                        </div>

                        <div>
                            <i class="ri-checkbox-circle-fill"></i>
                            <span>Prepared With Care</span>
                        </div>

                        <div>
                            <i class="ri-checkbox-circle-fill"></i>
                            <span>Friendly Service</span>
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
<section class="menu-cta-section">

    <div class="container">

        <div class="menu-cta-content">

            <div>

                <div class="menu-section-label">

                    <span></span>

                    <p>Your Table Awaits</p>

                </div>

                <h2>
                    Come Taste The Goodness
                </h2>

                <p>
                    Enjoy delicious food, warm hospitality and
                    wonderful moments at The Hotel Tirupati.
                </p>

            </div>


            <div class="menu-cta-buttons">

                <a href="{{ route('frontend.contact') }}"
                   class="menu-orange-btn">

                    Contact Us

                    <i class="ri-arrow-right-line"></i>

                </a>

                <a href="{{ url('/') }}"
                   class="menu-outline-btn">

                    Back To Home

                </a>

            </div>

        </div>

    </div>

</section>

@endsection