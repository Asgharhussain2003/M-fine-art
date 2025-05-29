<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="{{ asset('build/assets/admin/css/style.css') }}">

        <!-- Favicon -->
        <link href="{{ asset('build/assets/admin/img/favicon.ico') }}" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href=" {{ asset('build/assets/admin/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href=" {{ asset('build/assets/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=" {{ asset('build/assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="  {{ asset('build/assets/admin/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Dynamic Content Display Here -->
    @yield('content')
    
    

    <!-- Footer --> 

    @yield('footer')

    <!-- Sidebar -->
    @yield('Sidebar')
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src=" {{asset('build/assets/admin/lib/chart/chart.min.js') }}"></script>
    <script src=" {{asset('build/assets/admin/lib/easing/easing.min.js') }}"></script>
    <script src=" {{asset('build/assets/admin/lib/waypoints/waypoints.min.js') }}"></script>
    <script src=" {{asset('build/assets/admin/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src=" {{asset('build/assets/admin/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src=" {{asset('build/assets/admin/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src=" {{asset('build/assets/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src=" {{asset('build/assets/admin/js/main.js') }}"></script>
</body>
</html>
