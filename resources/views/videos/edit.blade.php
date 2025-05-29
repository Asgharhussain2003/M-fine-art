@extends('layouts.User.mainuser')

@section('title', 'Edit Service')

@section('content')

<style>
/* Global Dark Theme */
body {
    background-color: #0e0e0e;
    font-family: 'Poppins', sans-serif;
    color: #f5d742;
}

/* Container Styling */
.container {
    background-color: #1a1a1a;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 0 20px rgb(245, 215, 66);
    border: 1px solidrgb(245, 215, 66);
    margin-top: 40px;
}

/* Headings */
h2 {
    color: #f5d742;
    text-shadow: 0 0 8px rgb(245, 215, 66);
    font-weight: bold;
    text-align: center;
    margin-bottom: 30px;
}

/* Labels */
label {
    color: #fff;
    font-weight: 600;
    text-shadow: 0 0 3px rgba(245, 215, 66, 0.94);
}

/* Input Fields */
input.form-control,
textarea.form-control {
    background-color: #121212;
    border: 1px solid rgba(245, 215, 66, 0.99);
    color: #fff;
    padding: 12px;
    border-radius: 10px;
    box-shadow: inset 0 0 8px rgba(245, 215, 66, 0.98);
    transition: all 0.3s ease-in-out;
}

input.form-control:focus,
textarea.form-control:focus {
    outline: none;
    border-color: #f5d742;
    box-shadow: 0 0 12px #f5d742aa;
    background-color: #181818;
}

/* Button */
.btn-primary {
    background: linear-gradient(135deg, #f5d742, #f1c40f);
    border: none;
    color: #000;
    font-weight: bold;
    padding: 12px 30px;
    border-radius: 50px;
    box-shadow: 0 0 15px #f5d742aa;
    transition: all 0.3s ease;
    display: block;
    margin: 0 auto;
}

.btn-primary:hover {
    background: linear-gradient(135deg, #fff685, #f5d742);
    box-shadow: 0 0 25px #f5d742;
    transform: scale(1.05);
    color: #111;
}

/* Responsive Tweak */
@media (max-width: 576px) {
    .container {
        padding: 25px;
    }
}
</style>

<div class="container text-white">
    <h2>Edit Video</h2>
    <form action="{{ route('videos.update', $video->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $video->title }}">
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $video->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Video URL</label>
            <input type="url" name="video_url" class="form-control" value="{{ $video->video_url }}">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
