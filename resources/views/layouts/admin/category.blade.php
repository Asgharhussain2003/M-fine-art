
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
<div class="container">
    <h1>All Categories</h1>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $key => $category)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to delete this category?');">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
