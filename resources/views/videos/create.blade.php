@extends('layouts.main')
 
@section('title', 'Add Service')
@section('content')
    @include('layouts.Sidebar')

<style>
/* Black + Gold Theme Styles */

* {
    background-color: #0a0a0a;
    font-family: 'Poppins', sans-serif;
    color: #f4d35e;
}

.container {
    background: #1a1a1a;
    padding: 40px;
    margin-top: 40px;
    border-radius: 15px;
    box-shadow: 0 0 20px #f4d35e80;
    border: 2px solid #f4d35e33;
    transition: all 0.3s ease-in-out;
}

h2 {
    text-align: center;
    font-size: 2.2rem;
    margin-bottom: 30px;
    color: #f4d35e;
    text-shadow: 0 0 8px #f4d35eaa;
}

/* Labels */
label {
    font-weight: 600;
    color: #ffffffcc;
    margin-bottom: 10px;
    display: inline-block;
    text-shadow: 0 0 3px #f4d35e;
}

/* Input fields */
input.form-control,
textarea.form-control {
    background: #121212;
    border: 2px solid #f4d35e44;
    border-radius: 10px;
    color: #fff;
    padding: 12px 15px;
    font-size: 1rem;
    box-shadow: inset 0 0 6px #f4d35e33;
    transition: 0.3s ease;
}

input.form-control:focus,
textarea.form-control:focus {
    background-color: #1e1e1e;
    border-color: #f4d35e;
    outline: none;
    box-shadow: 0 0 12px #f4d35eaa;
}

/* Button */
.btn-success {
    background: linear-gradient(135deg, #f4d35e, #e9c46a);
    border: none;
    color: #000;
    font-weight: 700;
    font-size: 1.1rem;
    padding: 12px 30px;
    border-radius: 50px;
    cursor: pointer;
    box-shadow: 0 0 15px #f4d35eaa;
    transition: 0.3s ease;
    width: 100%;
    max-width: 250px;
    margin: 20px auto 0;
    display: block;
}

.btn-success:hover {
    background: linear-gradient(135deg, #fff3b0, #f4d35e);
    box-shadow: 0 0 25px #f4d35e;
    transform: scale(1.05);
    color: #111;
}

/* Responsive tweak */
@media (max-width: 600px) {
    .container {
        padding: 20px;
    }

    .btn-success {
        width: 100%;
    }
}
</style>

<div class="container text-white">
    <h2>Add New Video</h2>
    <form action="{{ route('videos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Video URL (YouTube Embed Link)</label>
            <input type="url" name="video_url" class="form-control">
        </div>
        <button class="btn btn-success">Add Video</button>
    </form>
</div>
@section('footer')
    @include('layouts.footer')
@endsection
