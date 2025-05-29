@extends('layouts.main')

@section('title', 'Admin Dashboard')

@section('content')
    @include('layouts.Sidebar')

<a href="{{ route('services.create') }}" class="btn btn-primary mb-3">Add Service</a>

<table class="table">
    <thead>
        <tr>
            <th>Image</th> 
            <th>Title</th>
            <th>Price</th>
            <th>Category</th>
            <th>Availability</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($services as $service)
            <tr>
                <td>
                    @if ($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" alt="Service Image" width="80" height="80" style="border-radius: 8px;">
                    @else
                        <p>No Image</p> 
                    @endif
                </td>
                <td>{{ $service->title }}</td>
                <td>${{ $service->price }}</td>
                <td>{{ $service->category }}</td>
                <td>{{ $service->availability }}</td>
                <td>
                    <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
