<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdAndVideo;


class AdAndVideoController extends Controller
{


   

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adandvideo = AdAndVideo::all();
        return view('adandvideo.index', compact('adandvideo'));
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
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'vertical_ad' => 'nullable|image|max:2048', 
            'horizontal_ad' => 'nullable|image|max:2048', 
            'video_upload' => 'nullable|file|mimes:mp4,mov,avi|max:20480', 
            'video_link' => 'nullable|url',
        ]);
    
        // Store the form data in the database
        $adAndVideo = new AdAndVideo();
        $adAndVideo->title = $validatedData['title'];
        $adAndVideo->description = $validatedData['description']; // Assign description
        // Handle file uploads
        if ($request->hasFile('vertical_ad')) {
            $adAndVideo->vertical_ad = $request->file('vertical_ad')->store('vertical_ads');
        }
        if ($request->hasFile('horizontal_ad')) {
            $adAndVideo->horizontal_ad = $request->file('horizontal_ad')->store('horizontal_ads');
        }
        if ($request->hasFile('video_upload')) {
            $adAndVideo->video_upload = $request->file('video_upload')->store('video_uploads');
        }
        $adAndVideo->video_link = $validatedData['video_link']; // Assign video link
    
        $adAndVideo->save();
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Ad or video added successfully.');
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
