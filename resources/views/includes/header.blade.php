<!-- Transparent Header on Banner -->
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100 top-0 z-3 p-0 transition" id="mainNavbar">
  <div class="container px-0">
    <a class="navbar-brand ms-3" href="{{ route('home') }}">DestinationAds</a>
    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav1">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav1">
      <ul class="navbar-nav ms-auto me-3">
        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Black Header on Scroll -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black position-fixed w-100 top-0 z-2 transition d-none" id="scrollNavbar">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">DestinationAds</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav2">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav2">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>