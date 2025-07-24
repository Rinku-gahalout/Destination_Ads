@extends('layouts.app')


@section('content')

<!-- ✅ Banner Section -->
<div class="contact-banner d-flex align-items-center justify-content-center" 
     style="background-image: url('{{ asset('images/Rectangle 6.png') }}');">
  <div class="overlay"></div>
  <div class="container h-100 d-flex justify-content-center align-items-center" style="position: relative; z-index: 2;">
    <h1 class="text-white fw-bold display-5 text-uppercase">BLOGS</h1>
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


<!-- ✅ Blog Page Content -->
<section class="blog-page py-5">
  <div class="container">
    <div class="row">
      <!-- Left Blog Posts -->
      <div class="col-md-8">
        @foreach($blogs as $blog)
          <div class="blog-post mb-5">
            <a href="{{ url($blog->category . '/' . $blog->blog_url) }}">
            <img src="{{ asset($blog->image) }}" class="img-fluid mb-3 rounded" alt="{{ $blog->main_headline }}">
            </a>
            <p class="fw-semibold">{{ $blog->main_headline }}</p>
          </div>
        @endforeach

        @if ($blogs->hasPages())
          <div id="paginationLinks" class="mt-4">{{ $blogs->links() }}</div>
        @endif
      </div>


      <!-- Right Sidebar -->
      <div class="col-md-4">
        <!-- Search -->
        <div class="mb-4">
          <input type="text" class="form-control rounded-0 border border-dark" placeholder="Search...">
        </div>

        <!-- Latest Blog -->
        <div class="mb-5">
          <h6 class="fw-bold mb-3">LATEST BLOG</h6>
          @for ($i = 0; $i < 3; $i++)
          <div class="d-flex align-items-start mb-3">
            <div class="me-3 bg-secondary" style="width: 50px; height: 50px;"></div>
            <p class="small mb-0">Zxcvbnmasdfghjklqwertyuiopzxcvbnmasdfgqwertyugf.</p>
          </div>
          @endfor
        </div>

        <!-- Categories -->
        <div>
          <h6 class="fw-bold mb-3">CATEGORIES</h6>
          <ul class="list-unstyled">
            <li class="mb-2">Branding</li>
            <li class="mb-2">Design</li>
            <li class="mb-2">Development</li>
            <li class="mb-2">Other</li>
            <li class="mb-2">Photography</li>
            <li class="mb-2">Quote</li>
            <li class="mb-2">Slider</li>
            <li class="mb-2">Video</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

