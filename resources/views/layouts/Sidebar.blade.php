@extends('layouts.main')

@section('title', 'Admin Dashboard')

<div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
               <a href="{{ route('Admindashboard') }}" class="navbar-brand mx-4 mb-3" style="color: gold;">
    <h3 style="color: gold; text-shadow: 0 0 8px gold; font-weight: bold;">
        <i class="fa fa-user-edit me-2" style="color: gold;"></i>Fine Truck <br>& Arts
    </h3>
</a>
 <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('build/assets/admin/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Munawer Hussain
                        </h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    
                    <a href="{{ route('Admindashboard') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{ route('Userindex') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>website</a>
                    <!-- <a href="{{ route('images.create') }}" class="nav-item nav-link"><i class="fa fa-upload me-2"></i>Upload Image</a> Image Upload Link -->
                    <li><a href="{{ route('images.index') }}" class="nav-link">upload Image Table</a></li>
                     <li><a href="{{ route('videos.create') }}" class="nav-link">Video Create</a></li>
                     <li><a href="{{ route('videos.index') }}" class="nav-link">Video Table</a></li>
                 <li class="nav-item"> <a class="nav-link" href="{{ route('admin.feedbacks') }}">Feedback Table</a> 
                   </li>
            
                   
            <li class="nav-item"> <a class="nav-link" href="{{ route('service-collection.index') }}"> Service-Collection</a></li>
                    <a href="{{ route('admin.table') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>contact Tables</a>
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                    <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('admin.signin') }}" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                        </div>
                    </div>
                    <a href="{{ route('logout') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"><form action="{{ route('logout') }}" method="POST">
                          @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
</i></a>
                 </div>
            </nav>
        </div>
        <!-- Sidebar End -->

  <!-- Content Start -->
  <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
    <style>
    .sidebar-toggler {
    color: gold !important;
    font-size: 20px;
    padding: 10px;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.sidebar-toggler:hover {
    background-color: rgba(255, 215, 0, 0.1); /* light gold glow */
    box-shadow: 0 0 10px gold;
    color: white !important;
}

.gold-input {
    color: gold;
    border: 2px solid gold;
    border-radius: 8px;
    padding: 10px 15px;
    background-color: #1e1e1e;
    box-shadow: 0 0 10px rgb(255, 217, 0);
    transition: all 0.3s ease;
    font-weight: 500;
}

.gold-input::placeholder {
    color: rgb(245, 225, 111);
    font-style: italic;
}

.gold-input:focus {
    outline: none;
    border-color: #ffd700;
    box-shadow: 0 0 15px gold;
    background-color: #111;
}

</style>
                <a href="#" class="sidebar-toggler flex-shrink-0" style="color: gold; font-size: 20px; padding: 8px; transition: all 0.3s ease;">
                <i class="fa fa-bars" style="color: gold;"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
    <input class="form-control bg-dark border-0 gold-input" type="search" placeholder="Search">
</form>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('build/assets/admin/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Munawer Hussain</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item"></a>
                            <a href="#" class="dropdown-item"></a>
                            <div class="d-flex justify-content-end mb-4">
                           <form action="{{ route('logout') }}" method="POST">
                          @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>

               </form>
        </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->