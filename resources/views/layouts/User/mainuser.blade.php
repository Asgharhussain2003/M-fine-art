<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Plumberz - Free Plumbing Website Template')</title>
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="stylesheet" href="{{ asset('build/assets/user/css/your-theme-style.css') }}">
    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('build/assets/user/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/user/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/user/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('build/assets/user/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('build/assets/user/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Dynamic Content Display Here -->
    @yield('content')

    @if(Auth::check() && Auth::user()->Role === 'admin')
    <nav>
        <!-- Dashboard button (only for admin) -->
        <a href="{{ route('Admindashboard') }}">Dashboard</a> <!-- Admin Dashboard link -->
        
        <!-- Logout button -->
        <a href="{{ route('logout') }}" 
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    </nav>
    @endif

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <!-- Footer -->
    @yield('footer')

    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('build/assets/user/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('build/assets/user/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('build/assets/user/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('build/assets/user/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('build/assets/user/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('build/assets/user/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{ asset('build/assets/user/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{ asset('build/assets/user/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('build/assets/user/js/main.js')}}"></script>
</body>
</html>
