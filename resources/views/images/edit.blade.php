@extends('layouts.main')
@include('layouts.Sidebar')

@section('content')
<div class="container mt-4">
    <h2>Edit Image</h2>
    <form method="POST" action="{{ route('images.update', $image->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="title" class="form-control mb-2" value="{{ $image->title }}" required>
        <textarea name="description" class="form-control mb-2">{{ $image->description }}</textarea>
        <input type="file" name="image" class="form-control mb-2">
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
