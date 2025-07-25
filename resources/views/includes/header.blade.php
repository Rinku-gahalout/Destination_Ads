<!-- Transparent Header on Banner -->
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100 top-0 z-3 transition" id="mainNavbar">
    <div class="container-fluid px-3 custom-navbar-container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/dd 1.png') }}" alt="Logo" class="navbar-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav1">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('home') ? 'active-nav' : '' }}"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('blog') ? 'active-nav' : '' }}"
                        href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('contact') ? 'active-nav' : '' }}"
                        href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('services') ? 'active-nav' : '' }}"
                        href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('about') ? 'active-nav' : '' }}"
                        href="{{ route('about') }}">About</a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<!-- Black Header on Scroll -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black position-fixed w-100 top-0 z-3 transition d-none"
    id="scrollNavbar">
    <div class="container-fluid px-3 custom-navbar-container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/dd 1.png') }}" alt="Logo" class="navbar-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav2">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav2">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('home') ? 'active-nav' : '' }}"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('blog') ? 'active-nav' : '' }}"
                        href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('contact') ? 'active-nav' : '' }}"
                        href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('services') ? 'active-nav' : '' }}"
                        href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('about') ? 'active-nav' : '' }}"
                        href="{{ route('about') }}">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<script>
    window.addEventListener("scroll", function() {
        const scrollNavbar = document.getElementById("scrollNavbar");
        if (window.scrollY > 100) {
            scrollNavbar.classList.add("show");
        } else {
            scrollNavbar.classList.remove("show");
        }
    });
</script>

<script>
  const navbar = document.getElementById('navbarNav1');
  const mainNavbar = document.getElementById('mainNavbar');

  navbar.addEventListener('show.bs.collapse', () => {
    mainNavbar.classList.add('navbar-open');
  });

  navbar.addEventListener('hide.bs.collapse', () => {
    mainNavbar.classList.remove('navbar-open');
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const navbar1 = document.getElementById('navbarNav1');
    const navbar2 = document.getElementById('navbarNav2');
    const mainNavbar = document.getElementById('mainNavbar');
    const scrollNavbar = document.getElementById('scrollNavbar');

    // Add/remove blur background class for first header
    navbar1.addEventListener('show.bs.collapse', () => {
      mainNavbar.classList.add('navbar-open');
    });

    navbar1.addEventListener('hide.bs.collapse', () => {
      mainNavbar.classList.remove('navbar-open');
    });

    // Add/remove blur background class for second header
    navbar2.addEventListener('show.bs.collapse', () => {
      scrollNavbar.classList.add('navbar-open');
    });

    navbar2.addEventListener('hide.bs.collapse', () => {
      scrollNavbar.classList.remove('navbar-open');
    });

    // Click outside to close menus
    document.addEventListener('click', function (event) {
      const isClickInsideMain = mainNavbar.contains(event.target);
      const isClickInsideScroll = scrollNavbar.contains(event.target);

      // Close first menu if open and clicked outside
      if (navbar1.classList.contains('show') && !isClickInsideMain) {
        const bsCollapse1 = bootstrap.Collapse.getInstance(navbar1) || new bootstrap.Collapse(navbar1, { toggle: false });
        bsCollapse1.hide();
      }

      // Close second menu if open and clicked outside
      if (navbar2.classList.contains('show') && !isClickInsideScroll) {
        const bsCollapse2 = bootstrap.Collapse.getInstance(navbar2) || new bootstrap.Collapse(navbar2, { toggle: false });
        bsCollapse2.hide();
      }
    });
  });
</script>
