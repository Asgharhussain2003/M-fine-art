@extends('layouts.User.mainuser')

@section('title', 'Give Feedback')

@section('content')
    @include('layouts.User.navbar')


    

<style>
     body {
        background: linear-gradient(135deg,rgb(185, 184, 185),rgb(2, 5, 6));
        font-family: 'Poppins', sans-serif;
        padding: 20px;
    }

    .card {
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 30px;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        box-shadow: 0 8px 32px rgba(31, 38, 135, 0.2);
        padding: 35px;
        transition: all 0.4s ease-in-out;
        position: relative;
    }

    .card::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        border-radius: 30px;
        background: linear-gradient(135deg, #7b1fa2, #2196f3);
        z-index: -1;
        opacity: 0.3;
        filter: blur(10px);
        transition: opacity 0.3s ease;
    }

    .card:hover::before {
        opacity: 0.6;
    }

    h2.text-primary {
        font-size: 28px;
        font-weight: 800;
        text-align: center;
        color: #6a1b9a;
        text-shadow: 0 1px 2px #ccc;
        margin-bottom: 25px;
    }

    .form-label {
        font-weight: 600;
        color: #4a148c;
        font-size: 15px;
    }

    .form-control, .form-select, textarea {
        background: #f3e5f5;
        border: 2px solid transparent;
        padding: 12px 20px;
        font-size: 15px;
        border-radius: 30px;
        transition: all 0.3s ease;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.05);
    }

    .form-control:focus, .form-select:focus, textarea:focus {
        border-color: #7b1fa2;
        background: #fce4ec;
        box-shadow: 0 0 10px rgba(123, 31, 162, 0.2);
        outline: none;
    }

    textarea {
        resize: none;
        border-radius: 20px;
    }

    .btn-success {
        background: linear-gradient(to right,rgb(6, 6, 4), #185a9d);
        border: none;
        font-weight: 600;
        font-size: 16px;
        border-radius: 50px;
        padding: 12px;
        color: white;
        transition: all 0.4s ease;
    }

    .btn-success:hover {
        background: linear-gradient(to right, #185a9d, #43cea2);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .alert-success {
        border-radius: 15px;
        font-weight: 500;
        background: #e0f7fa;
        border-left: 6px solid #26a69a;
        color: #00695c;
        padding: 15px 20px;
        margin-bottom: 20px;
    }

    .rounded-pill {
        border-radius: 50px !important;
    } 











</style>        
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h2 class="text-center mb-4 text-primary">Submit Your Feedback</h2>

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('feedback.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Name:</label>
                                <input type="text" name="name" class="form-control rounded-pill" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control rounded-pill" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Rating:</label>
                                <select name="rating" class="form-select rounded-pill">
                                    <option value="5">⭐⭐⭐⭐⭐</option>
                                    <option value="4">⭐⭐⭐⭐</option>
                                    <option value="3">⭐⭐⭐</option>
                                    <option value="2">⭐⭐</option>
                                    <option value="1">⭐</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Message:</label>
                                <textarea name="message" class="form-control rounded" rows="3" required></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success rounded-pill">Submit Feedback</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.User.footer')
@endsection  
