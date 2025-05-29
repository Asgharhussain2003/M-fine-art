@extends('layouts.main')

@section('title', 'Admin Dashboard')

@section('content')
    @include('layouts.Sidebar')

<style>
/* Global Background and Font */
body {
    background: linear-gradient(135deg,rgb(249, 180, 31), #ebedee);
    font-family: 'Poppins', sans-serif;
    color:rgb(9, 97, 185);
    overflow-x: hidden;
}

/* Elegant Heading */
h1 {
    font-size: 2.2rem;
    font-weight: 700;
    color: #1f2937;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

/* Glowing Primary Button */
.btn-primary {
    background: linear-gradient(135deg, #6a11cb,rgb(252, 234, 37));
    border: none;
    color: white;
    padding: 10px 25px;
    font-weight: 600;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(106, 17, 203, 0.4);
    transition: all 0.3s ease-in-out;
}
.btn-primary:hover {
    box-shadow: 0 6px 30px rgba(106, 17, 203, 0.6);
    transform: translateY(-2px);
}

/* Success & Danger Buttons */
.btn-success {
    background:rgb(214, 182, 40);
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 14px rgba(103, 209, 244, 0.4);
}
.btn-success:hover {
    background:rgb(215, 191, 72);
    box-shadow: 0 6px 20px rgba(248, 135, 6, 0.6);
}

.btn-danger {
    background: #ef4444;
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 14px rgba(239, 68, 68, 0.4);
}
.btn-danger:hover {
    background: #dc2626;
    box-shadow: 0 6px 20px rgba(239, 68, 68, 0.6);
}

/* Glassy Card Style */
.card {
    background: rgba(253, 162, 27, 0.9);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.08);
    border: 1px solidrgb(253, 187, 7);
    padding: 20px;
    transition: transform 0.3s ease;
}
.card:hover {
    transform: translateY(-6px);
}

/* Card Header */
.card-header {
    background: transparent;
    border-bottom: 1px solidrgb(240, 171, 23);
    font-weight: 600;
    font-size: 1.15rem;
    color: #374151;
}

/* Table Styling */
.table {
    background-color: rgba(253, 211, 25, 0.84);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}
.table th {
    background: linear-gradient(to right,rgb(253, 251, 251),rgb(248, 186, 2));
    color: #1f2937;
    font-weight: 600;
    padding: 14px;
    text-align: center;
}
.table td {
    padding: 14px;
    color: #374151;
    text-align: center;
    vertical-align: middle;
}
.table-striped tbody tr:nth-of-type(odd) {
    background-color:rgba(255, 185, 7, 0.51);
}
.table-bordered td,
.table-bordered th {
    border: 1px solidrgb(248, 193, 13);
}

/* Alert Success */
.alert-success {
    background: linear-gradient(to right, #bbf7d0,rgb(250, 222, 38));
    border-left: 6px solid #10b981;
    color: #065f46;
    font-weight: 500;
    border-radius: 10px;
    padding: 12px 20px;
    box-shadow: 0 4px 14px rgba(16, 185, 129, 0.15);
}

/* Responsive Enhancements */
@media (max-width: 768px) {
    h1 {
        font-size: 1.6rem;
        text-align: center;
    }
    .btn {
        width: 100%;
        margin-bottom: 10px;
    }
}

    </style>

    
    <nav>


    <!-- Content Start -->
    <div class="container-fluid pt-4 px-4">

    <!-- User data -->
    <div class="container-fluid px-4">
        <h1 class="mt-4">Fine truck Arts </h1>

        <a href="{{ route('admin.users.usercreate') }}" class="btn btn-primary mb-3">Create New User</a> <!-- Naya user create karne ka link -->

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Registered Users
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">

                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Registration Date</th>
                                <th>Actions</th> <!-- Add this column for actions -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                @if($user->Role != 'admin') <!-- Display only if user is not admin -->
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->Role }}</td>
                                        <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                        <td>
                                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-success btn-sm">Edit</a>
                                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td> <!-- Actions column for Edit/Delete -->
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@section('footer')
    @include('layouts.footer')
@endsection
