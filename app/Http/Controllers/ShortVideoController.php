<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortVideo;
use App\Models\NewsPost;

class ShortVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shortVideos = ShortVideo::all();
        return view('short_videos.index', compact('shortVideos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // paassing the data to the database
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'short_video' => 'required|file|mimes:mp4|max:30480', 
        ]);

        $videoPath = $request->file('short_video')->store('short_videos', 'public');

        ShortVideo::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'video_path' => $videoPath,
            'likes' => 0,
            'views' => 0,
        ]);

        return redirect()->back()->with('success', 'Short video uploaded successfully.');
        //return redirect()->route('short_videos.index')->with('success', 'Short video uploaded successfully.');
   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
