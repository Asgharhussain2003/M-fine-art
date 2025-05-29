<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    // Admin Dashboard
    public function index()
    {
        $videos = Video::latest()->get();
        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'video_url' => 'required|url',
        ]);

        // Convert URL to embed format properly
        $video_url = $this->convertToEmbed($request->video_url);

        Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'video_url' => $video_url,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video added successfully');
    }

    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required',
            'video_url' => 'required|url',
        ]);

        $video_url = $this->convertToEmbed($request->video_url);

        $video->update([
            'title' => $request->title,
            'description' => $request->description,
            'video_url' => $video_url,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video updated');
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('videos.index')->with('success', 'Video deleted');
    }

    // Show on frontend
    public function frontend()
    {
        $videos = Video::latest()->get();

        // Videos ke URLs already embed URLs honge, isliye seedha bhej rahe hain
        return view('frontend.videos', compact('videos'));
    }

    // Helper method to convert YouTube URL to embed URL
    private function convertToEmbed($url)
    {
        // Agar youtube.com/watch?v=... format hai
        if (Str::contains($url, 'youtube.com/watch')) {
            parse_str(parse_url($url, PHP_URL_QUERY), $query);
            if (isset($query['v'])) {
                return 'https://www.youtube.com/embed/' . $query['v'];
            }
        }

        // Agar youtu.be/... format hai
        if (Str::contains($url, 'youtu.be/')) {
            $path = parse_url($url, PHP_URL_PATH);
            return 'https://www.youtube.com/embed' . $path;
        }

        // Agar URL already embed format me hai ya koi aur video URL hai, to waise hi return karo
        return $url;
    }
}
