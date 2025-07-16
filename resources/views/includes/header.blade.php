<!-- Transparent Header on Banner -->
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100 top-0 z-3 transition" id="mainNavbar">
  <div class="container-fluid px-3 custom-navbar-container">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="{{ asset('images/dd 1.png') }}" alt="Logo" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav1">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav1">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Black Header on Scroll -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black position-fixed w-100 top-0 z-3 transition d-none" id="scrollNavbar">
  <div class="container-fluid px-3 custom-navbar-container">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="{{ asset('images/dd 1.png') }}" alt="Logo" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav2">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav2">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
      </ul>
    </div>
  </div>
</nav>


<script>
  window.addEventListener("scroll", function () {
    const scrollNavbar = document.getElementById("scrollNavbar");
    if (window.scrollY > 100) {
      scrollNavbar.classList.add("show");
    } else {
      scrollNavbar.classList.remove("show");
    }
  });
</script>
