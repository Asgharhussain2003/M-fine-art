@extends('layouts.User.mainuser')

@section('title', 'Our Category')

@section('content')

    {{-- Navbar --}}
    @include('layouts.User.navbar')

    <div class="container mt-4">
        <h1 class="text-center text-primary mb-4">Our Paint Services</h1>

        @if($services->isEmpty())
            <div class="alert alert-warning text-center" role="alert">
                No paint services available at the moment.
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Category</th>
                            <th>Color</th>
                            <th>Place</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Amount</th>
                            <th>Advance</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td>{{ $service->category_name }}</td>
                                <td>{{ $service->color_name }}</td>
                                <td>{{ $service->place }}</td>
                                <td>{{ \Carbon\Carbon::parse($service->service_date)->format('d M Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($service->service_time)->format('h:i A') }}</td>
                                <td>Rs. {{ number_format($service->amount, 0) }}</td>
                                <td>Rs. {{ number_format($service->advance, 0) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    {{-- Footer --}}
    @include('layouts.User.footer')

@endsection
