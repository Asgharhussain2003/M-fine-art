@extends('layouts.main')

@section('title', 'Admin Table')

@section('content')
    @include('layouts.Sidebar')
<style>
    /* Container base styles */
.container {
  max-width: 1200px;
  margin: 40px auto;
  padding: 30px 40px;
  background:rgb(126, 126, 126);
  border-radius: 18px;
  box-shadow: 0 12px 40px rgb(251, 251, 249);
  color: #d4af37;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  user-select: none;
}

/* Heading style */
h2 {
  color: #d4af37;
  font-weight: 800;
  font-size: 2.6rem;
  margin-bottom: 30px;
  letter-spacing: 0.12em;
  text-shadow: 0 0 12px #ffd700cc;
  text-align: center;
  text-transform: uppercase;
}

/* Alert success style */
.alert-success {
  background: linear-gradient(90deg, #c2a342, #ffd700);
  color: #121212;
  padding: 18px 30px;
  border-radius: 14px;
  font-weight: 700;
  box-shadow: 0 0 22px #ffd700bb;
  margin-bottom: 40px;
  max-width: 640px;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
  letter-spacing: 0.06em;
  user-select: text;
}

/* Responsive table wrapper */
.table-responsive {
  overflow-x: auto;
  border-radius: 16px;
  box-shadow: 0 6px 35px rgb(212, 175, 55);
  margin-bottom: 50px;
}

/* Table styles */
table.table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0 14px;
  background:rgb(67, 65, 70);
  color: #d4af37;
  font-size: 1.05rem;
  min-width: 700px;
  border-radius: 18px;
  box-shadow: inset 0 0 18pxrgb(212, 175, 55);
}

/* Table header */
thead tr {
  background: linear-gradient(90deg,rgb(203, 175, 120),rgb(255, 174, 0));
  color: #121212;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.15em;
  border-radius: 18px;
}

/* Header cells */
thead th {
  padding: 18px 26px;
  white-space: nowrap;
  user-select: none;
}

/* Body rows */
tbody tr {
  background: #232323;
  transition: background-color 0.4s ease, box-shadow 0.4s ease;
  border-radius: 16px;
  box-shadow: inset 0 0 10px #d4af3722;
}

/* Body cells */
tbody td {
  padding: 14px 22px;
  vertical-align: middle;
  text-align: center;
  white-space: nowrap;
  border-radius: 16px;
  user-select: text;
}

/* Hover effect on rows */
tbody tr:hover {
  background:rgb(156, 156, 152);
  box-shadow: 0 0 28pxrgba(227, 226, 221, 0.8);
  color: #fff9dc;
  cursor: default;
}

/* Scrollbar for table overflow */
.table-responsive::-webkit-scrollbar {
  height: 12px;
}

.table-responsive::-webkit-scrollbar-track {
  background: #1a1a1a;
  border-radius: 12px;
}

.table-responsive::-webkit-scrollbar-thumb {
  background-color: #d4af37;
  border-radius: 12px;
  border: 3px solid #1a1a1a;
}

/* Form Inputs and Textareas */
input[type="text"],
input[type="email"],
input[type="number"],
input[type="password"],
textarea,
select {
  background: #fff;                           /* Crisp white */
  color: #2c2c2c;                            /* Dark charcoal text */
  border: 2px solid #d4af37;                 /* Soft gold border */
  border-radius: 14px;
  padding: 14px 22px;
  font-size: 1.1rem;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 500;
  box-shadow: 0 4px 12px rgba(212, 175, 55, 0.18);
  transition: border-color 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
  width: 100%;
  max-width: 440px;
  display: block;
  margin: 18px auto 28px auto;
  outline: none;
  letter-spacing: 0.03em;
  resize: vertical;
}

/* Focus effect */
input[type="text"]:focus,
input[type="email"]:focus,
input[type="number"]:focus,
input[type="password"]:focus,
textarea:focus,
select:focus {
  border-color: #ffd700;                     /* Bright gold */
  background: #fffdf2;                       /* Light warm tint */
  box-shadow: 0 0 18px 4px rgba(255, 215, 0, 0.38);
}

/* Placeholder styling */
input::placeholder,
textarea::placeholder {
  color: #bfa314;
  opacity: 0.6;
  font-style: normal;
  letter-spacing: 0.05em;
}

/* Disabled inputs */
input[disabled],
textarea[disabled],
select[disabled] {
  background: #f8f6f0;
  color: #a0a0a0;
  border-color: #d0cfa6;
  box-shadow: none;
  cursor: not-allowed;
}

/* Buttons */
button,
input[type="submit"],
input[type="button"] {
  background: linear-gradient(135deg, #d4af37, #ffd700);
  border: none;
  border-radius: 16px;
  color: #121212;
  font-weight: 700;
  font-size: 1.1rem;
  padding: 14px 40px;
  cursor: pointer;
  box-shadow: 0 6px 20px rgba(212, 175, 55, 0.4);
  transition: background 0.3s ease, box-shadow 0.3s ease, transform 0.15s ease;
  letter-spacing: 0.06em;
  user-select: none;
  display: inline-block;
  margin: 20px auto 0 auto;
  text-align: center;
  min-width: 180px;
  text-transform: uppercase;
}

/* Button hover */
button:hover,
input[type="submit"]:hover,
input[type="button"]:hover {
  background: linear-gradient(135deg, #ffd700, #d4af37);
  box-shadow: 0 8px 30px rgba(255, 215, 0, 0.6);
  transform: translateY(-2px);
}

/* Button active */
button:active,
input[type="submit"]:active,
input[type="button"]:active {
  transform: translateY(1px);
  box-shadow: 0 4px 12px rgba(212, 175, 55, 0.25);
}

/* Responsive typography */
@media (max-width: 1200px) {
  h2 {
    font-size: 2.2rem;
  }
  table.table {
    font-size: 1rem;
  }
}

@media (max-width: 768px) {
  h2 {
    font-size: 1.7rem;
  }
  table.table {
    min-width: 600px;
    font-size: 0.95rem;
  }
  input[type="text"],
  input[type="email"],
  input[type="number"],
  input[type="password"],
  textarea,
  select {
    max-width: 100%;
  }
}

@media (max-width: 480px) {
  .container {
    padding: 20px 25px;
  }
  h2 {
    font-size: 1.4rem;
  }
  table.table {
    min-width: 480px;
    font-size: 0.9rem;
  }
}

/* Glowing Heading */
    h2.text-center {
        font-weight: 700;
        font-size: 3rem;
        color: #ffd700;
        text-align: center;
        margin-top: 40px;
        margin-bottom: 50px;
        letter-spacing: 2px;
        position: relative;
        text-shadow: 0 0 10px #ffd700, 0 0 20px #ffeb3b, 0 0 30px #ffcc00;
        animation: glowPulse 3s infinite ease-in-out;
    }

    @keyframes glowPulse {
        0%, 100% {
            text-shadow: 0 0 10px #ffd700, 0 0 20px #ffeb3b;
        }
        50% {
            text-shadow: 0 0 20px #ffcc00, 0 0 40px #fff176;
        }
    }

    h2.text-center::after {
        content: '';
        width: 140px;
        height: 4px;
        background: linear-gradient(90deg, #ffc107, #ffeb3b, #ffc107);
        background-size: 200% 100%;
        animation: shineLine 4s linear infinite;
        display: block;
        margin: 15px auto 0;
        border-radius: 2px;
    }

    @keyframes shineLine {
        0% { background-position: 0% 50%; }
        100% { background-position: 100% 50%; }
    }

</style>
    

<div class="container">
    <h2>All Service Collection Records</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Expected Date</th>
        <th>House Size</th>
        <th>Time</th>
        <th>Email</th>
        <th>Phone</th>
        <th>City</th>
        <th>Amount</th>
        <th>Paint Type</th>
        <th>Action</th> <!-- New Column for Delete -->
    </tr>
</thead>

        <tbody>
    @foreach ($services as $service)
        <tr>
            <td>{{ $service->id }}</td>
            <td>{{ $service->name }}</td>
            <td>{{ $service->expected_date }}</td>
            <td>{{ $service->house_size }}</td>
            <td>{{ $service->time }}</td>
            <td>{{ $service->email }}</td>
            <td>{{ $service->phone }}</td>
            <td>{{ $service->city }}</td>
            <td>{{ $service->amount }}</td>
            <td>{{ $service->paint_type }}</td>
            <td>
<form action="{{ route('service-collection.delete', $service->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this service?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
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