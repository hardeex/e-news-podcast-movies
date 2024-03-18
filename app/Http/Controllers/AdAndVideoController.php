<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdAndVideo;
use Illuminate\Support\Facades\Storage;


class AdAndVideoController extends Controller
{


   

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $verticalAds = AdAndVideo::whereNotNull('vertical_ad')->get();
        return view('adandvideo.index', compact('verticalAds'));
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
            'video_upload' => 'nullable|file|mimes:mp4,mov,avi|max:30480', 
            'video_link' => 'nullable|url',
        ]);
    
        // Retrieve the previous ad and video record (if any)
        $previousAdAndVideo = AdAndVideo::latest()->first();
    
        // Handle file uploads and store the paths in variables
        $verticalAdPath = $request->file('vertical_ad') ? $request->file('vertical_ad')->store('vertical_ads', 'public') : null;
        $horizontalAdPath = $request->file('horizontal_ad') ? $request->file('horizontal_ad')->store('horizontal_ads', 'public') : null;
        $videoUploadPath = $request->file('video_upload') ? $request->file('video_upload')->store('video_uploads', 'public') : null;
    
        // Delete previous images
       // Delete previous images if they exist
        if ($previousAdAndVideo && $previousAdAndVideo->vertical_ad) {
            Storage::delete($previousAdAndVideo->vertical_ad);
        }
        if ($previousAdAndVideo && $previousAdAndVideo->horizontal_ad) {
            Storage::delete($previousAdAndVideo->horizontal_ad);
        }

        if ($previousAdAndVideo && $previousAdAndVideo->video_upload) {
            Storage::delete($previousAdAndVideo->video_upload);
        }

    
        // Store the form data in the database
        $adAndVideo = new AdAndVideo();
        $adAndVideo->title = $validatedData['title'];
        $adAndVideo->description = $validatedData['description'];
        $adAndVideo->vertical_ad = $verticalAdPath;
        $adAndVideo->horizontal_ad = $horizontalAdPath;
        $adAndVideo->video_upload = $videoUploadPath;
        
        // Check if 'video_link' key exists in $validatedData before accessing it
        $adAndVideo->video_link = isset($validatedData['video_link']) ? $validatedData['video_link'] : null;
        
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
