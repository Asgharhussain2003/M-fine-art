@extends('layouts.main')

@section('title', 'Admin Dashboard')

@section('content')
    @include('layouts.Sidebar')


<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Photo</th>
            <th>Rating</th>
            <th>Message</th>
            <th>Approve</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($feedbacks as $feedback)
            <tr>
                <td>{{ $feedback->name }}</td>
                <td>{{ $feedback->email }}</td>
                <td>
                    @if ($feedback->photo)
                        <img src="{{ asset('storage/' . $feedback->photo) }}" width="50">
                    @else
                        No Photo
                    @endif
                </td>
                <td>{{ $feedback->rating }}⭐</td>
                <td>{{ $feedback->message }}</td>
                <td>
                    @if (!$feedback->is_approved)
                        <form action="{{ route('feedback.approve', $feedback->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-primary">Approve</button>
                            </form>
                    @else
                        <span class="text-success">Approved ✅</span>
                    @endif
                    <td>
    <form action="{{ route('feedback.destroy', $feedback->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this feedback?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
    </form>
</td>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@section('footer')
    @include('layouts.footer')
@endsection
