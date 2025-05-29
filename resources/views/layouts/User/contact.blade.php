@extends('layouts.User.mainuser')

@section('title', 'Userindex')

@section('content')
    @include('layouts.User.navbar')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - Fine Trucks Art</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

  <!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #121212;
      color: #fff;
    }

    h1, h6 {
      color: #ffd700;
    }

    .form-control, .form-floating label {
      background-color: #1e1e1e;
      color: #fff;
    }

    .form-control::placeholder {
      color: #bbb;
    }

    .form-control:focus {
      background-color: #1e1e1e;
      color: #fff;
      border-color: #ffd700;
      box-shadow: none;
    }

    .btn-primary {
      background-color: #ffd700;
      border: none;
      color: #121212;
      font-weight: bold;
    }

    .btn-primary:hover {
      background-color: #e6c200;
      color: #000;
    }

    .map-container,
    .contact-section {
      flex: 1;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      background-color: #1a1a1a;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 0 10px rgba(255, 215, 0, 0.3);
    }

    .map-container iframe {
      flex: 1;
      width: 100%;
      height: 100%;
      border: none;
      border-radius: 15px;
    }

    .equal-container {
      display: flex;
      gap: 30px;
      height: 100%;
      min-height: 100%;
    }

    @media (max-width: 991.98px) {
      .equal-container {
        flex-direction: column;
      }
    }

    .section-padding {
      padding: 60px 0;
    }


    /* advance css */

/* Contact Info Cards */
.contact-section .info-card {
  background: #252525;
  border: 2px solid transparent;
  border-radius: 12px;
  transition: 0.4s;
  height: 100%;
  padding: 20px;
  text-align: center;
}

.contact-section .info-card:hover {
  border-color: #ffc107;
  background: #1a1a1a;
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(255,193,7,0.2);
}

.contact-section .info-card i {
  font-size: 1.8rem;
  color: #ffc107;
  margin-bottom: 10px;
}

/* Buttons */
.contact-section .btn {
  border-radius: 30px;
  font-weight: 500;
  transition: all 0.3s ease-in-out;
}

.contact-section .btn:hover {
  transform: scale(1.05);
  box-shadow: 0 6px 15px rgba(0,0,0,0.3);
}

/* Map Styling */
.contact-section iframe {
  border: none;
  border-radius: 12px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.4);
}

/* Form Styling */


.contact-section .form-control:focus {
  background-color: #1d1d1d;
  border-color: #ffc107;
  box-shadow: 0 0 5px rgba(255,193,7,0.5);
}

/* Business Hours Text */
.contact-section .business-hours p {
  font-size: 0.95rem;
  margin-bottom: 5px;
}

/* Responsive Equal Height Fix */
@media (min-width: 768px) {
  .equal-height {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
  }
}

  </style>
</head>
<body>

<!-- Contact Section -->
<div class="container section-padding">
  <div class="equal-container">
<div class="col-lg-6 d-flex flex-column justify-content-between wow animate__animated animate__fadeInLeft" data-wow-delay="0.2s">
  <!-- Section Title -->
  <div class="mb-4">
    <h6 class="text-uppercase text-warning">
      <i class="bi bi-geo-alt-fill"></i> How to Find Us
    </h6>
    <h1 class="mb-3">Fine Truck Arts</h1>
    <!-- <p class="text-light">
      Visit our showroom in Karachi to explore the colorful world of Pakistani truck art. Whether it's for decoration or a custom vehicle, we're here to help.
    </p> -->
    <p class="text-light fst-italic">
  Step into the vibrant world of <span class="text-warning fw-bold">Fine Truck and Arts</span> — where tradition meets creativity. Visit our Karachi showroom to explore exquisite Pakistani truck art, perfect for home décor, gifting, or custom vehicle designs that celebrate culture in every color.
</p>

  </div>

  <!-- Contact Info Cards -->
 <div class="row text-light mb-4 g-3">
  <!-- Phone -->
  <div class="col-md-4">
    <a href="tel:+923101167271" class="text-decoration-none">
      <div class="p-3 bg-dark rounded text-center border border-warning h-100">
        <i class="bi bi-telephone-fill fs-4 text-warning"></i>
        <p class="mb-0 text-light">+92 310 1167271</p>
      </div>
    </a>
  </div>

  <!-- Email -->
  <!-- <div class="col-md-4">
    <a href="mailto:munawarhk536@gmail.com" class="text-decoration-none">
      <div class="p-3 bg-dark rounded text-center border border-warning h-100">
        <i class="bi bi-envelope-fill fs-4 text-warning"></i>
        <h6 style="font-size: 0.75rem; color: #f8f9fa;">munawarhk536@gmail.com</h6>
      </div>
    </a>
  </div> -->

  <!-- Email (Open Gmail Compose) -->
<div class="col-md-4">
  <a href="https://mail.google.com/mail/?view=cm&fs=1&to=munawarhk536@gmail.com" 
     target="_blank" class="text-decoration-none">
    <div class="p-3 bg-dark rounded text-center border border-warning h-100">
      <i class="bi bi-envelope-fill fs-4 text-warning"></i>
      <h6 style="font-size: 0.75rem; color: #f8f9fa;">munawarhk536@gmail.com</h6>
    </div>
  </a>
</div>


  <!-- Location -->
  <div class="col-md-4">
    <a href="https://www.google.com/maps/place/Korangi,+Karachi" target="_blank" class="text-decoration-none">
      <div class="p-3 bg-dark rounded text-center border border-warning h-100">
        <i class="bi bi-geo-alt-fill fs-4 text-warning"></i>
        <p class="mb-0 text-light">Korangi, Karachi</p>
      </div>
    </a>
  </div>
</div>


  <!-- Google Map -->
  <div class="map-container">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.031473935167!2d67.1357512150033!3d24.82984098406271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33fc6b71ed711%3A0xf4b12f0730c00b22!2sAptech%20Korangi!5e0!3m2!1sen!2s!4v1690000000000!5m2!1sen!2s"
      allowfullscreen=""
      loading="lazy"
      style="border:0; width: 100%; height: 300px; border-radius: 10px;">
    </iframe>
  </div>

  <!-- Business Hours + WhatsApp -->
  <div class="mt-4 text-light">
    <p class="mb-1"><strong>Business Hours:</strong> Always–Open, 24: Hours –in a week </p>
    <a href="https://wa.me/923101167271" target="_blank" class="btn btn-success btn-sm mt-2">
      <i class="bi bi-whatsapp"></i> Chat on WhatsApp
    </a>
    <a href="tel:+92310 1167271" class="btn btn-warning btn-sm mt-2 ms-2">
      <i class="bi bi-telephone-fill"></i> Call Now
    </a>
  </div>
</div>



    <!-- Contact Form Section -->
<div class="contact-section wow animate__animated animate__fadeInRight" data-wow-delay="0.4s">
  <div>
    <h6 class="text-uppercase">Get In Touch</h6>
    <h1 class="mb-4">{{ isset($contact) ? 'Edit Contact' : 'Contact For Any Query' }}</h1>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Show validation errors --}}
    @if($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ isset($contact) ? route('contact.update', $contact->id) : route('contact.store') }}" method="POST">
      @csrf
      @if(isset($contact))
        @method('PUT')
      @endif

      <div class="form-floating mb-3">
        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="{{ old('name', $contact->name ?? '') }}" required>
        <label for="name">Your Name</label>
      </div>

      <div class="form-floating mb-3">
        <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" value="{{ old('email', $contact->email ?? '') }}" required>
        <label for="email">Your Email</label>
      </div>

      <div class="form-floating mb-3">
        <input type="tel" name="phone" class="form-control" id="phone" placeholder="Your Phone" value="{{ old('phone', $contact->phone ?? '') }}" required>
        <label for="phone">Your Phone</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" value="{{ old('subject', $contact->subject ?? '') }}" required>
        <label for="subject">Subject</label>
      </div>

      <div class="form-floating mb-3">
        <textarea name="message" class="form-control" id="message" placeholder="Leave a message here" style="height: 120px;" required>{{ old('message', $contact->message ?? '') }}</textarea>
        <label for="message">Message</label>
      </div>

      <button type="submit" class="btn btn-primary w-100">
        {{ isset($contact) ? 'Update Contact' : 'Send Message' }}
      </button>
    </form>
  </div>
</div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
    @include('layouts.User.footer')
@endsection
