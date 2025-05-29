<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->paginate(10);
        return view('admin.videos.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'video' => 'required|mimes:mp4,mov,ogg|max:20000',
            'description' => 'nullable|string',
        ]);

        $path = $request->file('video')->store('videos', 'public');

        Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'video_path' => $path,
        ]);

        return redirect()->route('admin.videos.index')->with('success', 'Video uploaded successfully!');
    }

    public function edit(Video $video)
    {
        return view('admin.videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required|string',
            'video' => 'nullable|mimes:mp4,mov,ogg|max:20000',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('video')) {
            Storage::disk('public')->delete($video->video_path);
            $video->video_path = $request->file('video')->store('videos', 'public');
        }

        $video->update([
            'title' => $request->title,
            'description' => $request->description,
            'video_path' => $video->video_path,
        ]);

        return redirect()->route('admin.videos.index')->with('success', 'Video updated successfully!');
    }

    public function destroy(Video $video)
    {
        Storage::disk('public')->delete($video->video_path);
        $video->delete();
        return redirect()->back()->with('success', 'Video deleted successfully!');
    }
}
