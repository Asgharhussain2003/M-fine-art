@extends('layouts.main')
@include('layouts.Sidebar')

@section('content')
<div class="container mt-4">
    <h2>Upload Image</h2>
    <form method="POST" action="{{ route('images.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Title" class="form-control mb-2" required>
        <textarea name="description" class="form-control mb-2" placeholder="Description"></textarea>
        <input type="file" name="image" class="form-control mb-2" required>
        <button class="btn btn-success">Upload</button>
    </form>
</div>
@endsection
