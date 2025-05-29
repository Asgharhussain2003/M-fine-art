<style>
  
.footer {
    background: linear-gradient(135deg, #0f0f0f, #1a1a1a);
    color: #e0e0e0;
    font-family: 'Poppins', sans-serif;
    border-top: 5px solid #d4af37; /* Classic gold line */
    box-shadow: 0 -5px 40px rgba(212, 175, 55, 0.2);
    position: relative;
    overflow: hidden;
    backdrop-filter: blur(6px);
}

.footer h4 {
    color: #ffffff;
    font-weight: 600;
    font-family: 'Merriweather', serif;
    font-size: 20px;
    margin-bottom: 25px;
    position: relative;
    letter-spacing: 0.5px;
}

.footer h4::after {
    content: '';
    display: block;
    width: 50px;
    height: 3px;
    background: #d4af37;
    margin-top: 10px;
    border-radius: 2px;
}

.footer p, .footer a {
    font-size: 15px;
    line-height: 1.6;
    color: #cccccc;
}

.footer a:hover {
    color: #ffffff;
    text-decoration: none;
}

.footer a.btn-link {
    display: block;
    color: #bfbfbf;
    transition: all 0.3s ease;
    padding: 4px 0;
    font-weight: 400;
    position: relative;
}

.footer a.btn-link::before {
    content: "›";
    color: #d4af37;
    margin-right: 8px;
    transition: 0.3s;
}

.footer a.btn-link:hover {
    color: #fff;
    transform: translateX(6px);
}

.footer .btn-social {
    margin-right: 12px;
    border-radius: 50%;
    border: 1px solid #d4af37;
    width: 42px;
    height: 42px;
    line-height: 38px;
    text-align: center;
    color: #d4af37;
    transition: all 0.4s ease;
    font-size: 16px;
}

.footer .btn-social:hover {
    background: #d4af37;
    color: #000;
    transform: scale(1.15);
    box-shadow: 0 0 10px #d4af37;
}

.footer .form-control {
    background: rgba(255, 255, 255, 0.05);
    color: #fff;
    border: 1px solid #d4af37;
    border-radius: 50px;
    padding-left: 20px;
    padding-right: 100px;
    height: 50px;
}

.footer .form-control::placeholder {
    color: #bbbbbb;
    font-style: italic;
}

.footer .btn-primary {
    background-color: #d4af37;
    border: none;
    border-radius: 50px;
    padding: 10px 25px;
    transition: all 0.3s ease;
    font-weight: bold;
    color: #000;
}

.footer .btn-primary:hover {
    background-color: #bfa335;
    color: #fff;
}

.footer .copyright {
    padding: 25px 0 15px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    font-size: 14px;
    color: #aaaaaa;
    font-family: 'Merriweather', serif;
    letter-spacing: 0.4px;
}

.footer .copyright a {
    color: #d4af37;
    font-weight: 500;
    text-decoration: none;
}

.footer .copyright a:hover {
    text-decoration: underline;
}

/* Back to Top Button */
.back-to-top {
    background: #d4af37;
    color: #000;
    transition: all 0.4s ease;
    box-shadow: 0 4px 20px rgba(212, 175, 55, 0.4);
    border-radius: 12px;
    font-size: 20px;
}

.back-to-top:hover {
    background: #bfa335;
    color: #fff;
    transform: scale(1.05);
}

/* WOW animation for fadeIn */
.wow.fadeIn {
    animation: fadeInUp 0.8s ease-in-out;
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
.gold-email-btn {
    color: gold !important;
    border: 2px solid gold;
    background-color: transparent;
    border-radius: 30px;
    padding: 10px 18px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 0 8px rgba(255, 215, 0, 0.3);
    font-weight: 600;
    font-size: 14px;
    text-transform: uppercase;
}

.gold-email-btn:hover {
    background-color: gold;
    color: black !important;
    box-shadow: 0 0 15px gold;
    animation: pulse 1s ease infinite;
}

.email-label {
    display: inline-block;
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 10px rgba(255, 215, 0, 0.4);
    }
    50% {
        box-shadow: 0 0 20px rgba(255, 215, 0, 0.7);
    }
    100% {
        box-shadow: 0 0 10px rgba(255, 215, 0, 0.4);
    }
}

/* new 3 buttons */

.gold-email-btn {
    color: gold !important;
    border: 2px solid gold;
    background-color: transparent;
    border-radius: 30px;
    padding: 10px 18px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 0 8px rgba(255, 215, 0, 0.3);
    font-weight: 600;
    font-size: 14px;
    text-transform: uppercase;
}

.gold-email-btn:hover {
    background-color: gold;
    color: black !important;
    box-shadow: 0 0 15px gold;
    animation: pulse 1s ease infinite;
}

.email-label {
    display: inline-block;
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 10px rgba(255, 215, 0, 0.4);
    }
    50% {
        box-shadow: 0 0 20px rgba(255, 215, 0, 0.7);
    }
    100% {
        box-shadow: 0 0 10px rgba(255, 215, 0, 0.4);
    }
}

</style>    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
    <h4 class="text-light mb-4">Address</h4>

    <p class="mb-2">
        <i class="fa fa-map-marker-alt me-3"></i>
        Korangi Crossing Karachi
    </p>

    <p class="mb-2">
        <i class="fa fa-phone-alt me-3"></i>
        <a href="tel:+923101167271" class="text-light text-decoration-none">+0310 1167271</a>
    </p>
    <p class="mb-2">
    <i class="fa fa-envelope me-2 text-light"></i>
    <a href="https://mail.google.com/mail/?view=cm&to=munawarhk536@gmail.com" 
       target="_blank" 
       class="text-light text-decoration-none">
        munawarhk536@gmail.com
    </a>
</p>



    <div class="d-flex pt-2">


    

     <a class="btn btn-outline-light btn-social me-2" 
   href="https://www.facebook.com/105438262369778" 
   target="_blank">
    <i class="fab fa-facebook-f"></i>
</a>
 
        <br>
<a class="btn btn-outline-light btn-social me-2"  href="https://www.youtube.com/@finetruckart8498"  target="_blank" >
    <i class="fab fa-youtube fs-4"></i>
</a>
<!-- 
        <a class="btn btn-outline-light btn-social me-2" href="https://instagram.com/yourprofile" target="_blank">
            <i class="fab fa-instagram"></i>
        </a> -->
    <a class="btn btn-outline-light btn-social gold-email-btn" 
   href="https://mail.google.com/mail/?view=cm&to=munawarhk536@gmail.com" 
   target="_blank" 
   data-bs-toggle="tooltip" 
   data-bs-placement="top" 
   title="Send Email">
    <i class="fas fa-envelope"></i> 
</a>


    </div>
</div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Days</h4>
                    <h6 class="text-light">7: Days in a week</h6>
                    <p class="mb-4">09.00 AM - 09.00 PM</p>
                    <h6 class="text-light">Saturday - Sunday:</h6>
                    <p class="mb-0">09.00 AM - 12.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="Visual Art">Visual Art</a>
                    <a class="btn btn-link" href="Acrylic">Acrylic</a>
                    <a class="btn btn-link" href="Abstract Art">Abstract Art</a>
                    <a class="btn btn-link" href="Wall Art">Wall Art</a>
                    <a class="btn btn-link" href="Pop Art">Pop Art</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Thanks For Watching my website .</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
    &copy; <a class="border-bottom text-gold" href="#">✨Fine 🚚 Truck 🎨Arts</a>, All Right Reserved.
</div>

<div class="col-md-6 text-center text-md-end">
    Designed By 
    <a class="border-bottom text-gold" href="#"> 🧑‍💻Asghar Hussain Sabri</a> 
    | ✨ Distributed By 
    <a class="text-gold" href="#">Fine Truck  Arts</a>
</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

<style>.text-gold {
    color: gold !important;
            font-weight: bold;
    }
    .icon {
        margin-right: 4px;
    }


</style>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>
<script>
  const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  tooltipTriggerList.map(el => new bootstrap.Tooltip(el));
</script>
