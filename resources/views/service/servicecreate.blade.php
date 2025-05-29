@extends('layouts.main')
@include('layouts.Sidebar')

 
@section('title', 'Add Service')

@section('content')
<!-- <div class="container">
    <h2>Add New Service</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf  
        <input type="text" name="title" placeholder="Service Title" required class="form-control mb-2">
        <textarea name="description" placeholder="Description" required class="form-control mb-2"></textarea>
        <input type="number" name="price" placeholder="Price" required class="form-control mb-2">
        <input type="text" name="duration" placeholder="Duration (e.g., 2-3 days)" required class="form-control mb-2">
        <input type="text" name="category" placeholder="Category" required class="form-control mb-2">
        <input type="file" name="image" class="form-control mb-2">
        <input type="text" name="availability" placeholder="Availability (e.g., Available/Booked)" required class="form-control mb-2">
        <input type="text" name="location" placeholder="Location" required class="form-control mb-2">
        <button type="submit" class="btn btn-success">Add Service</button>
    </form> -->


<div class="container mt-4">
    <h2 class="mb-4">Create Service</h2>
    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label for="name" class="form-label">Service Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Service Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Service Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Service</button>
    </form>
</div>
@endsection


