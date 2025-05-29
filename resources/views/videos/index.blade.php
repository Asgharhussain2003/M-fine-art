@extends('layouts.User.mainuser')

@section('title', 'Edit Service')

@section('content')

<style>
/* COMMON GLOW EFFECTS */
.card {
  border-radius: 10px;
  transition: box-shadow 0.3s ease-in-out;
}
.card:hover {
  box-shadow: 0 0 30px 6px var(--glow-color);
}

.btn {
  transition: box-shadow 0.3s ease-in-out, background-color 0.3s ease-in-out;
  box-shadow: 0 0 10px 2px var(--glow-color);
  color: var(--btn-text-color) !important;
}
.btn:hover {
  box-shadow: 0 0 25px 5px var(--glow-color);
}

/* Glowing iframe */
iframe {
  border: 3px solid var(--glow-color);
  border-radius: 8px;
  box-shadow: 0 0 15px 5px var(--glow-color);
  transition: box-shadow 0.3s ease-in-out;
}
iframe:hover {
  box-shadow: 0 0 30px 10px var(--glow-color);
}

/* THEME: BLACK */
body.black-theme {
  background-color: #121212 !important;
  color: #e0e0e0 !important;
  --glow-color: #f4d35e;
  --btn-text-color: #333;
}
body.black-theme .container.text-white {
  color: #f0e68c !important;
}
body.black-theme .card.bg-dark {
  background-color: #222 !important;
  border: 1px solid var(--glow-color);
}
body.black-theme .btn-primary {
  background-color: #b58900 !important;
  border-color: #b58900 !important;
}
body.black-theme .btn-warning {
  background-color: #ffb700 !important;
  border-color: #ffb700 !important;
}
body.black-theme .btn-danger {
  background-color:rgb(255, 249, 76) !important;
  border-color:rgb(255, 240, 76) !important;
}

/* THEME: YELLOW */
body.yellow-theme {
  background-color: #fff8dc !important;
  color: #333 !important;
  --glow-color: #f4d35e;
  --btn-text-color: #333;
}
body.yellow-theme .container.text-white {
  color: #8b7500 !important;
}
body.yellow-theme .card.bg-dark {
  background-color: #fffacd !important;
  border: 1px solid #e6d259;
}
body.yellow-theme .btn-primary {
  background-color: #f4d35e !important;
  border-color: #f4d35e !important;
  color: #333 !important;
}
body.yellow-theme .btn-warning {
  background-color: #fce77d !important;
  border-color: #fce77d !important;
  color: #333 !important;
}
body.yellow-theme .btn-danger {
  background-color: #ff6f61 !important;
  border-color: #ff6f61 !important;
  color: #fff !important;
}
</style>

<div class="container text-white">
    <h2 class="mb-4">Manage Videos</h2>
    <a href="{{ route('videos.create') }}" class="btn btn-primary mb-3">Add Video</a>

    @foreach($videos as $video)
        <div class="card mb-3 bg-dark text-white">
            <div class="card-body">
                <h5>{{ $video->title }}</h5>
                <p>{{ $video->description }}</p>
                <iframe width="100%" height="315" src="{{ $video->video_url }}" frameborder="0" allowfullscreen></iframe>
                <div class="mt-2">
                    <a href="{{ route('videos.edit', $video->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('videos.destroy', $video->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Delete this video?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
