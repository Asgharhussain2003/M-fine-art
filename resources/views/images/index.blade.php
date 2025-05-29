@extends('layouts.main')

@section('title', 'Image Gallery')

@section('content') {{-- Start the content section expected in your layout --}}

    @include('layouts.sidebar') {{-- Sidebar --}}
<style>/* Container background and text */
.container {
    background-color: #121212; /* dark black */
    color: gold;
    padding: 2rem;
    border-radius: 12px;
}

/* Page title */
h2 {
    color: gold;
    font-weight: 700;
    text-shadow: 0 0 8px gold;
}

/* Buttons styling */
.btn-primary {
    background-color: gold;
    border-color: gold;
    color: black;
    font-weight: 600;
    transition: background-color 0.3s ease, color 0.3s ease;
}
.btn-primary:hover {
    background-color: #bfa10b;
    color: #111;
    box-shadow: 0 0 12px gold;
}

/* Alert success */
.alert-success {
    background-color: #2e2e2e;
    color: gold;
    border: 1px solid gold;
    box-shadow: 0 0 10px gold;
}

/* Cards styling */
.card {
    background-color: #222;
    border: 2px solid gold;
    border-radius: 15px;
    color: gold;
    box-shadow: 0 0 15px rgba(255, 215, 0, 0.6);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card:hover {
    transform: translateY(-6px);
    box-shadow: 0 0 25px gold;
}

/* Card title */
.card-title {
    font-weight: 700;
    color: gold;
}

/* Card text */
.card-text {
    color: #d4af37cc; /* softer gold */
}

/* Edit button */
.btn-warning {
    background-color: #d4af37;
    border-color: #b58c09;
    color: black;
    font-weight: 600;
}
.btn-warning:hover {
    background-color: #b58c09;
    color: #fff;
    box-shadow: 0 0 12px gold;
}

/* Delete button */
.btn-danger {
    background-color: #8b0000;
    border-color: #5c0000;
    color: gold;
    font-weight: 600;
}
.btn-danger:hover {
    background-color: #5c0000;
    color: #fff;
    box-shadow: 0 0 12px gold;
}

/* No Image placeholder */
.bg-secondary {
    background-color: #333 !important;
    color: gold !important;
    font-weight: 700;
    font-size: 1.2rem;
}

/* Responsive tweaks */
@media (max-width: 768px) {
    .container {
        padding: 1rem;
    }
}


/* Smooth transitions for all elements */
* {
    transition: all 0.3s ease-in-out;
}
</style>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <center>
            <h2 class="mb-0">Image Gallery</h2>
</center>
            <a href="{{ route('images.create') }}" class="btn btn-primary">Upload New Image</a>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Image Cards --}}
        <div class="row">
            @forelse ($images as $image)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if($image->image_path)
                            <img src="{{ asset('storage/' . $image->image_path) }}" class="card-img-top" alt="{{ $image->title }}" style="height: 200px; object-fit: cover;">
                        @else
                            <div class="card-img-top bg-secondary text-white d-flex align-items-center justify-content-center" style="height: 200px;">
                                No Image
                            </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $image->title }}</h5>
                            <p class="card-text">{{ $image->description }}</p>
                            <a href="{{ route('images.edit', $image->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('images.destroy', $image->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this image?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-muted">No images found.</p>
            @endforelse
        </div>
    </div>

    @include('layouts.footer') {{-- Footer --}}

@endsection
