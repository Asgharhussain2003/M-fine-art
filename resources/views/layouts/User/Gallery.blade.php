@extends('layouts.User.mainuser')

@section('title', 'Userindex')

@section('content')
@include('layouts.User.navbar')

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Georgia&display=swap" rel="stylesheet">

<style>
    .gallery-container {
        background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 100%);
        color: #ffd700;
        padding: 40px 25px;
        border-radius: 20px;
        max-width: 1100px;
        margin: 2rem auto 4rem;
        box-shadow: 0 4px 30px rgba(255, 215, 0, 0.15), inset 0 0 60px rgba(255, 215, 0, 0.1);
        font-family: 'Playfair Display', serif;
    }

    h2.section-heading {
        font-size: 3rem;
        font-weight: 900;
        letter-spacing: 5px;
        color: #ffd700;
        text-transform: uppercase;
        margin-bottom: 2rem;
        text-align: center;
        text-shadow: 0 0 8px #ffd700, 0 0 20px #ffb700;
    }

    .gold-underline {
        width: 160px;
        margin: 0 auto 3rem;
        border-radius: 12px;
        border: 4px solid;
        border-image: linear-gradient(90deg, #ffd700, #ffb700, #ffd700) 1;
        box-shadow: 0 0 15px #ffd700;
    }

    .card-gallery {
        background: rgba(255, 215, 0, 0.05);
        border-radius: 22px;
        box-shadow: 0 8px 32px 0 rgba(255, 215, 0, 0.2), 0 0 15px rgba(255, 215, 0, 0.15);
        border: 1.5px solid rgba(255, 215, 0, 0.4);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        transition: transform 0.35s ease, box-shadow 0.35s ease;
        width: 100%;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .card-gallery:hover {
        transform: translateY(-12px) scale(1.03);
        box-shadow: 0 12px 48px 0 rgba(255, 215, 0, 0.5), 0 0 28px rgba(255, 215, 0, 0.35);
    }

    .card-img-top {
        border-top-left-radius: 22px;
        border-top-right-radius: 22px;
        height: 240px;
        object-fit: cover;
        width: 100%;
        transition: transform 0.5s ease;
    }

    .card-gallery:hover .card-img-top {
        transform: scale(1.08);
    }

    .card-body {
        padding: 25px 30px;
        color: #ffd700;
        display: flex;
        flex-direction: column;
        justify-content: center;
        flex-grow: 1;
    }

    .card-title {
        font-size: 1.6rem;
        font-weight: 700;
        color: #ffd700;
        text-align: center;
        letter-spacing: 1px;
        text-shadow: 0 0 6px #ffb700;
        margin-bottom: 1rem;
    }

    .card-description {
        color: #ffc107 !important;
        font-style: italic;
        font-weight: 700;
        font-family: 'Georgia', serif;
        text-align: center;
        text-shadow: 0 0 6px #ffb700;
        border-bottom: 3px solid #ffd700;
        padding-bottom: 12px;
        margin-bottom: 0;
        font-size: 1rem;
    }

    .navbar, .footer {
        background: linear-gradient(90deg, #1a1a1a, #0f0f0f);
        border-top: 2px solid #ffd700;
        color: #ffd700;
    }

    .navbar a, .footer a {
        color: #ffd700;
        transition: color 0.3s ease;
    }

    .navbar a:hover, .footer a:hover {
        color: #ffb700;
    }

    @media (max-width: 991px) {
        .card-img-top {
            height: 200px;
        }
    }

    @media (max-width: 575px) {
        h2.section-heading {
            font-size: 2.4rem;
            letter-spacing: 2px;
        }

        .card-img-top {
            height: 180px;
        }
    }
</style>

<div class="gallery-container">
    <h2 class="section-heading">Our Work</h2>
    <div class="gold-underline"></div>

    @if($images->count() > 0)
        <div class="row">
            @foreach($images as $image)
                <div class="col-md-4 col-sm-6 mb-4 d-flex">
                    <div class="card-gallery">
                        <img class="card-img-top" src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $image->title }}">
                        <div class="card-body">
                            <div class="card-title">{{ $image->title }}</div>
                            <div class="card-description">{{ $image->description }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center">No images available at the moment.</p>
    @endif
</div>

@include('layouts.User.footer')
@endsection
