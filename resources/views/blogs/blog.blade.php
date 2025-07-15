@extends('layouts.app')

@section('content')

<!-- ✅ Banner Section -->
<div class="blog-banner position-relative mb-5" style="background-image: url('{{ asset('images/Rectangle 6.png') }}'); background-size: cover; background-position: center; height: 350px;">
  <div class="container h-100 d-flex justify-content-center align-items-center">
    <!-- <h1 class="text-white fw-bold display-5 text-uppercase">Our Blog</h1> -->
  </div>
</div>

<!-- ✅ Blog Page Content -->
<section class="blog-page py-5">
  <div class="container">
    <div class="row">
      <!-- Left Blog Posts -->
      <div class="col-md-8">
        @for ($i = 0; $i < 3; $i++)
        <div class="blog-post mb-5">
          <img src="{{ asset('images/blog.jpg') }}" class="img-fluid mb-3 rounded" alt="Blog Image">
          <p class="fw-semibold">
            Zxcvbnmasdfghjklqwertyuiopzxcvbnmasdfgqwertyugf.
          </p>
        </div>
        @endfor
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

