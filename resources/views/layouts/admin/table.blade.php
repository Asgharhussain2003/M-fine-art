@extends('layouts.main')

@section('title', 'Admin Table')

@section('content')
    @include('layouts.Sidebar')
<style>
    body {
        background-color: #000 !important;
        color: gold !important;
    }

    h1 {
        color: gold !important;
        font-weight: bold;
    }

    .table {
        background-color: #111 !important;
        color: gold !important;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid gold !important;
    }

    .table thead {
        background-color: gold !important;
        color: black !important;
    }

    .table-hover tbody tr:hover {
        background-color: #333 !important;
        color: white !important;
    }

    /* ✅ Green Call Button */
    .btn-success {
        background-color: #28a745 !important; /* Bootstrap green */
        border-color: #28a745 !important;
        color: white !important;
        font-weight: bold;
    }

    .btn-danger {
        background-color: darkred !important;
        border-color: darkred !important;
        color: white !important;
        font-weight: bold;
    }

    .btn-sm {
        font-weight: bold;
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 1.5rem;
        }
    }
</style>



    <h1 class="mt-4 text-center">Contact Messages Details</h1>

    <div class="table-responsive mt-3">
        <table class="table table-bordered table-hover" style="border: 1px solid aqua;">
            <thead class="table-success text-center" style="border: 1px solid pink;">
                <tr style="background-color:">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr style="border-bottom: 1px solid lightyellow;">
                        <td class="text-center align-middle" style="border-color: pink;">{{ $contact->id }}</td>
                        <td class="align-middle" style="border-color: pink;">{{ $contact->name }}</td>
                        <td class="align-middle" style="border-color: pink;">{{ $contact->email }}</td>
                        <td class="text-center align-middle" style="border-color: pink;">{{ $contact->phone }}</td>
                        <td class="align-middle" style="border-color: pink;">{{ $contact->message }}</td>
                        <td class="text-center align-middle" style="border-color: pink;">
                            <a href="tel:{{ $contact->phone }}" class="btn btn-success btn-sm mb-1">Call</a>
                            <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @section('footer')
    @include('layouts.footer')
    @endsection

