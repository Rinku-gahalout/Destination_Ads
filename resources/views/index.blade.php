@extends('layouts.app')

@section('content')
<!-- Banner Section -->
<div class="banner position-relative" style="background-image: url('{{ asset('images/banner (6).png') }}'); background-size: cover; background-position: center; height: 100vh;">
    <div class="container h-100 d-flex flex-column justify-content-center align-items-center text-white text-center">
        <!-- Your content -->
    </div>
</div>

  <section class="layout-section">
    <div class="container">
      <p class="intro-text">WE BRING <span>VISION</span> TO BRAND</p>
      <h1>CREATE STUNNING LAYOUTS<br>FOR YOUR WEBSITE.</h1>
      <div class="row justify-content-center">
        <div class="col-md-5">
          <p>
            CREATE STUNNING LAYOUTS FOR YOUR<br>WEBSITE DOLOR SIT AMET, CONCETETUR<br>ADIPISICING ELIT. MAGNA LIGULA GRAVIDA<br>A TELLUS PURUS IN MATTIS MAURIS. LOREM<br>QUAM SAGITTIS QUIS, SIT AMET DOLOR.<br>DOLORE CONCETETUR FERMENTUM NIH VOLUTPAT.<br>E POSUERE.
          </p>
        </div>
        <div class="col-md-5">
          <p>
            CREATE STUNNING LAYOUTS FOR YOUR<br>WEBSITE DOLOR SIT AMET, CONCETETUR<br>ADIPISICING ELIT. MAGNA LIGULA GRAVIDA<br>A TELLUS PURUS IN MATTIS MAURIS. LOREM<br>QUAM SAGITTIS QUIS, SIT AMET DOLOR.<br>DOLORE CONCETETUR FERMENTUM NIH VOLUTPAT.<br>E POSUERE.
          </p>
        </div>
      </div>
    </div>
  </section>


<section class="who-we-are">
  <div class="container-fluid">
    <div class="row no-gutters">
      <!-- Left Image Column -->
      <div class="col-md-6 image-side d-flex align-items-center justify-content-center">
        <img src="{{ asset('images/kenny-febrian-nR1dI28cH58-unsplash 1 (2).png') }}" alt="Team"
             class="custom-img">
      </div>

      <!-- Right Text Column -->
      <div class="col-md-6 text-side d-flex flex-column justify-content-center p-5">
        <h5>Who We Are</h5>
        <h2>Passionate Thinkers</h2>
        <p>We’re Creatively-Minded People. Let’s Build Something Extraordinary Together.</p>
        <a href="#" class="btn">More About Us</a>
      </div>
    </div>
  </div>
</section>

<section class="stand-for-section">
  <div class="container">
    <div class="content">
      <div class="text">
        <h2 class="title">WHAT <span class="bold">WE STAND</span> FOR</h2>
 
        <div class="point">
          <p class="highlight">• Creativity Without Limits</p>
          <p>We push boundaries to create work that stands out.</p>
        </div>
 
        <div class="point">
          <p class="bold">• Strategic Excellence</p>
          <p>Every idea is rooted in a deep understanding of your goals and audience.</p>
        </div>
 
        <div class="point">
          <p class="bold">• Client Collaboration</p>
          <p>Your vision is at the heart of everything we do.</p>
        </div>
      </div>
 
      <div class="image">
        <img src="{{ asset('images/kenny-febrian-nR1dI28cH58-unsplash 1 (2).png') }}" alt="Team collaboration" />
      </div>
    </div>
  </div>
</section>
 

<section class="services-section">
  <div class="container">
    <h2 class="section-title">WHAT <span>WE DO</span></h2>
    <h3 class="main-heading">CREATIVE SERVICES DESIGNED<br> TO <span class="highlight">ELEVATE YOUR BUSINESS</span></h3>
    <p class="subtitle">OUR TEAM TAKES THE TIME TO UNDERSTAND YOUR BUSINESS, YOUR AUDIENCE, AND YOUR GOALS.</p>
 
    <div class="services-grid">
      <div class="service-card">
        <div class="icon-box">🖥️</div>
        <h4>Web Design & Development</h4>
        <p>Cutting-edge, beautiful responsive, visually stunning websites built to convert.</p>
      </div>
 
      <div class="service-card">
        <div class="icon-box">📧</div>
        <h4>Digital Marketing</h4>
        <p>Boost your reach, engagement, and conversions with result-driven strategies.</p>
      </div>
 
      <div class="service-card">
        <div class="icon-box">💡</div>
        <h4>Branding & Strategy</h4>
        <p>A strong brand is more than just a logo — it’s the voice of your company.</p>
      </div>
    </div>
  </div>
</section>
<section class="background-image-section"></section>
@endsection