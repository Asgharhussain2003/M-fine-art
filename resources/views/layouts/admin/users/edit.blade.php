@extends('layouts.main')

@section('title', 'Edit User')

@section('content')
    @include('layouts.Sidebar')

    <div class="container-fluid pt-4 px-4">
        <h1 class="mt-4">Edit User</h1>

        <!-- Display any validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form for editing a user -->
        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control bg-white" id="name" name="name" value="{{ old('name', $user->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control bg-white" id="email" name="email" value="{{ old('email', $user->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control bg-white" id="password" name="password">
                <small class="form-text text-muted">Leave blank to keep the current password.</small>
            </div>

            <button type="submit" class="btn btn-primary">Update User</button>
        </form>
    </div>
<!-- register edit-->

@section('footer')
    @include('layouts.footer')
@endsection
