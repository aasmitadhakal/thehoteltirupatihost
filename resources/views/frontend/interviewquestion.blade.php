@section('seo')
    @include('frontend.seo', [
        'name' => $interviewquestion->seo_title ?? '',
        'title' => $interviewquestion->seo_title ?? $interviewquestion->title,
        'description' => $interviewquestion->meta_description ?? '',
        'keyword' => $interviewquestion->meta_keywords ?? '',
        'schema' => $interviewquestion->seo_schema ?? '',
        'created_at' => $interviewquestion->created_at,
        'updated_at' => $interviewquestion->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <section class="about-banner">
        @if (!empty($interviewquestion->banner_image))
            <img src="{{ asset($interviewquestion->banner_image) }}"
                alt="{{ $interviewquestion->title ?? 'About Us Background' }}">
        @else
            <img src="{{ asset('frontend/assets/image/japan.jpg') }}" alt="Default Background">
        @endif
        <div class="banner-content">
            <div class="banner-content-inner">
                <h1>{{ $interviewquestion->title ?? 'About Us' }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $interviewquestion->title ?? 'About Us' }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    {{-- about us section --}}
    <section class="about-us-section py-5">
        <div class="container">
            <div class="accordion" id="faqAccordion">
                @foreach ($question as $index => $item)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $index }}">
                            <button class="accordion-button @if ($index !== 0) collapsed @endif"
                                type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $index }}">
                                {{ $item->question }}
                            </button>
                        </h2>
                        <div id="faq{{ $index }}"
                            class="accordion-collapse collapse @if ($index === 0) show @endif"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body mt-3">
                                {!! $item->answer !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
