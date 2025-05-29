@extends('layouts.User.mainuser')

@section('title', 'Our services')

@section('content')

    @include('layouts.User.navbar')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="text-primary">Paint Services</h1>
        <a href="{{ route('paint-services.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Add New Service
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Color</th>
                    <th>Place</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Amount</th>
                    <th>Advance</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->category_name }}</td>
                    <td>{{ $service->color_name }}</td>
                    <td>{{ $service->place }}</td>
                    <td>{{ $service->service_date }}</td>
                    <td>{{ $service->service_time }}</td>
                    <td>Rs. {{ number_format($service->amount, 0) }}</td>
                    <td>Rs. {{ number_format($service->advance, 0) }}</td>
                    <td>
                        <a href="{{ route('paint-services.edit', $service) }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>
                        <form action="{{ route('paint-services.destroy', $service) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="text-muted">No services found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


    @include('layouts.User.footer')

@endsection