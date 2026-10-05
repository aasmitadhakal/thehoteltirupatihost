@section('seo')
    @include('frontend.seo', [
        'name' => $contact_page->seo_title ?? '',
        'title' => $contact_page->seo_title ?? $contact_page->title,
        'description' => $contact_page->meta_description ?? '',
        'keyword' => $contact_page->meta_keywords ?? '',
        'schema' => $contact_page->seo_schema ?? '',
        'created_at' => $contact_page->created_at,
        'updated_at' => $contact_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')

{{-- =========================================
    CONTACT HERO
========================================= --}}
<section class="contact-page-hero">

    <div class="container">

        <div class="contact-hero-content">

            <div class="contact-small-title">
                <span></span>
                <p>Get In Touch</p>
            </div>

            <h1>
                We'd Love To
                <span>Hear From You</span>
            </h1>

            <p>
                Have a question, need help with your reservation,
                or simply want to know more about The Hotel Tirupati?
                Our team is here to help.
            </p>

            <div class="contact-breadcrumb">

                <a href="{{ url('/') }}">
                    Home
                </a>

                <i class="ri-arrow-right-line"></i>

                <span>
                    Contact
                </span>

            </div>

        </div>

    </div>

</section>


{{-- =========================================
    CONTACT INFORMATION + FORM
========================================= --}}
<section class="contact-main-section">

    <div class="container">

        <div class="row g-5 align-items-stretch">

            {{-- =================================
                LEFT CONTACT INFORMATION
            ================================== --}}
            <div class="col-lg-5">

                <div class="contact-info-wrapper">

                    <div class="contact-section-label">

                        <span></span>

                        <p>Contact Us</p>

                    </div>

                    <h2>
                        Let's Start A
                        <span>Conversation</span>
                    </h2>

                    <p class="contact-intro-text">
                        Whether you have questions about our rooms,
                        restaurant, facilities or reservations, feel
                        free to reach out to us.
                    </p>


                    {{-- ADDRESS --}}
                    <div class="contact-info-item">

                        <div class="contact-info-icon">

                            <i class="ri-map-pin-line"></i>

                        </div>

                        <div>

                            <h4>Our Location</h4>

                            <p>
                                Bharatpur-3, Lions Chowk,
                                Chitwan, Nepal
                            </p>

                        </div>

                    </div>


                    {{-- PHONE --}}
                    <div class="contact-info-item">

                        <div class="contact-info-icon">

                            <i class="ri-phone-line"></i>

                        </div>

                        <div>

                            <h4>Call Us</h4>

                            <p>
                                +977 98XXXXXXXX
                            </p>

                            <p>
                                +977 56XXXXXX
                            </p>

                        </div>

                    </div>


                    {{-- EMAIL --}}
                    <div class="contact-info-item">

                        <div class="contact-info-icon">

                            <i class="ri-mail-line"></i>

                        </div>

                        <div>

                            <h4>Email Us</h4>

                            <p>
                                info@hotelTirupati.com
                            </p>

                            <p>
                                reservation@hotelTirupati.com
                            </p>

                        </div>

                    </div>


                    {{-- HOURS --}}
                    <div class="contact-info-item">

                        <div class="contact-info-icon">

                            <i class="ri-time-line"></i>

                        </div>

                        <div>

                            <h4>Reception Hours</h4>

                            <p>
                                Open 24 Hours
                            </p>

                            <small>
                                Our reception team is available
                                to assist you anytime.
                            </small>

                        </div>

                    </div>


                    {{-- SOCIAL --}}
                    <div class="contact-social">

                        <a href="#">
                            <i class="ri-facebook-fill"></i>
                        </a>

                        <a href="#">
                            <i class="ri-instagram-line"></i>
                        </a>

                        <a href="#">
                            <i class="ri-whatsapp-line"></i>
                        </a>

                        <a href="#">
                            <i class="ri-tiktok-line"></i>
                        </a>

                    </div>

                </div>

            </div>


            {{-- =================================
                RIGHT CONTACT FORM
            ================================== --}}
            <div class="col-lg-7">

                <div class="contact-form-card">

                    <div class="contact-form-heading">

                        <h3>
                            Send Us A Message
                        </h3>

                        <p>
                            Fill out the form below and our team
                            will get back to you as soon as possible.
                        </p>

                    </div>


                    <form action="#" method="POST">

                        @csrf

                        <div class="row g-3">

                            {{-- NAME --}}
                            <div class="col-md-6">

                                <label>
                                    Your Name
                                </label>

                                <div class="contact-input">

                                    <i class="ri-user-line"></i>

                                    <input
                                        type="text"
                                        name="name"
                                        placeholder="Enter your name"
                                    >

                                </div>

                            </div>


                            {{-- EMAIL --}}
                            <div class="col-md-6">

                                <label>
                                    Email Address
                                </label>

                                <div class="contact-input">

                                    <i class="ri-mail-line"></i>

                                    <input
                                        type="email"
                                        name="email"
                                        placeholder="Enter your email"
                                    >

                                </div>

                            </div>


                            {{-- PHONE --}}
                            <div class="col-md-6">

                                <label>
                                    Phone Number
                                </label>

                                <div class="contact-input">

                                    <i class="ri-phone-line"></i>

                                    <input
                                        type="text"
                                        name="phone"
                                        placeholder="Enter your phone"
                                    >

                                </div>

                            </div>


                            {{-- SUBJECT --}}
                            <div class="col-md-6">

                                <label>
                                    Subject
                                </label>

                                <div class="contact-input">

                                    <i class="ri-chat-3-line"></i>

                                    <input
                                        type="text"
                                        name="subject"
                                        placeholder="Enter subject"
                                    >

                                </div>

                            </div>


                            {{-- MESSAGE --}}
                            <div class="col-12">

                                <label>
                                    Message
                                </label>

                                <div class="contact-input contact-textarea">

                                    <i class="ri-message-3-line"></i>

                                    <textarea
                                        name="message"
                                        rows="5"
                                        placeholder="Write your message..."
                                    ></textarea>

                                </div>

                            </div>


                            {{-- BUTTON --}}
                            <div class="col-12">

                                <button
                                    type="submit"
                                    class="contact-submit-btn"
                                >

                                    Send Message

                                    <i class="ri-arrow-right-line"></i>

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================
    MAP / LOCATION SECTION
========================================= --}}
<section class="contact-location-section">

    <div class="container">

        <div class="contact-location-heading">

            <div class="contact-section-label justify-content-center">

                <span></span>

                <p>Find Us</p>

            </div>

            <h2>
                Come And
                <span>Visit Us</span>
            </h2>

            <p>
                Located in Bharatpur, Chitwan, The Hotel Tirupati
                offers a comfortable place to stay while exploring
                the beauty of the surrounding area.
            </p>

        </div>


        <div class="contact-map-box">

            {{-- Replace this iframe with your actual Google Map --}}
            <iframe
                src="https://www.google.com/maps?q=Bharatpur%20Chitwan%20Nepal&output=embed"
                width="100%"
                height="400"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>

        </div>

    </div>

</section>


{{-- =========================================
    QUICK HELP SECTION
========================================= --}}
<section class="contact-help-section">

    <div class="container">

        <div class="contact-help-content">

            <div>

                <div class="contact-section-label">

                    <span></span>

                    <p>Need Assistance?</p>

                </div>

                <h2>
                    We're Here To
                    <span>Help You</span>
                </h2>

                <p>
                    Planning your stay or have a special request?
                    Contact our friendly team and let us help make
                    your visit comfortable and memorable.
                </p>

            </div>


            <div class="contact-help-buttons">

                <a
                    href="tel:+9779800000000"
                    class="contact-orange-btn"
                >

                    <i class="ri-phone-line"></i>

                    Call Us

                </a>

                <a
                    href="mailto:info@hoteltirupati.com"
                    class="contact-outline-btn"
                >

                    <i class="ri-mail-line"></i>

                    Email Us

                </a>

            </div>

        </div>

    </div>

</section>

@endsection
