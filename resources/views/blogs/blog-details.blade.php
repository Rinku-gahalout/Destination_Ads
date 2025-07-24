@extends('layouts.app')

@section('content')

    <!-- ✅ Banner Section -->
    <div class="contact-banner d-flex align-items-center justify-content-center"
        style="background-image: url('{{ asset('images/Rectangle 6.png') }}');">
        <div class="overlay"></div>
        <div class="container h-100 d-flex justify-content-center align-items-center" style="position: relative; z-index: 2;">
            <h1 class="text-white fw-bold display-5 text-uppercase">BLOGS DETAILS</h1>
        </div>
    </div>
<section class="glow-bar-section">
  <div class="glow-bar-track">
    <div class="glow-bar">
      @for ($i = 0; $i < 10; $i++) {{-- Repeat enough times for seamless loop --}}
        <span>– DIRECT BOOK –</span>
        <span>– FASTEST FARE ALERT –</span>
        <span>– INSTANT FARE LOCK –</span>
        <span>– UNMATCHED DEALS –</span>
      @endfor
    </div>
  </div>
</section>
    <div class="blog-details-container">
        <div class="row">
            <!-- Left Column: Blog Details -->
            <!-- Left Column: Blog Details -->
            <div class="left-column">
                <p class="text-muted mb-3">
                    <i class="bi bi-calendar me-2"></i>{{ date('F d, Y', strtotime($blog->created_at)) }}
                </p>
                @if ($blog->image)
                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="blog-image" />
                @endif

                <h2 class="blog-title">{{ $blog->main_headline }}</h2>
                <p class="blog-description">
                    {{ \Illuminate\Support\Str::limit(strip_tags($blog->blog_description), 200, '...') }}</p>

                @if (count($faqs))
                    <div class="mt-5">
                        <h2 class="text-center text-primary fw-bold mb-4">Frequently Asked Questions</h2>
                        <div class="accordion" id="faqAccordion">
                            @foreach ($faqs as $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $loop->index }}">
                                        <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $loop->index }}"
                                            aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                            aria-controls="collapse{{ $loop->index }}">
                                            Q. {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $loop->index }}"
                                        class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                        aria-labelledby="heading{{ $loop->index }}" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <strong>Ans.</strong> {{ $faq->answer }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            <!-- Right Column: Sidebar -->
            <div class="right-column">
                <div class="sidebar">
                    <!-- Search Box -->
                    <div class="search-box">
                        <input type="text" placeholder="Search..." />
                    </div>

                    <!-- Latest Blogs -->
                    @if ($recentPosts->count())
                        <div class="latest-blog">
                            <h5>LATEST BLOG</h5>
                            <ul class="blog-list">
                                @foreach ($recentPosts as $post)
                                    <li>
                                        <div class="thumb"
                                            style="background-image: url('{{ asset($post->image) }}'); background-size: cover;">
                                        </div>
                                        <p>
                                            <a href="{{ url($post->category . '/' . $post->blog_url) }}">
                                                {{ \Illuminate\Support\Str::limit($post->main_headline, 50) }}
                                            </a>
                                        </p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Categories (Optional Static) -->
                    <div class="categories">
                        <h5>CATEGORIES</h5>
                        <ul class="category-list">
                            <li>Branding</li>
                            <li>Design</li>
                            <li>Development</li>
                            <li>Other</li>
                            <li>Photography</li>
                            <li>Quote</li>
                            <li>Slider</li>
                            <li>Videos</li>
                        </ul>
                    </div>
                </div>
            </div>
        @endsection
