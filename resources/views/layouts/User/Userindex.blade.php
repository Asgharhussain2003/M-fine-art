@extends('layouts.User.mainuser')

@section('title', 'Userindex')

@section('content')
    @include('layouts.User.navbar')

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- Lightbox CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">

<!-- Lightbox JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    </head>
<style>
/* Basic container styling */
.gallery-img-container {
    position: relative;
    overflow: hidden;
    border-radius: 20px;
    cursor: pointer;
    transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

/* Image itself with smooth transform */
.gallery-img {
    transition: transform 0.5s ease-in-out, filter 0.5s;
    display: block;
    border-radius: 20px;
}

/* Glow and zoom effect on hover */
.gallery-img-container:hover {
    transform: scale(1.05);
    box-shadow: 0 0 25px 5px rgba(60, 61, 61, 0.22), 0 0 35px 10px rgba(224, 227, 227, 0.68);
}

.gallery-img-container:hover .gallery-img {
    transform: scale(1.08);
    filter: brightness(1.2) contrast(1.1);
}

/* Glowing border animation */
.gallery-img-container::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    border-radius: 22px;
    background: linear-gradient(45deg,rgba(96, 94, 94, 0.28),rgba(129, 237, 233, 0.7),rgb(179, 185, 185),rgba(94, 99, 99, 0.07));
    background-size: 300% 300%;
    z-index: 1;
    opacity: 0;
    transition: opacity 0.4s ease-in-out;
    animation: glowingBorder 4s ease-in-out infinite;
    pointer-events: none;
}

.gallery-img-container:hover::before {
    opacity: 1;
}

/* Overlay effect */
.gallery-overlay {
    position: absolute;
    z-index: 2;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.4);
    opacity: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: opacity 0.4s ease-in-out;
}

.gallery-img-container:hover .gallery-overlay {
    opacity: 1;
}

/* Glowing icon in overlay */
.gallery-overlay i {
    text-shadow: 0 0 10px #fff, 0 0 20px #0ff, 0 0 30px #0ff;
    animation: pulseIcon 1.5s infinite;
}

/* Animations */
@keyframes glowingBorder {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

@keyframes pulseIcon {
    0%, 100% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.2); opacity: 0.8; }
}

/* vedio animation */

 * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to bottom right, #f0f4ff, #ffffff);
      padding: 40px;
    }

    .main-section {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 40px;
      border-radius: 20px;
      position: relative;
      background: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(10px);
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      border: 3px solid transparent;
      background-clip: padding-box;
    }

    .main-section::before {
      content: '';
      position: absolute;
      top: -3px;
      left: -3px;
      right: -3px;
      bottom: -3px;
      border-radius: 23px;
      background: linear-gradient(135deg,rgb(0, 194, 212),rgb(11, 11, 11),rgb(146, 35, 194));
      background-size: 300% 300%;
      z-index: -1;
      animation: borderPulse 6s ease infinite;
    }

    @keyframes borderPulse {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .text-section {
      flex: 1;
      padding-right: 40px;
      animation: fadeInLeft 1.2s ease-in-out;
    }

    .text-section h1 {
      font-size: 40px;
      font-weight: bold;
      background: linear-gradient(to right,rgb(6, 6, 6),rgb(249, 249, 249));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 20px;
      animation: glowText 2s ease-in-out infinite alternate;
    }

    .text-section p {
      font-size: 18px;
      color: #444;
      line-height: 1.7;
      margin-bottom: 10px;
    }

    .walk-section {
      flex-shrink: 0;
      animation: walkFast 2s linear infinite;
      filter: drop-shadow(0 10px 25px rgba(0, 0, 0, 0.3));
      transition: transform 0.3s ease-in-out;
    }

    .walk-section video {
      height: 220px;
      border-radius: 20px;
      border: 3px solid rgba(124, 77, 255, 0.3);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 10px 30px rgba(0, 172, 193, 0.4);
      transform: scale(1.02);
    }

    .walk-section:hover video {
      transform: scale(1.08) rotateZ(0.5deg);
      box-shadow: 0 12px 40px rgba(124, 77, 255, 0.4);
    }

    /* Animations */
    @keyframes walkFast {
      0% { transform: translateX(0); }
      50% { transform: translateX(-20px); }
      100% { transform: translateX(0); }
    }

    @keyframes fadeInLeft {
      from {
        opacity: 0;
        transform: translateX(-50px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes glowText {
      from {
        text-shadow: 0 0 10px rgb(2, 2, 2);
      }
      to {
        text-shadow: 0 0 20px rgb(255, 255, 252);
      }
    }

    @media screen and (max-width: 768px) {
      .main-section {
        flex-direction: column;
        padding: 30px;
        text-align: center;
      }

      .text-section {
        padding: 0;
        margin-bottom: 30px;
      }

      .walk-section video {
        height: 160px;
      }
    }
</style>
    
    <style>
         body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .carousel-image {
            height: 100vh;
            width: 100%;
            object-fit: cover;
            filter: brightness(80%);
            transition: transform 0.5s ease, opacity 0.5s ease;
            cursor: zoom-in;
        }
        .fact-section h5 {
         color: #ffffff;
         font-size: 3rem;
         font-weight: 800;
         text-shadow: 2px 2px 10px rgba(255, 255, 255, 0.2), 0 0 20px rgba(255, 255, 255, 0.1);
        letter-spacing: 1px;
        transition: transform 0.3s ease, text-shadow 0.3s ease;
     }

      .fact-section h5:hover {
       transform: scale(1.05);
       text-shadow: 2px 2px 15px rgba(255, 255, 255, 0.5), 0 0 25px rgba(255, 255, 255, 0.3);
}

        .carousel-image:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }

        .carousel-image.zoomed {
            transform: scale(1.2);
            cursor: zoom-out;
            z-index: 999;
        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
        }

        .carousel-caption h1, .carousel-caption p {
            text-shadow: 2px 2px 8px rgb(255, 255, 255);
        }

        .btn-custom {
            border-radius: 50px;
            padding: 12px 30px;
            font-size: 1rem;
        }

        .owl-nav i {
            font-size: 2.5rem;
            color:  rgb(255, 255, 255);
            text-shadow: 0 0 10px rgb(254, 251, 251);
        }

        .owl-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            padding: 0 25px;
            z-index: 20;
        }

        .overlay-gradient {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.15), rgba(50,50,50,0.3));
            backdrop-filter: blur(3px);
        }


        /* video styling */

    .btn-glass {
        background: rgba(255, 255, 255, 0.15);
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        padding: 20px 25px;
        backdrop-filter: blur(10px);
        transition: 0.3s ease-in-out;
        box-shadow: 0 0 25px rgba(255, 255, 255, 0.2);
    }

    .btn-glass:hover {
        background: rgba(255, 255, 255, 0.3);
        box-shadow: 0 0 40px rgba(255, 255, 255, 0.4);
        transform: scale(1.05);
    }

    .pulse-animation {
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
        }
        70% {
            transform: scale(1.05);
            box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
        }
        100% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
        }
    }

    #bg-video {
        object-fit: cover;
        filter: brightness(0.7) contrast(1.1);
    }

    /* fact styling start */

    .fact-section {
        background: linear-gradient(135deg, #0d0d0d 0%, #1a1a1a 100%);
        overflow: hidden;
    }

    .fact-bg {
        background: url('https://www.transparenttextures.com/patterns/stardust.png'), radial-gradient(circle at center, #222 0%, #000 100%);
        background-size: cover;
        opacity: 0.3;
        animation: bgMove 30s linear infinite;
    }

    @keyframes bgMove {
        0% { background-position: 0 0; }
        100% { background-position: 100% 100%; }
    }

    .glass-box {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgb(254, 161, 22);
        backdrop-filter: blur(10px);
        border-radius: 1rem;
        transition: all 0.4s ease;
    }

    .glass-box:hover {
        transform: translateY(-5px) scale(1.03);
        box-shadow: 0 10px 30px rgb(253, 155, 35);
    }

    .gradient-icon {
        background: linear-gradient(45deg, #ff6ec4, #7873f5);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
    }

    [data-toggle="counter-up"] {
        transition: 0.3s ease;
    }


    /* more style  */
    .fact-section h2 {
    color: #ffffff;
    font-size: 3rem;
    font-weight: 800;
    text-shadow: 2px 2px 10px rgba(255, 255, 255, 0.2), 0 0 20px rgba(255, 255, 255, 0.1);
    letter-spacing: 1px;
    transition: transform 0.3s ease, text-shadow 0.3s ease;
}

.fact-section h2:hover {
    transform: scale(1.05);
    text-shadow: 2px 2px 15px rgba(255, 255, 255, 0.5), 0 0 25px rgba(255, 255, 255, 0.3);
}


    .fact-heading {
    font-size: 2.5rem;
    font-weight: bold;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 2px;
    background: linear-gradient(90deg, #ff6ec4, #7873f5, #ff6ec4);
    background-size: 300% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: gradientText 5s ease infinite;
    text-shadow: 0 2px 4px rgba(255, 255, 255, 0.1), 0 0 10px #ffa500;
    margin-bottom: 2rem;
    position: relative;
    z-index: 1;
}

@keyframes gradientText {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

    /* about heading */

.modern-heading {
    font-size: 3rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 2px;
    background: linear-gradient(90deg,rgb(255, 167, 16),rgb(242, 255, 0),rgb(251, 178, 21));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: pulseGlow 3s infinite ease-in-out;
    position: relative;
    display: inline-block;
    padding-bottom: 10px;
    border-bottom: 3px solid rgba(255, 123, 0, 0.4);
}

@keyframes pulseGlow {
    0%, 100% {
        text-shadow: 0 0 10px rgba(0, 200, 255, 0.01), 0 0 20px rgba(255, 191, 0, 0.92);
    }
    50% {
        text-shadow: 0 0 20px rgba(255, 196, 0, 0.9), 0 0 40px rgba(6, 6, 7, 0.6);
    }
}



    /* about styling */
.about-modern-classic {
        background: linear-gradient(to bottom right,rgb(250, 250, 250), #1e1e1e);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .bg-glass {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .text-gradient {
        background: linear-gradient(45deg, #00c6ff, #0072ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .cta-box {
        background: rgba(250, 234, 65, 0.13);
        backdrop-filter: blur(10px);
        border-left: 5px solid rgb(254, 161, 22);
        transition: 0.3s ease;
    }

    .cta-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(247, 225, 81, 0.8);
    }

    .img-wrapper {
        padding-left: 60px;
    }

    .main-img {
        border: 4px solid rgba(255, 255, 255, 0.05);
    }

    .overlay-img {
        border: 4px solid white;
    }

    .wow {
        visibility: visible;
        animation-duration: 1s;
        animation-fill-mode: both;
    }

/* Glowing Heading */
    h2.text-center {
        font-weight: 700;
        font-size: 3rem;
        color: #ffd700;
        text-align: center;
        margin-top: 40px;
        margin-bottom: 50px;
        letter-spacing: 2px;
        position: relative;
        text-shadow: 0 0 10px #ffd700, 0 0 20px #ffeb3b, 0 0 30px #ffcc00;
        animation: glowPulse 3s infinite ease-in-out;
    }

    @keyframes glowPulse {
        0%, 100% {
            text-shadow: 0 0 10px #ffd700, 0 0 20px #ffeb3b;
        }
        50% {
            text-shadow: 0 0 20px #ffcc00, 0 0 40px #fff176;
        }
    }

    h2.text-center::after {
        content: '';
        width: 140px;
        height: 4px;
        background: linear-gradient(90deg, #ffc107, #ffeb3b, #ffc107);
        background-size: 200% 100%;
        animation: shineLine 4s linear infinite;
        display: block;
        margin: 15px auto 0;
        border-radius: 2px;
    }

    @keyframes shineLine {
        0% { background-position: 0% 50%; }
        100% { background-position: 100% 50%; }
    }

    </style>

   
<div class="container-fluid p-0">
    <div class="owl-carousel owl-theme">

        <!-- Slide 1 -->
        <div class="position-relative">
            <img class="img-fluid carousel-image" src="{{ asset('build/assets/user/img/slider1.jpg') }}" alt="">
            <div class="carousel-caption text-center text-white w-100 px-3 overlay-gradient">
                <h5 class="text-uppercase animate__animated animate__fadeInDown animate__delay-1s">Premium Artistry</h5>
                <h1 class="display-3 fw-bold animate__animated animate__zoomIn animate__delay-2s">Transforming Walls into Stories</h1>
                <p class="lead mt-3 mb-4 animate__animated animate__fadeInUp animate__delay-3s">From classical strokes to modern magic – where creativity breathes color.</p>
               
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="position-relative">
            <img class="img-fluid carousel-image" src="{{ asset('build/assets/user/img/train.jpg') }}" alt="">
            <div class="carousel-caption text-center text-white w-100 px-3 overlay-gradient">
                <h5 class="text-uppercase animate__animated animate__fadeInDown animate__delay-1s">Art & Soul</h5>
                <h1 class="display-3 fw-bold animate__animated animate__fadeInUp animate__delay-2s">Paintings That Speak to You</h1>
                <p class="lead mt-3 mb-4 animate__animated animate__fadeIn animate__delay-3s">Original artworks designed to inspire your space and soul.</p>
                
            </div>
        </div>

          <!-- Slide 3 -->
          <div class="position-relative">
            <img class="img-fluid carousel-image" src="{{ asset('build/assets/user/img/slider22.jpg') }}" alt="">
            <div class="carousel-caption text-center text-white w-100 px-3 overlay-gradient">
                <h5 class="text-uppercase animate__animated animate__fadeInDown animate__delay-1s">Art & Soul</h5>
                <h1 class="display-3 fw-bold animate__animated animate__fadeInUp animate__delay-2s">Paintings That Speak to You</h1>
                <p class="lead mt-3 mb-4 animate__animated animate__fadeIn animate__delay-3s">Original artworks designed to inspire your space and soul.</p>
                
                
            </div>
        </div>

          <!-- Slide 4 -->
          <div class="position-relative">
            <img class="img-fluid carousel-image" src="{{ asset('build/assets/user/img/slider4.jpg') }}" alt="">
            <div class="carousel-caption text-center text-white w-100 px-3 overlay-gradient">
                <h5 class="text-uppercase animate__animated animate__fadeInDown animate__delay-1s">Art & Soul</h5>
                <h1 class="display-3 fw-bold animate__animated animate__fadeInUp animate__delay-2s">Paintings That Speak to You</h1>
                <p class="lead mt-3 mb-4 animate__animated animate__fadeIn animate__delay-3s">Original artworks designed to inspire your space and soul.</p>
                
            </div>
        </div>
    </div>
</div>
<!-- Carousel Section End -->

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000,
            smartSpeed: 1500,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: true,
            dots: false,
            navText: [
                '<i class="bi bi-chevron-left"></i>',
                '<i class="bi bi-chevron-right"></i>'
            ]
        });

        // Zoom effect on image click
        $(".carousel-image").on("click", function () {
            $(".carousel-image").not(this).removeClass("zoomed");
            $(this).toggleClass("zoomed");
        });

        // Remove zoom on ESC key
        $(document).on("keyup", function (e) {
            if (e.key === "Escape") {
                $(".carousel-image").removeClass("zoomed");
            }
        });
    });
</script>

<!-- Carousel Section End -->

<!-- Scripts -->

<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000,
            smartSpeed: 1500,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: true,
            dots: false,
            navText: [
                '<i class="bi bi-chevron-left"></i>',
                '<i class="bi bi-chevron-right"></i>'
            ]
        });
    });
</script>





<!-- Carousel End -->
    <!-- About Start -->
   
<br>
<center>
    <h1 class="modern-heading">About Us</h1>
</center>
<br>


    <div class="container-xxl py-5 about-modern-classic position-relative text-white">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- Text Column -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-content p-4 rounded-4 shadow-lg bg-glass">
                    <h6 class="fw-bold text-uppercase text-gradient mb-2"></h6>
                    <h1 class="display-5 fw-bold text-light mb-4">Fine Truck Arts</h1>
                    <p class="text-light-50 mb-4 fs-5">
                        Welcome to <strong>Fine Truck Arts</strong> — where color, culture, and creativity collide. We specialize in high-quality wall paint inspired by the vibrant soul of traditional Pakistani truck art. Our mission is to transform everyday spaces into bold, expressive masterpieces using premium, eco-friendly, and long-lasting paint solutions.
                    </p>

                    <ul class="list-unstyled mb-4">
                        <li class="mb-3">
                            <i class="fa fa-check-circle text-success me-3"></i>
                            <span class="fs-5">Truck Art–Inspired Wall Paint Designs</span>
                        </li>
                        <li class="mb-3">
                            <i class="fa fa-check-circle text-success me-3"></i>
                            <span class="fs-5">Vibrant, Eco-Friendly, and Durable Paints</span>
                        </li>
                        <li class="mb-3">
                            <i class="fa fa-check-circle text-success me-3"></i>
                            <span class="fs-5">Perfect for Homes, Cafes, Schools & Offices</span>
                        </li>
                    </ul>

                    <div class="cta-box d-flex align-items-center p-4 rounded-4 shadow-sm">
                        <div class="icon-box bg-white d-flex align-items-center justify-content-center me-3 rounded-circle" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <div>
                            <p class="fs-5 mb-1 text-white-50">Get in Touch</p>
                            <h3 class="m-0 fw-bold text-white">+0310 1167271</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="col-lg-6 position-relative wow fadeInRight" data-wow-delay="0.4s">
                <div class="img-wrapper position-relative">
                    <img src="{{ asset('build/assets/user/img/slider2.jpg') }}" class="img-fluid rounded-4 shadow-lg main-img" alt="Plumbing Main Image">
                    <img src="{{ asset('build/assets/user/img/slider3.jpg') }}" class="position-absolute rounded-4 shadow overlay-img" alt="Team" style="width: 50%; bottom: -20px; left: -30px;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->



    <div class="container-fluid fact-section position-relative text-white py-5">
    <!-- Parallax Background -->
    <div class="fact-bg position-absolute top-0 start-0 w-100 h-100 z-n1"></div>

    <div class="container py-5 position-relative z-1">
        <div class="row g-4 text-center">
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="fact-box glass-box shadow-lg p-4 rounded-4">
                    <i class="fa fa-check fa-3x gradient-icon mb-3"></i>
                    <h2 class="display-5 fw-bold" data-toggle="counter-up"> 30</h2>
                    <p class="mb-0">Years Experience</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="fact-box glass-box shadow-lg p-4 rounded-4">
                    <i class="fa fa-users-cog fa-3x gradient-icon mb-3"></i>
                    <h2 class="display-5 fw-bold" data-toggle="counter-up">109</h2>
                    <p class="mb-0">Expert Technicians</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="fact-box glass-box shadow-lg p-4 rounded-4">
                    <i class="fa fa-users fa-3x gradient-icon mb-3"></i>
                    <h2 class="display-5 fw-bold" data-toggle="counter-up">12000</h2>
                    <p class="mb-0">Satisfied Clients</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="fact-box glass-box shadow-lg p-4 rounded-4">
                    <i class="fa fa-wrench fa-3x gradient-icon mb-3"></i>
                    <h2 class="display-5 fw-bold" data-toggle="counter-up">3000</h2>
                    <p class="mb-0">Complete Projects</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->


    <!-- Fact End -->


     <br>
     <br>

<br>

  <div class="main-section">
    <!-- Left Text Section -->
    <div class="text-section">
      <h1>Welcome to Our Premium Colors Of Life</h1>
      <p>We specialize in bold, vibrant wall paintings that bring life and personality to every space.
        <br>
        From traditional truck art to modern artistic murals, our work reflects creativity and culture.
        <br>
Experience the perfect blend of color, craftsmanship, and originality on every wall we touch.

</p>
    </div>

    <!-- Right Walking Video Section -->
    <div class="walk-section">
      <!-- Replace with your transparent background walking video -->
      <video src="{{ asset('build/assets/user/video/man1.mp4') }}" autoplay muted loop playsinline></video>
    </div>
  </div>



<!-- Gallery Start -->
<div class="container my-5">
    <h2 class="text-center mb-4">Photo Gallery</h2>
    <div class="row g-4">

        <!-- Image 1 -->
        <div class="col-md-4 col-sm-6">
            <a href="{{ asset('build/assets/user/img/bookwall.jpg') }}" data-lightbox="gallery" data-title="School Library">
                <div class="position-relative overflow-hidden rounded shadow gallery-img-container">
                    <img src="{{ asset('build/assets/user/img/bookwall.jpg') }}" class="img-fluid w-100 gallery-img" alt="Library">
                    <div class="gallery-overlay">
                        <i class="fa fa-search-plus text-white fa-2x"></i>
                    </div>
                </div>
            </a>
        </div>

        <!-- Image 2 -->
        <div class="col-md-4 col-sm-6">
            <a href="{{ asset('build/assets/user/img/butterfly.jpg') }}" data-lightbox="gallery" data-title="Science Lab">
                <div class="position-relative overflow-hidden rounded shadow gallery-img-container">
                    <img src="{{ asset('build/assets/user/img/butterfly.jpg') }}" class="img-fluid w-100 gallery-img" alt="Science Lab">
                    <div class="gallery-overlay">
                        <i class="fa fa-search-plus text-white fa-2x"></i>
                    </div>
                </div>
            </a>
        </div>

        <!-- Image 3 -->
        <div class="col-md-4 col-sm-6">
            <a href="{{ asset('build/assets/user/img/birds.jpg') }}" data-lightbox="gallery" data-title="Computer Class">
                <div class="position-relative overflow-hidden rounded shadow gallery-img-container">
                    <img src="{{ asset('build/assets/user/img/birds.jpg') }}" class="img-fluid w-100 gallery-img" alt="Computer Class">
                    <div class="gallery-overlay">
                        <i class="fa fa-search-plus text-white fa-2x"></i>
                    </div>
                </div>
            </a>
        </div>

        <!-- Add more images similarly -->
        <!-- Image 4 -->
        <div class="col-md-4 col-sm-6">
            <a href="{{ asset('build/assets/user/img/animal.jpg') }}" data-lightbox="gallery" data-title="Playground">
                <div class="position-relative overflow-hidden rounded shadow gallery-img-container">
                    <img src="{{ asset('build/assets/user/img/animal.jpg') }}" class="img-fluid w-100 gallery-img" alt="Playground">
                    <div class="gallery-overlay">
                        <i class="fa fa-search-plus text-white fa-2x"></i>
                    </div>
                </div>
            </a>
        </div>

        <!-- Image 5 -->
        <div class="col-md-4 col-sm-6">
            <a href="{{ asset('build/assets/user/img/lounch.jpg') }}" data-lightbox="gallery" data-title="Annual Function">
                <div class="position-relative overflow-hidden rounded shadow gallery-img-container">
                    <img src="{{ asset('build/assets/user/img/lounch.jpg') }}" class="img-fluid w-100 gallery-img" alt="Annual Function">
                    <div class="gallery-overlay">
                        <i class="fa fa-search-plus text-white fa-2x"></i>
                    </div>
                </div>
            </a>
        </div>

        <!-- Image 6 -->
        <div class="col-md-4 col-sm-6">
            <a href="{{ asset('build/assets/user/img/wall.jpg') }}" data-lightbox="gallery" data-title="Student Awards">
                <div class="position-relative overflow-hidden rounded shadow gallery-img-container">
                    <img src="{{ asset('build/assets/user/img/wall.jpg') }}" class="img-fluid w-100 gallery-img" alt="Awards">
                    <div class="gallery-overlay">
                        <i class="fa fa-search-plus text-white fa-2x"></i>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>
<!-- Gallery End -->

<!-- Booking Start -->
<div class="container-fluid px-0 position-relative overflow-hidden">
    <!-- Background Video (Muted) -->
    <video autoplay muted loop playsinline id="bg-video" class="position-absolute w-100 h-100 object-fit-cover z-n1">
        <source src="{{ asset('build/assets/user/video/artistic service.mp4') }}" type="video/mp4">
    </video>

    <!-- Overlay with Blur and Gradient -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="backdrop-filter: blur(4px); background: rgba(0,0,0,0.3); z-index: 0;"></div>

    <!-- Content -->
    <div class="position-relative text-center py-5 z-1">
        <button type="button" class="btn-play btn-glass pulse-animation mb-4" data-bs-toggle="modal" data-src="{{ asset('build/assets/user/video/artistic service.mp4') }}" data-bs-target="#videoModal">
            <i class="bi bi-play-fill text-white fs-1"></i>
        </button>
        <h2 class="text-white display-5 fw-bold animate__animated animate__fadeInDown">Click to see our Premium Artistic Services</h2>
    </div>

    <!-- Video Modal (Muted) -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content bg-black text-white rounded-4 shadow-lg border-0">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="videoModalLabel">Watch Full Video</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9">
                        <video controls autoplay muted class="w-100 h-100">
                            <source src="{{ asset('build/assets/user/video/artistic service.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">




@section('content')
 
<h1 class="text-center mb-4">User Feedback</h1>

@if ($feedbacks->isEmpty())
    <p class="text-muted text-center">No feedback available.</p>
@else
    <div class="container mt-4 position-relative">
        <div id="feedbackCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                @foreach ($feedbacks as $feedback)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="card mx-auto shadow-lg border-0" style="max-width: 600px;">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim($feedback->email))) }}?s=50&d=identicon"
                                         class="rounded-circle me-3" width="50">

                                    <div>
                                        <h5 class="mb-1">{{ $feedback->name }}</h5>
                                        <p class="text-muted mb-1">{{ $feedback->email }}</p>

                                        <p class="text-warning mb-0">
                                            {!! str_repeat('⭐', $feedback->rating) !!}
                                        </p>
                                    </div>
                                </div>

                                <p class="mt-3 fst-italic">{{ $feedback->message }}</p>

                                @if ($feedback->photo)
                                    <img src="{{ asset('storage/' . $feedback->photo) }}" class="img-fluid rounded mt-2" alt="User Photo">
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
<button class="carousel-control-prev" type="button" data-bs-target="#feedbackCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            
            
            <button class="carousel-control-next" type="button" data-bs-target="#feedbackCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endif 


      
<!-- Custom CSS -->
<style>
    .custom-carousel-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 50px;
        height: 50px;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .carousel-control-prev {
        left: -60px; /* Move left arrow slightly outside */
    }

    .carousel-control-next {
        right: -60px; /* Move right arrow slightly outside */
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        width: 30px;
        height: 30px;
    }
</style>


 <!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000,
            smartSpeed: 1500,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: true,
            dots: false,
            navText: [
                '<i class="bi bi-chevron-left"></i>',
                '<i class="bi bi-chevron-right"></i>'
            ]
        });

        // Zoom effect on image click
        $(".carousel-image").on("click", function () {
            $(".carousel-image").not(this).removeClass("zoomed");
            $(this).toggleClass("zoomed");
        });

        // Remove zoom on ESC key
        $(document).on("keyup", function (e) {
            if (e.key === "Escape") {
                $(".carousel-image").removeClass("zoomed");
            }
        });
    });
</script>

<!-- Carousel Section End -->

<!-- Scripts -->

<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000,
            smartSpeed: 1500,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: true,
            dots: false,
            navText: [
                '<i class="bi bi-chevron-left"></i>',
                '<i class="bi bi-chevron-right"></i>'
            ]
        });
    });
</script>



    
    @include('layouts.User.footer')