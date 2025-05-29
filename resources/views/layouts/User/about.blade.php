@extends('layouts.User.mainuser')

@section('title', 'aboutindex')


@section('content')

@section('content')
    @include('layouts.User.navbar')

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<style>
    .service-item-top {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-item-top:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }

    .service-item-top .overflow-hidden {
        position: relative;
    }

    .service-item-top img {
        transition: transform 0.5s ease;
        object-fit: cover;
        height: 300px;
        width: 100%;
    }

    .service-item-top:hover img {
        transform: scale(1.05);
    }

    .service-item-top .bg-light {
        border-top: 1px solid #eee;
        background: #fff;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
        transition: background 0.3s ease;
    }

    .service-item-top:hover .bg-light {
        background: linear-gradient(90deg,rgb(248, 204, 86) 0%,rgb(223, 126, 252) 50%,rgb(204, 148, 244) 100%);
        color: white;
    }

    .service-item-top h5 {
        font-weight: 600;
        margin: 0;
        transition: color 0.3s ease;
    }

    .service-item-top:hover h5 {
        color: #fff;
    }

    .btn.btn-square {
        border-radius: 50%;
        width: 40px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        transition: background 0.3s ease, color 0.3s ease;
    }

    .service-item-top:hover .btn-outline-primary {
        background-color: #fff;
        color: #0052D4;
    }


    /* about */
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

/* term styling */


    .team-item {
        background-color: #fff;
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    .team-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
    }

    .team-item img {
        width: 100%;
        height: 280px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .team-item:hover img {
        transform: scale(1.05);
    }

    .team-text {
        text-align: center;
        padding: 20px;
        background-color: #f9f9f9;
    }

    .team-text .bg-light {
        background-color: transparent !important;
    }

    .team-text h5 {
        font-size: 20px;
        color: #222;
        margin-bottom: 4px;
    }

    .team-text small {
        color: #888;
        font-size: 14px;
    }

    .team-text .bg-primary {
        background-color: transparent !important;
        padding-top: 15px;
    }

    .btn-square {
        width: 40px;
        height: 40px;
        border-radius: 50% !important;
        background-color: #007bff;
        color: #fff !important;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-square:hover {
        background-color: #0056b3;
        transform: scale(1.1);
    }

    @media (max-width: 768px) {
        .team-item img {
            height: 220px;
        }
    }


/* animation */

   

   
</style>
   
 <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Outfit', sans-serif;
      background: #f3f4f6;
      color: #1f2937;
      overflow-x: hidden;
      transition: background 0.5s, color 0.5s;
    }

    body.dark {
      background: #111827;
      color: #f9fafb;
    }

    .dark .category-card {
      background: #1f2937;
      color: #f9fafb;
    }

    header {
      text-align: center;
      padding: 60px 20px;
      background: linear-gradient(to right,rgb(255, 210, 95),rgb(243, 144, 6));
      color: white;
      border-bottom-left-radius: 50% 10%;
      border-bottom-right-radius: 50% 10%;
      position: relative;
    }

    .dark-toggle {
      position: absolute;
      top: 20px;
      right: 30px;
      background: white;
      color: #111827;
      border: none;
      border-radius: 30px;
      padding: 8px 18px;
      cursor: pointer;
      font-weight: 600;
      transition: background 0.3s;
    }

    .dark .dark-toggle {
      background: #374151;
      color: #f3f4f6;
    }

    header h1 {
      font-size: 3rem;
      margin-bottom: 10px;
    }

    header p {
      font-size: 1.2rem;
    }

    .category-section {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
      max-width: 1200px;
      margin: 60px auto;
      padding: 0 20px;
    }

    .category-card {
      background: white;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 15px 30px rgba(248, 220, 79, 0.97);
      text-align: center;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      position: relative;
      cursor: pointer;
      text-decoration: none;
      color: inherit;
      transform-origin: center;
    }

    .category-card:hover {
      transform: scale(1.04) rotate(0.5deg);
      box-shadow: 0 25px 40px rgb(189, 95, 1);
    }

    .category-image {
      width: 100%;
      height: 180px;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .category-card:hover .category-image {
      transform: scale(1.1);
    }

    .category-title {
      font-size: 1.6rem;
      font-weight: 700;
      margin-top: 20px;
    }

    .category-description {
      font-size: 1rem;
      margin: 10px 20px 20px;
      color:rgb(228, 102, 237);
    }

    .dark .category-description {
      color:rgb(218, 87, 238);
    }

    @media (max-width: 600px) {
      header h1 {
        font-size: 2rem;
      }
    }
  </style>

  <!-- facts styling -->

  


<style>
.advanced-counter-section {
  background: linear-gradient(135deg, #1f1c2c, #928dab);
  color: #fff;
  position: relative;
  z-index: 1;
}

.counter-card {
  background: rgba(255, 255, 255, 0.05);
  padding: 30px 20px;
  border-radius: 18px;
  border: 2px solid transparent;
  background-clip: padding-box;
  position: relative;
  overflow: hidden;
  transition: all 0.4s ease;
  box-shadow: 0 0 15px rgba(255, 255, 255, 0.1);
}

.counter-card:hover {
  transform: translateY(-10px);
  border-image: linear-gradient(45deg, #ff9a9e, #fad0c4, #fad0c4, #fbc2eb);
  border-image-slice: 1;
  box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
}

.icon-premium {
  color: #ffeaa7;
  transition: transform 0.3s ease;
}

.counter-card:hover .icon-premium {
  transform: scale(1.2) rotate(5deg);
}

.neon-number {
  font-size: 2.8rem;
  font-weight: 800;
  text-shadow: 0 0 5px #fff, 0 0 10px #fbc2eb, 0 0 15px #ff9a9e;
}

.counter-card p {
  font-size: 1.1rem;
  font-weight: 500;
  color: #eee;
  margin-top: 10px;
}

.wave-bottom {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100px;
  z-index: -1;
}

/* advance style */


<style>

body.dark-mode .advanced-counter-section {
  background: var(--bg-dark);
  color: var(--text-light);
}
body.light-mode .advanced-counter-section {
  background: var(--bg-light);
  color: var(--text-dark);
}
</style>



    <!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                <div class="overflow-hidden">
                    <img src="{{ asset('build/assets/user/img/girl.jpg') }}" alt="Residential Plumbing">
                </div>
                <div class="d-flex align-items-center justify-content-between bg-light p-4">
                    <h5 class="me-3 mb-0">Amazing Crafts</h5>
                    <a class="btn btn-square btn-outline-primary border-2 border-white" href="#"><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                <div class="overflow-hidden">
                    <img src="{{ asset('build/assets/user/img/space.jpg') }}" alt="Commercial Plumbing">
                </div>
                <div class="d-flex align-items-center justify-content-between bg-light p-4">
                    <h5 class="me-3 mb-0"> Lovely Wall Art</h5>
                    <a class="btn btn-square btn-outline-primary border-2 border-white" href="#"><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden">
                    <img src="{{ asset('build/assets/user/img/cycle.jpg') }}" alt="Emergency Servicing">
                </div>
                <div class="d-flex align-items-center justify-content-between bg-light p-4">
                    <h5 class="me-3 mb-0">Elegant Painting</h5>
                    <a class="btn btn-square btn-outline-primary border-2 border-white" href="#"><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

    <!-- About Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">About Us</h6>
                    <h1 class="mb-4">We Are Trusted Plumbing Company Since 1990</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Residential & commercial plumbing</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Quality services at affordable prices</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Immediate 24/ 7 emergency services</p>
                    <div class="bg-primary d-flex align-items-center p-4 mt-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <div class="ms-3">
                            <p class="fs-5 fw-medium mb-2 text-white">Emergency 24/7</p>
                            <h3 class="m-0 text-secondary">+012 345 6789</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-4" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('build/assets/user/img/s (2).jpg') }}" style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                        <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50" src="{{ asset('build/assets/user/img/s (1).jpg') }}" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- About Start -->
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
                    <img src="{{ asset('build/assets/user/img/men.jpg') }}" class="img-fluid rounded-4 shadow-lg main-img" alt="Plumbing Main Image">
                    <img src="{{ asset('build/assets/user/img/cat.jpg') }}" class="position-absolute rounded-4 shadow overlay-img" alt="Team" style="width: 50%; bottom: -20px; left: -30px;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

   

<!-- Advanced Counter Section -->
<!-- <div class="container-fluid advanced-counter-section my-5 py-5 position-relative overflow-hidden">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-6 col-lg-3 text-center">
        <div class="counter-card">
          <i class="fa fa-check fa-3x icon-premium mb-3"></i>
          <h2 class="counter neon-number" data-target="1234">0</h2>
          <p>Years Experience</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 text-center">
        <div class="counter-card">
          <i class="fa fa-users-cog fa-3x icon-premium mb-3"></i>
          <h2 class="counter neon-number" data-target="1234">0</h2>
          <p>Expert Technicians</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 text-center">
        <div class="counter-card">
          <i class="fa fa-users fa-3x icon-premium mb-3"></i>
          <h2 class="counter neon-number" data-target="1234">0</h2>
          <p>Satisfied Clients</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 text-center">
        <div class="counter-card">
          <i class="fa fa-wrench fa-3x icon-premium mb-3"></i>
          <h2 class="counter neon-number" data-target="1234">0</h2>
          <p>Completed Projects</p>
        </div>
      </div>
    </div>
  </div>

  
  <svg class="wave-bottom" viewBox="0 0 1440 100" preserveAspectRatio="none">
    <path d="M0,60 C360,120 1080,0 1440,60 L1440,100 L0,100 Z" fill="#ffffff22"></path>
  </svg>
</div> -->
<!-- Advanced Counter Section with Full Premium Features -->
<div class="container-fluid advanced-counter-section my-5 py-5 position-relative overflow-hidden" id="counter-section">
  <div class="container">
    <div class="d-flex justify-content-end mb-4">
      <button id="toggleTheme" class="btn btn-outline-light">Toggle Theme</button>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3 text-center">
        <div class="counter-card">
          <i class="fa fa-check fa-3x icon-premium mb-3"></i>
          <h2 class="counter neon-number" data-target="1234">0</h2>
          <p>Years Experience</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 text-center">
        <div class="counter-card">
          <i class="fa fa-users-cog fa-3x icon-premium mb-3"></i>
          <h2 class="counter neon-number" data-target="2345">0</h2>
          <p>Expert Technicians</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 text-center">
        <div class="counter-card">
          <i class="fa fa-users fa-3x icon-premium mb-3"></i>
          <h2 class="counter neon-number" data-target="3456">0</h2>
          <p>Satisfied Clients</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 text-center">
        <div class="counter-card">
          <i class="fa fa-wrench fa-3x icon-premium mb-3"></i>
          <h2 class="counter neon-number" data-target="4567">0</h2>
          <p>Completed Projects</p>
        </div>
      </div>
    </div>
  </div>
  <svg class="wave-bottom" viewBox="0 0 1440 100" preserveAspectRatio="none">
    <path d="M0,60 C360,120 1080,0 1440,60 L1440,100 L0,100 Z" fill="#ffffff22"></path>
  </svg>
</div>


<!-- Premium JavaScript Features -->
<script>
// Counter Animation
const counters = document.querySelectorAll('.counter');
const options = { threshold: 0.6 };

const animateCounter = (counter) => {
  const updateCount = () => {
    const target = +counter.getAttribute('data-target');
    let count = +counter.innerText;
    const increment = Math.ceil(target / 100);

    if (count < target) {
      counter.innerText = count + increment;
      requestAnimationFrame(updateCount);
    } else {
      counter.innerText = target;
    }
  };
  updateCount();
};

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      animateCounter(entry.target);
      observer.unobserve(entry.target);
    }
  });
}, options);

counters.forEach(counter => observer.observe(counter));

// Light/Dark Theme Toggle
const toggleBtn = document.getElementById('toggleTheme');
toggleBtn.addEventListener('click', () => {
  document.body.classList.toggle('light-mode');
  document.body.classList.toggle('dark-mode');
});

// Initialize default mode
document.body.classList.add('dark-mode');
</script>


    <!-- Fact End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our Latest</h6>
                <h1 class="mb-5">Collection Of Art</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('build/assets/user/img/black.jpg') }}" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0"></h5>
                                <small></small>
                            </div>
                            <div class="bg-primary">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('build/assets/user/img/hair.jpg') }}" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                            </div>
                            <div class="bg-primary">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('build/assets/user/img/chair.jpg') }}" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                            </div>
                            <div class="bg-primary">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('build/assets/user/img/persons.jpg') }}" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                            </div>
                            <div class="bg-primary">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
        
    
  <br>
<br>
<br>
    
<!-- 
<section class="about-section">
  <h2 class="about-title">Our Artistic Essence</h2>
  <div class="about-grid">
    <div class="about-card">
      <div class="card-icon">🎨</div>
      <div class="card-title">Creative Expression</div>
      <div class="card-text">
        At Fine Truck and Arts, every paint stroke tells a story. Our work blends fine art with functionality to transform any wall or vehicle into a masterpiece.
      </div>
    </div>
    <div class="about-card">
      <div class="card-icon">🚚</div>
      <div class="card-title">Mobile Mastery</div>
      <div class="card-text">
        From trucks to trailers, we bring art to motion. Our mobile canvas projects redefine how art travels and tells its story across roads.
      </div>
    </div>
    <div class="about-card">
      <div class="card-icon">💡</div>
      <div class="card-title">Innovative Designs</div>
      <div class="card-text">
        Our design philosophy pushes boundaries using modern color theory and digital sketching techniques to stay ahead of trends.
      </div>
    </div>
  </div>
</section> -->


  <header>
  <button class="dark-toggle" onclick="toggleDarkMode()">Toggle Dark Mode</button>
  <h1>Our Creative Categories</h1>
  <p>Explore the different worlds we bring to life through art</p>
</header>

<section class="category-section">
  <a href="#" class="category-card" data-aos="fade-up">
    <img src="{{ asset('build/assets/user/img/wall-murals.jpg') }}" alt="Wall Murals" class="category-image">
    <div class="category-title">Wall Murals</div>
    <div class="category-description">Transforming blank walls into powerful stories and expressions.</div>
  </a>

  <a href="#" class="category-card" data-aos="fade-up" data-aos-delay="100">
    <img src="{{ asset('build/assets/user/img/truck art.jpg') }}" alt="Truck Art" class="category-image">
    <div class="category-title">Truck Art</div>
    <div class="category-description">Decorative, colorful designs bringing heritage to motion.</div>
  </a>

  <a href="#" class="category-card" data-aos="fade-up" data-aos-delay="200">
    <img src="{{ asset('build/assets/user/img/3d-texture.jpg') }}" alt="3D Textures" class="category-image">
    <div class="category-title">3D Textures</div>
    <div class="category-description">Modern 3D effects with classic hand-finish and brilliance.</div>
  </a>

  <a href="#" class="category-card" data-aos="fade-up" data-aos-delay="300">
    <img src="{{ asset('build/assets/user/img/calligraphy.jpg') }}" alt="Calligraphy" class="category-image">
    <div class="category-title">Calligraphy</div>
    <div class="category-description">Beautiful script work that merges spirituality and art.</div>
  </a>

  <a href="#" class="category-card" data-aos="fade-up" data-aos-delay="400">
    <img src="{{ asset('build/assets/user/img/spray art.jpg') }}" alt="Spray Painting" class="category-image">
    <div class="category-title">Spray Painting</div>
    <div class="category-description">Dynamic and fast paint applications with striking urban styles.</div>
  </a>

  <a href="#" class="category-card" data-aos="fade-up" data-aos-delay="500">
    <img src="{{ asset('build/assets/user/img/interior design.jpg') }}" alt="Interior Design Art" class="category-image">
    <div class="category-title">Interior Design Art</div>
    <div class="category-description">Styling indoor spaces with artistic walls and custom creativity.</div>
  </a>
</section>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script> 







<script>
  AOS.init();

  function toggleDarkMode() {
    document.body.classList.toggle('dark');
  }
</script>



@section('content')
    @include('layouts.User.footer')
    @endsection