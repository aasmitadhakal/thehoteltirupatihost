@section('seo')
    @include('frontend.seo', [
        'name' => $blog_page->seo_title ?? '',
        'title' => $blog_page->seo_title ?? $blog_page->title,
        'description' => $blog_page->meta_description ?? '',
        'keyword' => $blog_page->meta_keywords ?? '',
        'schema' => $blog_page->seo_schema ?? '',
        'created_at' => $blog_page->created_at,
        'updated_at' => $blog_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')

@section('content')

{{-- =========================================
    BLOG HERO
========================================= --}}
<section class="blog-page-hero">

    <div class="container">

        <div class="blog-hero-content">

            <div class="blog-small-title">
                <span></span>
                <p>Our Blog</p>
            </div>

            <h1>
                Stories, Travel &
                <span>Hospitality</span>
            </h1>

            <p>
                Discover travel inspiration, local attractions,
                food experiences and stories from The Hotel Tirupati.
            </p>

            <div class="blog-breadcrumb">

                <a href="{{ url('/') }}">
                    Home
                </a>

                <i class="ri-arrow-right-line"></i>

                <span>
                    Blog
                </span>

            </div>

        </div>

    </div>

</section>


{{-- =========================================
    FEATURED BLOG
========================================= --}}
<section class="featured-blog-section">

    <div class="container">

        <div class="row align-items-center g-5">

            {{-- IMAGE --}}
            <div class="col-lg-6">

                <div class="featured-blog-image">

                    <img
                        src="{{ asset('frontend/assets/image/blog1.jpg') }}"
                        alt="Discover Nepal"
                    >

                    <span class="featured-blog-tag">
                        Featured
                    </span>

                </div>

            </div>


            {{-- CONTENT --}}
            <div class="col-lg-6">

                <div class="featured-blog-content">

                    <div class="blog-section-label">

                        <span></span>

                        <p>Featured Story</p>

                    </div>

                    <h2>
                        Discover the Beauty
                        <span>of Nepal</span>
                    </h2>

                    <div class="blog-meta">

                        <span>
                            <i class="ri-calendar-line"></i>
                            September 20, 2026
                        </span>

                        <span>
                            <i class="ri-user-line"></i>
                            Hotel Tirupati
                        </span>

                    </div>

                    <p>
                        Nepal is a country filled with beautiful
                        mountains, ancient temples, peaceful
                        landscapes and warm-hearted people.
                        Whether you are visiting for adventure,
                        culture or relaxation, Nepal has something
                        special for everyone.
                    </p>

                    <p>
                        Make The Hotel Tirupati your comfortable
                        base while discovering the beauty and
                        culture around you.
                    </p>

                    <a href="#" class="blog-read-btn">
                        Read More
                        <i class="ri-arrow-right-line"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================
    BLOG LIST
========================================= --}}
<section class="hotel-blog-section">

    <div class="container">

        <div class="blog-heading">

            <div class="blog-section-label justify-content-center">

                <span></span>

                <p>Latest Stories</p>

            </div>

            <h2>
                Explore Our
                <span>Latest Blogs</span>
            </h2>

            <p>
                Helpful travel tips, local experiences and
                stories to make your journey more memorable.
            </p>

        </div>


        <div class="row g-4 mt-4">


            {{-- BLOG 1 --}}
            <div class="col-lg-4 col-md-6">

                <article class="blog-card">

                    <div class="blog-card-image">

                        <img
                            src="{{ asset('frontend/assets/image/blog1.jpg') }}"
                            alt="Places to Visit in Nepal"
                        >

                        <span class="blog-category">
                            Travel
                        </span>

                    </div>

                    <div class="blog-card-content">

                        <div class="blog-card-meta">

                            <span>
                                <i class="ri-calendar-line"></i>
                                Sep 18, 2026
                            </span>

                            <span>
                                <i class="ri-time-line"></i>
                                5 min read
                            </span>

                        </div>

                        <h3>
                            7 Beautiful Places You Should
                            Visit in Nepal
                        </h3>

                        <p>
                            From peaceful lakes to beautiful
                            mountains, discover some of Nepal's
                            most memorable destinations.
                        </p>

                        <a href="#" class="blog-card-link">
                            Read Article
                            <i class="ri-arrow-right-line"></i>
                        </a>

                    </div>

                </article>

            </div>


            {{-- BLOG 2 --}}
            <div class="col-lg-4 col-md-6">

                <article class="blog-card">

                    <div class="blog-card-image">

                        <img
                            src="{{ asset('frontend/assets/image/blog2.jpg') }}"
                            alt="Nepali Food"
                        >

                        <span class="blog-category">
                            Food
                        </span>

                    </div>

                    <div class="blog-card-content">

                        <div class="blog-card-meta">

                            <span>
                                <i class="ri-calendar-line"></i>
                                Sep 15, 2026
                            </span>

                            <span>
                                <i class="ri-time-line"></i>
                                4 min read
                            </span>

                        </div>

                        <h3>
                            A Taste of Nepal:
                            Must-Try Local Foods
                        </h3>

                        <p>
                            Explore delicious Nepali dishes
                            and traditional flavors that every
                            visitor should experience.
                        </p>

                        <a href="#" class="blog-card-link">
                            Read Article
                            <i class="ri-arrow-right-line"></i>
                        </a>

                    </div>

                </article>

            </div>


            {{-- BLOG 3 --}}
            <div class="col-lg-4 col-md-6">

                <article class="blog-card">

                    <div class="blog-card-image">

                        <img
                            src="{{ asset('frontend/assets/image/blog3.jpg') }}"
                            alt="Kathmandu Travel"
                        >

                        <span class="blog-category">
                            Kathmandu
                        </span>

                    </div>

                    <div class="blog-card-content">

                        <div class="blog-card-meta">

                            <span>
                                <i class="ri-calendar-line"></i>
                                Sep 12, 2026
                            </span>

                            <span>
                                <i class="ri-time-line"></i>
                                6 min read
                            </span>

                        </div>

                        <h3>
                            Exploring Kathmandu:
                            A Traveler's Guide
                        </h3>

                        <p>
                            Discover temples, markets, food and
                            hidden places around Kathmandu Valley.
                        </p>

                        <a href="#" class="blog-card-link">
                            Read Article
                            <i class="ri-arrow-right-line"></i>
                        </a>

                    </div>

                </article>

            </div>


            {{-- BLOG 4 --}}
            <div class="col-lg-4 col-md-6">

                <article class="blog-card">

                    <div class="blog-card-image">

                        <img
                            src="{{ asset('frontend/assets/image/blog4.jpg') }}"
                            alt="Hotel Stay"
                        >

                        <span class="blog-category">
                            Hospitality
                        </span>

                    </div>

                    <div class="blog-card-content">

                        <div class="blog-card-meta">

                            <span>
                                <i class="ri-calendar-line"></i>
                                Sep 08, 2026
                            </span>

                            <span>
                                <i class="ri-time-line"></i>
                                4 min read
                            </span>

                        </div>

                        <h3>
                            How to Choose the Perfect
                            Hotel for Your Stay
                        </h3>

                        <p>
                            A few simple things to consider when
                            choosing comfortable accommodation
                            for your next trip.
                        </p>

                        <a href="#" class="blog-card-link">
                            Read Article
                            <i class="ri-arrow-right-line"></i>
                        </a>

                    </div>

                </article>

            </div>


            {{-- BLOG 5 --}}
            <div class="col-lg-4 col-md-6">

                <article class="blog-card">

                    <div class="blog-card-image">

                        <img
                            src="{{ asset('frontend/assets/image/blog5.jpg') }}"
                            alt="Nepal Mountains"
                        >

                        <span class="blog-category">
                            Adventure
                        </span>

                    </div>

                    <div class="blog-card-content">

                        <div class="blog-card-meta">

                            <span>
                                <i class="ri-calendar-line"></i>
                                Sep 05, 2026
                            </span>

                            <span>
                                <i class="ri-time-line"></i>
                                5 min read
                            </span>

                        </div>

                        <h3>
                            A Weekend Escape Into
                            the Mountains
                        </h3>

                        <p>
                            Looking for a peaceful escape?
                            Explore some wonderful mountain
                            destinations near Kathmandu.
                        </p>

                        <a href="#" class="blog-card-link">
                            Read Article
                            <i class="ri-arrow-right-line"></i>
                        </a>

                    </div>

                </article>

            </div>


            {{-- BLOG 6 --}}
            <div class="col-lg-4 col-md-6">

                <article class="blog-card">

                    <div class="blog-card-image">

                        <img
                            src="{{ asset('frontend/assets/image/blog6.jpg') }}"
                            alt="Hotel Experience"
                        >

                        <span class="blog-category">
                            Experience
                        </span>

                    </div>

                    <div class="blog-card-content">

                        <div class="blog-card-meta">

                            <span>
                                <i class="ri-calendar-line"></i>
                                Sep 01, 2026
                            </span>

                            <span>
                                <i class="ri-time-line"></i>
                                3 min read
                            </span>

                        </div>

                        <h3>
                            Making Your Hotel Stay
                            More Comfortable
                        </h3>

                        <p>
                            Simple ways to enjoy a relaxing,
                            comfortable and memorable hotel stay.
                        </p>

                        <a href="#" class="blog-card-link">
                            Read Article
                            <i class="ri-arrow-right-line"></i>
                        </a>

                    </div>

                </article>

            </div>

        </div>

    </div>

</section>


{{-- =========================================
    TRAVEL TIP SECTION
========================================= --}}
<section class="travel-tip-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <div class="travel-tip-content">

                    <div class="blog-section-label">

                        <span></span>

                        <p>Travel Tips</p>

                    </div>

                    <h2>
                        Travel More.
                        <span>Worry Less.</span>
                    </h2>

                    <p>
                        A good trip begins with good planning.
                        From choosing the right accommodation
                        to discovering local attractions, a few
                        simple tips can make your journey easier
                        and more enjoyable.
                    </p>

                    <div class="travel-tips-list">

                        <div>
                            <i class="ri-checkbox-circle-fill"></i>
                            <span>Plan your itinerary</span>
                        </div>

                        <div>
                            <i class="ri-checkbox-circle-fill"></i>
                            <span>Explore local food</span>
                        </div>

                        <div>
                            <i class="ri-checkbox-circle-fill"></i>
                            <span>Discover local attractions</span>
                        </div>

                        <div>
                            <i class="ri-checkbox-circle-fill"></i>
                            <span>Choose comfortable accommodation</span>
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="travel-tip-image">

                    <img
                        src="{{ asset('frontend/assets/image/blog5.jpg') }}"
                        alt="Nepal Travel"
                    >

                    <div class="travel-tip-note">

                        <i class="ri-map-pin-heart-line"></i>

                        <div>
                            <strong>Explore Nepal</strong>
                            <small>Create memories that last forever</small>
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
<section class="blog-cta-section">

    <div class="container">

        <div class="blog-cta-content">

            <div>

                <div class="blog-section-label">

                    <span></span>

                    <p>Your Journey Starts Here</p>

                </div>

                <h2>
                    Stay With Us & Explore Nepal
                </h2>

                <p>
                    Relax, explore and create wonderful memories
                    at The Hotel Tirupati.
                </p>

            </div>


            <div class="blog-cta-buttons">

                <a
                    href=""
                    class="blog-orange-btn"
                >
                    Explore Rooms
                    <i class="ri-arrow-right-line"></i>
                </a>

                <a
                    href="{{ route('frontend.contact') }}"
                    class="blog-outline-btn"
                >
                    Contact Us
                </a>

            </div>

        </div>

    </div>

</section>

@endsection
