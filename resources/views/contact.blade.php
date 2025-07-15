@extends('layouts.app')

@section('content')

<!-- ✅ Banner Section -->
<div class="contact-banner position-relative mb-5" style="background-image: url('{{ asset('images/Rectangle 6.png') }}'); background-size: cover; background-position: center; height: 300px;">
  <div class="container h-100 d-flex justify-content-center align-items-center">
    <h1 class="text-white fw-bold display-5 text-uppercase">Contact Us</h1>
  </div>
</div>

<!-- ✅ Contact Section -->
<section class="contact-section py-5">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      
      <!-- Left Contact Info -->
      <div class="col-md-5">
        <h3 class="fw-bold text-dark">Let's talk with us</h3>
        <p>Questions, comments, or suggestions? Simply fill in the form and we’ll be in touch shortly.</p>

        <p class="mb-2"><i class="fas fa-map-marker-alt me-2 text-dark"></i> qwertyuiqasdfghjkl<br>tilak nagar 110018</p>
        <p class="mb-2"><i class="fas fa-phone-alt me-2 text-dark"></i> +91 7838875xxx</p>
        <p><i class="fas fa-envelope me-2 text-dark"></i> destinationads@gmail.com</p>
      </div>

      <!-- Right Contact Form -->
      <div class="col-md-6">
        <div class="p-4 bg-white shadow-sm rounded">
          <form>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control mb-3" placeholder="First Name*" required>
              </div>
              <div class="col">
                <input type="text" class="form-control mb-3" placeholder="Last Name*" required>
              </div>
            </div>
            <input type="email" class="form-control mb-3" placeholder="Email*" required>
            <input type="tel" class="form-control mb-3" placeholder="Phone Number*" required>
            <textarea class="form-control mb-4" rows="4" placeholder="Your message..." required></textarea>
            <button type="submit" class="btn btn-dark w-100 rounded-pill">Send Message</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection
