@extends('layouts.app')

@section('content')
    <!-- Banner Section -->
    <div class="banner position-relative"
        style="background-image: url('{{ asset('images/banner (6).png') }}'); background-size: cover; background-position: center; height: 639px;">
        <div class="container h-100 d-flex flex-column justify-content-center align-items-center text-white text-center">
            <!-- Your content -->
        </div>
    </div>



    <div class="container-fluid p-0">

        <!-- Image Section -->
        <div class="row py-5 bg-white images-row">
            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/kenny-febrian-nR1dI28cH58-unsplash 1.png') }}" alt="Team Image">
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/kenny-febrian-nR1dI28cH58-unsplash 1.png') }}" alt="Team Image">
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/kenny-febrian-nR1dI28cH58-unsplash 1.png') }}" alt="Team Image">
            </div>
        </div>

        <!-- Headline Section -->
        <div class="headline-text">
            <div>BUILD BIG.</div>
            <div>BUILD AWESOME.</div>
        </div>

        <!-- Stats Section -->
        <div class="stats-section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4 mb-4">
                        <h2>1232</h2>
                        <p>Projects</p>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h2>455</h2>
                        <p>Clients</p>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h2>1176</h2>
                        <p>Followers</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="cta-section"
            style="background-image: linear-gradient(to top, rgba(0, 0, 0, 0.4), transparent), url('{{ asset('images/Rectangle 10.png') }}');">
            <h3>LET’S WORK TOGETHER</h3>
            <p>OUR PROJECTS ARE UNIQUE, FORMAL DESIGN, A SENSE OF USES.</p>
            <a href="{{ route('contact') }}" class="btn btn-dark">CONTACT US NOW</a>
        </div>
    </div>
@endsection
