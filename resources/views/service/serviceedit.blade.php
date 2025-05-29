@extends('layouts.User.mainuser')

@section('title', 'Edit Service')

@section('content')
<!-- <div class="container mt-5">
    <h2>Edit Service</h2>
    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Service Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ $service->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $service->price }}" required>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label">Duration</label>
            <input type="text" class="form-control" id="duration" name="duration" value="{{ $service->duration }}" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ $service->category }}" required>
        </div>

        <div class="mb-3">
            <label for="availability" class="form-label">Availability</label>
            <input type="text" class="form-control" id="availability" name="availability" value="{{ $service->availability }}" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ $service->location }}" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Service Image</label>
            <input type="file" class="form-control" id="image" name="image">
            @if ($service->image)
                <img src="{{ asset('storage/' . $service->image) }}" alt="Current Image" class="mt-2" width="100">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update Service</button>
    </form>
</div>
@endsection -->

<div class="container mt-4">
    <h2 class="mb-4">Edit Service</h2>
    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="name" class="form-label">Service Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $service->name }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Service Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ $service->description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Current Image</label><br>
            <img src="{{ asset('storage/service/' . $service->image) }}" alt="{{ $service->name }}" width="200" class="mb-2">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Update Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Update Service</button>
    </form>
</div>
@endsection

