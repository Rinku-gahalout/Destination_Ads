<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DestinationAds</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- for social-links -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/service_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact_style.css') }}">
</head>
<body>

    <!-- Header -->
    @include('includes.header')

    <!-- Page Content -->
    <main class="py-0">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('includes.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>

<!-- for header -->
  <script>
    window.addEventListener('scroll', function () {
        const scrollNavbar = document.getElementById('scrollNavbar');
        const mainNavbar = document.getElementById('mainNavbar');

        if (window.scrollY > 100) {
            scrollNavbar.classList.remove('d-none');
            mainNavbar.classList.add('d-none');
        } else {
            scrollNavbar.classList.add('d-none');
            mainNavbar.classList.remove('d-none');
        }
    });
</script>
</body>
</html>
