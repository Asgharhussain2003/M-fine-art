<style>

    /* Black and Yellow Premium Navbar Theme */

/* Entire Navbar Background */
.nav-bar {
    background-color: #000 !important;
}

.navbar {
    background-color: #000 !important;
    border-bottom: 2px solid #FFD700; /* gold/yellow border */
}

/* Navbar Links */
.navbar-nav .nav-link {
    color: #FFD700 !important;
    font-weight: 600;
    margin-right: 15px;
    transition: all 0.3s ease;
}

.navbar-nav .nav-link:hover,
.navbar-nav .nav-link.active {
    color: #fff !important;
    background-color: #FFD700 !important;
    border-radius: 5px;
    padding: 6px 12px;
}

/* Navbar Brand */
.navbar-brand h1 {
    color: #FFD700 !important;
}

/* Toggler Icon */
.navbar-toggler .fa-bars {
    color: #FFD700;
}

/* User Dropdown */
.navbar-nav .dropdown-menu {
    background-color: #111;
    border: 1px solid #FFD700;
    border-radius: 8px;
}

.dropdown-menu .dropdown-item {
    color: #FFD700;
    transition: background-color 0.3s;
}

.dropdown-menu .dropdown-item:hover {
    background-color: #FFD700;
    color: #000;
    border-radius: 5px;
}

/* Emergency Contact Box */
.navbar .bg-primary {
    background-color: #FFD700 !important;
    color: #000 !important;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
}

.navbar .bg-primary .text-white {
    color: #000 !important;
}

.navbar .bg-primary .text-secondary {
    color: #000 !important;
}

.navbar .bg-white {
    background-color: #FFD700 !important;
}

.navbar .fa-phone-alt {
    color: #000 !important;
}

/* Mobile Responsiveness */
@media (max-width: 992px) {
    .navbar-collapse {
        background-color: #000 !important;
        padding: 15px;
        border-radius: 10px;
    }

    .nav-link {
        margin-bottom: 10px;
    }
}


</style>


<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4">
        <!-- Navbar Brand -->
        <a href="{{ route('Userindex') }}" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
            <h1 class="text-primary m-0">Fine Art</h1>
        </a>
        <!-- Navbar Toggler for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>

        <!-- Navbar Menu -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto">
                <a href="{{ route('Userindex') }}" class="nav-item nav-link">Home</a>
                <a href="{{ route('User.about') }}" class="nav-item nav-link">About</a>
               <a href="/user/service-collection" class="nav-item nav-link">Services</a>


                <a href="{{ route('User.Collection') }}" class="nav-item nav-link">Collection</a>
                <a href="{{ route('User.Gallery') }}" class="nav-item nav-link">Gallery</a>
                <a href="{{ route('User.contact') }}" class="nav-item nav-link">Contact</a>
                <a href="{{ route('frontend.videos') }}" class="nav-item nav-link"> Videos</a>

                <a href="{{route('User.feedback')}}" class="nav-item nav-link">Feedback </a>
            </div>

            <!-- User Dropdown Menu -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i> <!-- User Icon -->
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @auth
                            <li><span class="dropdown-item-text text-light">{{ Auth::user()->name }}</span></li>
                            <!-- Admin Dashboard Link -->
                            @if(Auth::check() && Auth::user()->Role === 'admin')
                                <li><a class="dropdown-item" href="{{ route('Admindashboard') }}">Dashboard</a></li>
                            @endif
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        @else
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                        @endauth
                    </ul>
                </li>
            </ul>

            <!-- Emergency Contact Section -->
            <div class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg-primary d-flex align-items-center">
                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                    <i class="fa fa-phone-alt text-primary"></i>
                </div>
                <div class="ms-3">
                    <p class="mb-1 text-white">Contact me</p>
                   <h6 class="m-0">
           <a href="tel:+923101167271" class="text-secondary text-decoration-none">+0310 1167271</a>
          </h6>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
