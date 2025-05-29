<!-- @extends('layouts.main')

@section('title', 'Admin Table')

@section('content')
    @include('layouts.Sidebar')

<style>
    body {
        background: linear-gradient(to right, #0f0f0f, #1a1a1a);
        color: #ffd700;
    }

    h2 {
        color: #ffd700;
        font-weight: 700;
        text-shadow: 2px 2px #000;
    }

    table {
        background-color: #111;
        border-radius: 12px;
        overflow: hidden;
    }

    th {
        background-color: #000;
        color: #ffd700;
        letter-spacing: 1px;
    }

    td {
        background-color: #1a1a1a;
        color: #fff7c4;
    }

    tr:hover td {
        background-color: #222;
        color: #ffffff;
        transition: 0.3s ease;
    }

    .btn-warning {
        background-color: #ffc107;
        border: none;
        color: #000;
    }

    .btn-danger {
        background-color: #dc3545;
        border: none;
        color: #fff;
    }

    .alert-success {
        background-color: #0d3b1a;
        color: #00ffcc;
        border-left: 5px solid #00ffcc;
        box-shadow: 0 0 12px #00ffcc;
    }
</style>


<div class="container mt-5">
    <h2 class="text-center mb-4">Paint Categories Dashboard</h2>

    <table class="table table-dark table-hover shadow-lg text-warning rounded">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Location</th>
                <th>Amount (PKR)</th>
                <th>Paint Type</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->date }}</td>
                    <td>{{ $category->time }}</td>
                    <td>{{ $category->location }}</td>
                    <td>{{ $category->amount }}</td>
                    <td>{{ $category->paint_type }}</td>
                    <td>{{ $category->created_at->format('d M, Y h:i A') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center text-danger">No categories found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

 @section('footer')
    @include('layouts.footer')
    @endsection
@endsection -->

 @extends('layouts.main')

@section('title', 'Admin Table')

@section('content')
    @include('layouts.Sidebar')

<style>
    body {
        background: linear-gradient(to right, #0f0f0f, #1a1a1a);
        color: #ffd700;
    }

    h2 {
        color: #ffd700;
        font-weight: 700;
        text-shadow: 2px 2px #000;
    }

    table {
        background-color: #111;
        border-radius: 12px;
        overflow: hidden;
    }

    th {
        background-color: #000;
        color: #ffd700;
        letter-spacing: 1px;
    }

    td {
        background-color: #1a1a1a;
        color: #fff7c4;
    }

    tr:hover td {
        background-color: #222;
        color: #ffffff;
        transition: 0.3s ease;
    }

    .btn-warning {
        background-color: #ffc107;
        border: none;
        color: #000;
    }

    .btn-danger {
        background-color: #dc3545;
        border: none;
        color: #fff;
    }

    .alert-success {
        background-color: #0d3b1a;
        color: #00ffcc;
        border-left: 5px solid #00ffcc;
        box-shadow: 0 0 12px #00ffcc;
    }
</style>


@if(session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
@endif
<form action="{{ route('admin.categories.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-md-4 mb-3">
            <input type="text" name="name" class="form-control" placeholder="Category Name" required>
        </div>
        <div class="col-md-2 mb-3">
            <input type="date" name="date" class="form-control" required>
        </div>
        <div class="col-md-2 mb-3">
            <input type="time" name="time" class="form-control" required>
        </div>
        <div class="col-md-4 mb-3">
            <input type="text" name="location" class="form-control" placeholder="Location" required>
        </div>
        <div class="col-md-2 mb-3">
            <input type="number" name="amount" class="form-control" placeholder="Amount (PKR)" required>
        </div>
        <div class="col-md-4 mb-3">
            <input type="text" name="paint_type" class="form-control" placeholder="Paint Type" required>
        </div>
        <div class="col-md-2 mb-3">
            <button type="submit" class="btn btn-warning w-100">Add Category</button>
        </div>
    </div>
</form>

 @section('footer')
    @include('layouts.footer')
    @endsection
@endsection