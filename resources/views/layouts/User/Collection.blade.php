@extends('layouts.User.mainuser')

@section('title', 'Collection')

@section('content')
    @include('layouts.User.navbar')
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fine Truck and Arts - Services</title>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Outfit', sans-serif;
      background: linear-gradient(to right,rgba(7, 6, 6, 0.92),rgba(3, 3, 3, 0.88));
      /* color: #fff; */
      overflow-x: hidden;
    }

    .services-section {
      padding: 80px 30px;
      max-width: 1400px;
      margin: auto;
      text-align: center;
    }

    .services-header h2 {
      font-size: 3rem;
      background: linear-gradient(to right,rgb(255, 187, 110),rgb(228, 105, 4));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 50px;
      letter-spacing: 2px;
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 30px;
    }

    .service-card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 20px;
      padding: 30px;
      cursor: pointer;
      position: relative;
      overflow: hidden;
      transition: all 0.4s ease-in-out;
      box-shadow: 0 0 20px rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(10px);
    }

    .service-card::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle,rgb(228, 105, 4), #3333ff);
      opacity: 0.06;
      transform: rotate(45deg);
      z-index: 0;
    }

    .service-card h3, .service-card p, .service-card i {
      position: relative;
      z-index: 1;
    }

    .service-card h3 {
      font-size: 1.6rem;
      color: #fff;
      margin: 15px 0 10px;
    }

    .service-card p {
      font-size: 0.95rem;
      color: #ccc;
    }

    .service-card i {
      font-size: 2rem;
      color: rgb(234, 185, 39);
    }

    .service-card:hover {
      transform: scale(1.05);
      box-shadow: 0 0 30px rgb(237, 159, 33) ;
    }

    .details-section {
      display: none;
      margin-top: 50px;
      animation: fadeInUp 1s ease forwards;
    }

    .details-card {
       background: linear-gradient(to right,rgba(7, 6, 6, 0.92),rgba(235, 151, 27, 0.88));
      padding: 40px;
      border-radius: 20px;
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      align-items: center;
      box-shadow: 0 0 20px rgba(255,255,255,0.1);
      animation: glow 2s infinite alternate;
    }

    .details-image img, .details-image video {
      width: 300px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(255,255,255,0.2);
    }

    .details-content {
      text-align: left;
      flex: 1;
    }

    .details-content h4 {
      font-size: 2rem;
      color: #fff;
    }

    .details-content p {
      font-size: 1rem;
      color: #ccc;
      margin-top: 10px;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes glow {
      0% {
        box-shadow: 0 0 15px rgb(228, 105, 4);
      }
      100% {
        box-shadow: 0 0 30px rgb(244, 192, 61);
      }
    }


  /* animation style */
/* Reset & Base */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Poppins', sans-serif;
   /* background: ;
  color: #fff;  */
  overflow-x: hidden;
}

/* Floating Stars Background */
.stars-bg {
  position: relative;
  min-height: 100vh;
  background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
  overflow: hidden;
}
.stars-bg::before, .stars-bg::after {
  content: '';
  position: absolute;
  top: -2000px;
  left: 0;
  width: 200%;
  height: 4000px;
  background-image: radial-gradient(2px 2px at 20% 20%, #fff 50%, transparent 100%),
                    radial-gradient(2px 2px at 60% 40%, #fff 50%, transparent 100%),
                    radial-gradient(2px 2px at 80% 80%, #fff 50%, transparent 100%);
  animation: moveStars 80s linear infinite;
  opacity: 0.15;
  z-index: 0;
}
.stars-bg::after {
  animation-delay: 40s;
  opacity: 0.1;
}

@keyframes moveStars {
  0% { transform: translateY(0); }
  100% { transform: translateY(1000px); }
}

/* Main Section */
.main-section {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 40px;
  padding: 100px 5%;
  position: relative;
  z-index: 1;
  flex-wrap: wrap;
}

/* Walk Video Box */
.walk-section {
  flex: 1 1 280px;
  max-width: 300px;
  height: 400px;
  overflow: hidden;
  border-radius: 10%;
  border: 2px solid rgba(236, 234, 102, 0.99);
  box-shadow: 0 0 40px rgb(252, 183, 94);
  background: rgba(255, 255, 255, 0.16);
  backdrop-filter: blur(10px);
}
.walk-section video {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Rotation Animations */
 /* .rotate-slow {
  animation: rotate 10s linear infinite;
}
.rotate-slow.reverse {
  animation-direction: reverse;
}
@keyframes rotate {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(80deg); }
}  */

/* Center Text */
.center-text {
  flex: 2;
  max-width: 600px;
  text-align: center;
  padding: 40px;
  border-radius: 100px;
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(15px);
  box-shadow: 0 0 60px rgb(240, 229, 112);
  border: 1px solid rgb(183, 248, 17);
  animation: fadeInUp 2s ease-in-out;
}
.center-text h1 {
  font-size: 2.8rem;
  background: linear-gradient(90deg, #ff6e7f, #fbb034, #6be585);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-shadow: 0 0 20px rgba(255, 255, 255, 0.4);
  margin-bottom: 20px;
}
.center-text p {
  font-size: 1.2rem;
  color: #eee;
  line-height: 1.7;
  text-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
}

/* Fade In Animation */
@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

/* Responsive */
@media (max-width: 992px) {
  .main-section {
    flex-direction: column;
  }
  .walk-section, .center-text {
    max-width: 90%;
    margin-bottom: 30px;
  }
  .walk-section {
    height: 300px;
  }
  .center-text h1 {
    font-size: 2rem;
  }
}
/* more css animation */

/* Rainbow Glowing Text Animation */
.rainbow-text {
  font-size: 3rem;
  font-weight: bold;
  background: linear-gradient(270deg, #ff5f6d, #ffc371, #48c6ef, #6f86d6, #ff5f6d);
  background-size: 800% 800%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: rainbowGlow 10s ease infinite;
  text-shadow: 0 0 20px rgba(255,255,255,0.5);
}

@keyframes rainbowGlow {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

/* Ensure canvas is on top */
#paintTrail {
  position: fixed;
  top: 0;
  left: 0;
  pointer-events: none;
  z-index: 1000;
}

/* Keep all previous styles too (main-section, walk-section, etc.) */


  </style>
</head>
<body>
  <section class="services-section">
    <div class="services-header">
      <h2>Our Premium Art Services</h2>
    </div>
    <div class="services-grid">
  <div class="service-card" onclick="showDetails(
    'Visual Art', 
    '{{ asset('build/assets/user/img/visualart.jpg') }}', 
    'Capturing timeless beauty through expressive strokes and intricate details.'
  )">
    <i class="fas fa-palette"></i>
    <h3>Visual Art</h3>
    <p>Engaging and emotive visuals crafted with skill.</p>
  </div>
<div class="services-grid">
  <div class="service-card" onclick="showDetails(
    'Visual Art', 
    '{{ asset('build/assets/user/video/1.mp4') }}', 
    'Capturing timeless beauty through expressive strokes and intricate details.'
  )">
    <i class="fas fa-palette"></i>
    <h3>Visual Art</h3>
    <p>Engaging and emotive visuals crafted with skill.</p>
  </div>
  </div>
      <div class="service-card" onclick="showDetails('Acrylic','{{ asset('build/assets/user/img/Acrylic.jpg') }}', 'Vibrant and textured masterpieces made with acrylic mediums.')">
        <i class="fas fa-fill-drip"></i>
        <h3>Acrylic</h3>
        <p>Powerful tones with durable, eye-catching style.</p>
      </div>
      <div class="service-card" onclick="showDetails('Abstract Art', '{{ asset('build/assets/user/video/2.mp4') }}',  'Non-traditional perspectives that evoke imagination.')">
        <i class="fas fa-splotch"></i>
        <h3>Abstract Art</h3>
        <p>Embrace chaos and harmony in perfect balance.</p>
      </div>
      <div class="service-card" onclick="showDetails('Wall Art', '{{ asset('build/assets/user/img/wall art.jpg') }}', 'Transform your space with bold, expressive murals.')">
        <i class="fas fa-border-style"></i>
        <h3>Wall Art</h3>
        <p>Large-scale pieces that change your atmosphere.</p>
      </div>
      <div class="service-card" onclick="showDetails('Pop Art', '{{ asset('build/assets/user/video/3.mp4') }}',  'Fun, bright, and culture-infused expressions.')">
        <i class="fas fa-star"></i>
        <h3>Pop Art</h3>
        <p>Bold, colorful, iconic visuals that pop!</p>
      </div>
      <div class="service-card" onclick="showDetails('Landscape Portrait','{{ asset('build/assets/user/img/Landscape Portrait.jpg') }}', 'The beauty of scenery and emotion in one.')">
        <i class="fas fa-mountain"></i>
        <h3>Landscape Portrait</h3>
        <p>Emotional depth meets scenic beauty.</p>
      </div>
      <div class="service-card" onclick="showDetails('Digital', '{{ asset('build/assets/user/video/4.mp4') }}',  'Precision, power, and pixels in harmony.')">
        <i class="fas fa-laptop"></i>
        <h3>Digital</h3>
        <p>Art that merges creativity and technology.</p>
      </div>
    </div>

    <div class="details-section" id="detailsSection">
      <div class="details-card">
        <div class="details-image" id="mediaContainer"></div>
        <div class="details-content">
          <h4 id="detailsTitle"></h4>
          <p id="detailsCaption"></p>
        </div>
      </div>
    </div>
  </section>

  <script>
  function showDetails(title, mediaPath, caption) {
    document.getElementById('detailsTitle').innerText = title;
    document.getElementById('detailsCaption').innerText = caption;

    const mediaContainer = document.getElementById('mediaContainer');
    const isVideo = mediaPath.endsWith('.mp4');

    if (isVideo) {
      mediaContainer.innerHTML = `
        <video src="${mediaPath}" autoplay loop muted playsinline onclick="this.muted = !this.muted" title="Click to toggle sound"></video>
      `;
    } else {
      mediaContainer.innerHTML = `<img src="${mediaPath}" alt="${title}" />`;
    }

    document.getElementById('detailsSection').style.display = 'block';
    window.scrollTo({ top: document.getElementById('detailsSection').offsetTop - 50, behavior: 'smooth' });
  }
</script>
<br>

<br>
<!-- <div class="stars-bg">
  <div class="main-section">

    <div class="walk-section rotate-slow">
      <video src="{{ asset('build/assets/user/video/man1.mp4') }}" autoplay muted loop playsinline></video>
    </div>

    <div class="center-text">
      <h1>Welcome to the Colors of Life</h1>
      <p>
        We bring walls to life with bold colors and intricate truck art.<br>
        From traditional to modern, our murals speak creativity.<br>
        Experience glowing art with soul in every brushstroke.
      </p>
    </div>

    <div class="walk-section rotate-slow reverse">
      <video src="{{ asset('build/assets/user/video/man1.mp4') }}" autoplay muted loop playsinline></video>
    </div>

  </div>
</div> -->

<!-- Sound Effect (optional) -->
<audio id="hoverSound" src="https://cdn.pixabay.com/download/audio/2023/05/13/audio_3f3c0d3249.mp3?filename=click-124467.mp3"></audio>

<div class="stars-bg" onclick="playSound()">
  <!-- Paint Trail Canvas -->
  <canvas id="paintTrail"></canvas>

  <div class="main-section">

    <!-- Left Rotating Walk Video -->
    <div class="walk-section rotate-slow" onmouseover="playSound()">
      <video src="{{ asset('build/assets/user/video/man2.mp4') }}" autoplay muted loop playsinline></video>
    </div>

    <!-- Center Glowing Text Section -->
    <div class="center-text">
      <h1 class="rainbow-text">Welcome to the Colors of Life</h1>
      <p>
        We bring walls to life with bold colors and intricate truck art.<br>
        From traditional to modern, our murals speak creativity.<br>
        Experience glowing art with soul in every brushstroke.
      </p>
    </div>

    <!-- Right Rotating Walk Video -->
    <div class="walk-section rotate-slow reverse" onmouseover="playSound()">
      <video src="{{ asset('build/assets/user/video/man3.mp4') }}" autoplay muted loop playsinline></video>
    </div>

  </div>
</div>


</body>
</html>


<br>

<!-- script for both animation -->
<!-- 
<script>
// Paint Trail Sparkle
const canvas = document.getElementById("paintTrail");
const ctx = canvas.getContext("2d");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

let particles = [];

document.addEventListener("mousemove", (e) => {
  for (let i = 0; i < 5; i++) {
    particles.push({
      x: e.clientX,
      y: e.clientY,
      size: Math.random() * 4 + 1,
      speedX: Math.random() * 3 - 1.5,
      speedY: Math.random() * 3 - 1.5,
      color: `hsl(${Math.random() * 360}, 100%, 70%)`,
    });
  }
});

function handleParticles() {
  for (let i = 0; i < particles.length; i++) {
    let p = particles[i];
    p.x += p.speedX;
    p.y += p.speedY;
    p.size *= 0.95;

    ctx.fillStyle = p.color;
    ctx.beginPath();
    ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
    ctx.fill();

    if (p.size < 0.5) {
      particles.splice(i, 1);
      i--;
    }
  }
}

function animateTrail() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  handleParticles();
  requestAnimationFrame(animateTrail);
}
animateTrail();

window.addEventListener("resize", () => {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
});

// Hover Sound Effect
function playSound() {
  const audio = document.getElementById("hoverSound");
  if (audio) {
    audio.currentTime = 0;
    audio.play();
  }
}
</script> -->
<script>
  /* Play hover sound */
  function playSound() {
    const audio = document.getElementById("hoverSound");
    if (audio) {
      audio.currentTime = 0;
      audio.play();
    }
  }

  /* Scroll-trigger animation with IntersectionObserver */
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
      }
    });
  }, { threshold: 0.2 });

  document.querySelectorAll(".scroll-animate").forEach(el => {
    observer.observe(el);
  });

  /* Paintbrush sparkle trail */
  const canvas = document.getElementById("paintTrail");
  const ctx = canvas.getContext("2d");
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  let particles = [];

  document.addEventListener("mousemove", (e) => {
    for (let i = 0; i < 5; i++) {
      particles.push({
        x: e.clientX,
        y: e.clientY,
        size: Math.random() * 4 + 1,
        speedX: Math.random() * 3 - 1.5,
        speedY: Math.random() * 3 - 1.5,
        color: `hsl(${Math.random() * 360}, 100%, 70%)`,
      });
    }
  });

  function handleParticles() {
    for (let i = 0; i < particles.length; i++) {
      let p = particles[i];
      p.x += p.speedX;
      p.y += p.speedY;
      p.size *= 0.95;

      ctx.fillStyle = p.color;
      ctx.beginPath();
      ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
      ctx.fill();

      if (p.size < 0.5) {
        particles.splice(i, 1);
        i--;
      }
    }
  }

  function animateTrail() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    handleParticles();
    requestAnimationFrame(animateTrail);
  }
  animateTrail();

  window.addEventListener("resize", () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
  });

  /* Generate stars randomly */
  const starsBg = document.querySelector('.stars-bg');
  const starCount = 100;
  for (let i = 0; i < starCount; i++) {
    let star = document.createElement('div');
    star.classList.add('star');
    star.style.width = `${Math.random() * 2 + 1}px`;
    star.style.height = star.style.width;
    star.style.top = `${Math.random() * 100}%`;
    star.style.left = `${Math.random() * 100}%`;
    star.style.animationDuration = `${(Math.random() * 3) + 2}s`;
    starsBg.appendChild(star);
  }
</script>



@include('layouts.User.footer')
