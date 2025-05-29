@extends('layouts.User.mainuser')

@section('title', 'Our services')

@section('content')

    @include('layouts.User.navbar')

<h1>Add New Paint Service</h1>

@if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('paint-services.store') }}" method="POST">
    @csrf
    <label>Category Name:</label><br>
    <input type="text" name="category_name" value="{{ old('category_name') }}" required><br><br>

    <label>Color Name:</label><br>
    <input type="text" name="color_name" value="{{ old('color_name') }}" required><br><br>

    <label>Place:</label><br>
    <input type="text" name="place" value="{{ old('place') }}" required><br><br>

    <label>Date:</label><br>
    <input type="date" name="service_date" value="{{ old('service_date') }}" required><br><br>

    <label>Time:</label><br>
    <input type="time" name="service_time" value="{{ old('service_time') }}" required><br><br>

    <label>Amount:</label><br>
    <input type="number" step="0.01" name="amount" value="{{ old('amount') }}" required><br><br>

    <label>Advance:</label><br>
    <input type="number" step="0.01" name="advance" value="{{ old('advance', 0) }}"><br><br>

    <button type="submit">Add Service</button>
</form>

    @include('layouts.User.footer')

@endsection