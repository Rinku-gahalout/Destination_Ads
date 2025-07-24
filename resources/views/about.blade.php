@extends('layouts.app')

@section('content')

<!-- ✅ Banner Section -->
<div class="contact-banner d-flex align-items-center justify-content-center" 
     style="background-image: url('{{ asset('images/Rectangle 6.png') }}');">
  <div class="overlay"></div>
  <div class="container h-100 d-flex justify-content-center align-items-center" style="position: relative; z-index: 2;">
    <h1 class="text-white fw-bold display-5 text-uppercase">ABOUT US</h1>
  </div>
</div>
<!-- ✅ Include this in your Blade file or HTML -->
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
<!-- ✅ About Us Section with Background and Text -->
<div class="about-section text-black text-center" style="background-image: url('{{ asset('images/Rectangle 34.png') }}'); background-size: cover; background-position: center; height: 500px">
  <div class="container">
    <h1 class="fw-bold display-5 text-uppercase">About Us</h1>
    <p class="mt-3 fs-5" style="max-width: 700px; margin: 0 auto;">
      Travel smart. Travel free. Let EasyFlyHub be your compass on your journey. 
      Explore the world wisely. Thank you for trusting us to be a part of your travel story.
    </p>
  </div>
</div>

@endsection