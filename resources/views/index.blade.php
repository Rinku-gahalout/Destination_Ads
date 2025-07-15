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
@endsection