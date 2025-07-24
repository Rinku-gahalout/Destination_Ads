@extends('layouts.app')

@section('content')

<!-- Banner Section -->
<div class="contact-banner position-relative" style="
    background-image: url('{{ asset('images/Rectangle 6.png') }}');
    background-size: cover;
    background-position: center;
    height: 563px;">
    
    <!-- Black Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

    <!-- Banner Content -->
    <div class="container h-100 d-flex justify-content-center align-items-center position-relative" style="z-index: 2;">
        <h1 class="text-white fw-bold display-5 text-uppercase">Services</h1>
    </div>
</div>

<!-- Glow Bar Section -->
<section class="glow-bar-section">
    <div class="glow-bar-track">
        <div class="glow-bar">
            @for ($i = 0; $i < 10; $i++)
                <span>– DIRECT BOOK –</span>
                <span>– FASTEST FARE ALERT –</span>
                <span>– INSTANT FARE LOCK –</span>
                <span>– UNMATCHED DEALS –</span>
            @endfor
        </div>
    </div>
</section>

<!-- Image Gallery Section -->
<section class="images-row py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            @for ($i = 0; $i < 3; $i++)
            <div class="col-md-4 mb-4 text-center">
                <img src="{{ asset('images/kenny-febrian-nR1dI28cH58-unsplash 1.png') }}" alt="Team Image" class="img-fluid team-image">
            </div>
            @endfor
        </div>
    </div>
</section>

<!-- Headline Section -->
<section class="headline-text text-center">
    <div>BUILD BIG.</div>
    <div>BUILD AWESOME.</div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <h2 class="counter" data-target="1232">0</h2>
                <p>Projects</p>
            </div>
            <div class="col-md-4 mb-4">
                <h2 class="counter" data-target="455">0</h2>
                <p>Clients</p>
            </div>
            <div class="col-md-4 mb-4">
                <h2 class="counter" data-target="1176">0</h2>
                <p>Followers</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-section" style="
    background-image: linear-gradient(to top, rgba(0, 0, 0, 0.4), transparent), 
    url('{{ asset('images/Rectangle 10.png') }}');">
    
    <div class="container text-center">
        <h3>LET’S WORK TOGETHER</h3>
        <p>OUR PROJECTS ARE UNIQUE, FORMAL DESIGN, A SENSE OF USES.</p>
        <a href="{{ route('contact') }}" class="btn btn-dark">CONTACT US NOW</a>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = target / 100; // Adjust for speed

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 20); // Adjust delay for smoothness
            } else {
                counter.innerText = target;
            }
        };

        updateCount();
    });
});
</script>

