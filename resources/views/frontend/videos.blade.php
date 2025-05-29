@extends('layouts.User.mainuser')

@section('title', 'Our services')

@section('content')

    @include('layouts.User.navbar')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

    body {
        background: linear-gradient(135deg,rgb(106, 105, 105),rgb(10, 9, 9));
        color: #f0f0f0;
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
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

    .container {
        padding-top: 30px;
        padding-bottom: 60px;
    }

    .card {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgb(245, 224, 109);
        border-radius: 20px;
        box-shadow: 0 0 15px rgb(195, 163, 2);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        backdrop-filter: blur(15px);
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 0 25px rgb(245, 215, 45), 0 0 50px rgba(255, 217, 0, 0.78);
    }

    .card-body {
        padding: 25px;
    }

    .card h5 {
        color: #ffd700;
        font-weight: 600;
        font-size: 1.3rem;
        margin-bottom: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-shadow: 0 0 5px rgba(255, 215, 0, 0.6);
    }

    iframe {
        border-radius: 12px;
        width: 100%;
        height: 315px;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 0 15px rgba(255, 217, 0, 0.84);
    }

    iframe:hover {
        box-shadow: 0 0 25px rgba(255, 217, 0, 0.95);
        transform: scale(1.01);
    }

    p.mt-2 {
        color: #e0e0e0;
        font-size: 1rem;
        margin-top: 10px;
        line-height: 1.6;
    }

    /* Scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #111;
    }

    ::-webkit-scrollbar-thumb {
        background: #ffc107;
        border-radius: 10px;
    }

    /* Selection */
    ::selection {
        background: #ffd700;
        color: #111;
    }

    @media (max-width: 768px) {
        h2.text-center {
            font-size: 2.2rem;
        }

        .card-body {
            padding: 20px;
        }

        iframe {
            height: 250px;
        }
    }
</style>




<div class="container">
    <h2 class="text-center mb-4">Our Wall Art Videos</h2>
    <div class="row">
        @foreach($videos as $video)
            <div class="col-md-6 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5>{{ $video->title }}</h5>
                        <iframe width="100%" height="315" src="{{ $video->video_url }}" frameborder="0" allowfullscreen></iframe>
                        <p class="mt-2">{{ $video->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
    @include('layouts.User.footer')

@endsection
    