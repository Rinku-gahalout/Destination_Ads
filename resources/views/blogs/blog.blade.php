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
      <div class="col-md-10">
        <div class="row">
          @foreach($blogs as $blog)
            <div class="col-md-6 mb-4">
              <div class="blog-post">
                <a href="{{ url($blog->category . '/' . $blog->blog_url) }}">
                  <img src="{{ asset($blog->image) }}" class="img-fluid mb-3 rounded" alt="{{ $blog->main_headline }}">
                </a>
                <p class="fw-semibold">{{ $blog->main_headline }}</p>
              </div>
            </div>
          @endforeach
        </div>

        @if ($blogs->hasPages())
          <div id="paginationLinks" class="mt-4 text-center">{{ $blogs->links() }}</div>
        @endif
      </div>

      <!-- Right Sidebar -->
      <div class="col-md-2 blog-categories">
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
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const blogPosts = document.querySelectorAll(".blog-post");
    const sidebar = document.querySelector(".blog-page .col-md-4");

    const observer = new IntersectionObserver(entries => {
      entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
          // Add delay to stagger blog cards
          setTimeout(() => {
            entry.target.classList.add("animate");
          }, i * 150); // 150ms stagger
        }
      });
    }, { threshold: 0.1 });

    blogPosts.forEach(post => observer.observe(post));
    if (sidebar) observer.observe(sidebar);
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const catSection = document.querySelector(".blog-categories");

    if (catSection) {
      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add("animate");
          }
        });
      }, { threshold: 0.2 });

      observer.observe(catSection);
    }
  });
</script>

