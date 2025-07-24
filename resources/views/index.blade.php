@extends('layouts.app')

@section('content')
<!-- ✅ Banner Section -->
<div class="contact-banner d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/Rectangle 6.png') }}');">
  <div class="overlay"></div>
  <div class="container text-center content">
    <h1>
      <span class="wide">Destination.</span>
      <span class="narrow text-green">A</span>
      <span class="narrow text-yellow">d</span>
      <span class="narrow text-blue">s</span>
    </h1>
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







  <section class="layout-section" style="background-image: linear-gradient(to top, rgba(219, 219, 219, 0.4), transparent), url('{{ asset('images/Rectangle 2.png') }}');">
    <div class="container">
      <p class="intro-text">WE BRING <span>VISION</span> TO BRAND</p>
      <h1>CREATE STUNNING LAYOUTS<br>FOR YOUR WEBSITE.</h1>
      <div class="row justify-content-center custom-gap">
          <div class="col-md-5 text-start">
          <p>
            Technology has transformed nearly every aspect of modern life, from how we communicate to how we work, travel, and learn. Advancements in artificial intelligence, robotics, and renewable energy are reshaping industries and creating new opportunities for innovation. Smartphones, the internet, and social media have connected the world like never before, making information accessible in seconds. In education, digital tools have revolutionized learning, allowing students to explore subjects interactively. While these changes bring convenience and efficiency, they also raise ethical concerns about privacy, automation, and digital dependence. Balancing progress with responsibility is essential for building a sustainable and inclusive future.          </p>
        </div>
        <div class="col-md-5 text-start">
          <p>
            Technology has transformed nearly every aspect of modern life, from how we communicate to how we work, travel, and learn. Advancements in artificial intelligence, robotics, and renewable energy are reshaping industries and creating new opportunities for innovation. Smartphones, the internet, and social media have connected the world like never before, making information accessible in seconds. In education, digital tools have revolutionized learning, allowing students to explore subjects interactively. While these changes bring convenience and efficiency, they also raise ethical concerns about privacy, automation, and digital dependence. Balancing progress with responsibility is essential for building a sustainable and inclusive future.          </p>
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

    <!-- Title comes first and centered -->
    <h2 class="title">WHAT <span class="bold">WE STAND</span> FOR</h2>

    <div class="content">
      <!-- Text content -->
      <div class="text">
        <div class="point">
          <p class="bold">• Creativity Without <span style="margin-left:20px;">Limits</span></p>
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

      <!-- Image content -->
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