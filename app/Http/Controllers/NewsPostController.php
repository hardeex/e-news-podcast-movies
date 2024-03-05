<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsPost;
use App\Models\Category;
use App\Models\Image;


class NewsPostController extends Controller
{




/// uploading the media from the ckeditor
public function upload(Request $request)
{
    // Validate the uploaded file
    $request->validate([
        'upload' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048', 
    ]);

    try {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'. time(). '.' . $extension;
            $request->file('upload')->move(public_path('media'), $fileName);
            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => true, 'url' => $url]);
        } else {
            return response()->json(['error' => 'No file uploaded.'], 400);
        }
    } catch (\Exception $e) {
        // Handle any errors that occur during the upload process
        return response()->json(['error' => 'Failed to upload file.'], 500);
    }
}


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsPosts = NewsPost::all();
        return view('admin.news.index', compact('newsPosts'));
    }

    /**
     * Show the form for creating a new resource.
     */


      public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.news.create', compact('categories'));
    }

  

 

    /**
     * Store a newly created resource in storage.
     */
   
  
     
     public function store(Request $request)
     {
         // Validate the incoming request
         $validatedData = $request->validate([
             'title' => 'required|string|max:255',
             'content' => 'required|string',
             'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
             'category' => 'required|exists:categories,id',
             // Add more validation rules if needed
         ]);
     
         // Handle file upload
         $imagePath = $request->file('image')->store('news_images', 'public');
     
         // Fetch category name
         $categoryName = Category::findOrFail($validatedData['category'])->name;
     
         // Create the news post
         $newsPost = new NewsPost();
         $newsPost->title = $validatedData['title'];
         $newsPost->content = $validatedData['content'];
         $newsPost->image = $imagePath;
         $newsPost->is_featured = $request->has('is_featured') ? true : false;
         $newsPost->is_trending = $request->has('is_trending') ? true : false;
         $newsPost->is_headline = $request->has('is_headline') ? true : false;
         $newsPost->category = $categoryName; // Assign category name instead of id
     
         // Save the news post
         $newsPost->save();
     
         // Redirect back with success message or do whatever you want
         return redirect()->route('admin.news.index')->with('success', 'News post created successfully!');
     }
     
     
     
     
     
     


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = NewsPost::findOrFail($id);
        return view('admin.news.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = NewsPost::findOrFail($id);
        return view('admin.news.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    /**
 * Update the specified resource in storage.
 */
    public function update(Request $request, $id)
    {
        $post = NewsPost::findOrFail($id);
        
        // Update other fields
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->is_featured = $request->has('is_featured');
        $post->is_trending = $request->has('is_trending');
        $post->is_headline = $request->has('is_headline');
        
        // Handle file upload
        if ($request->hasFile('upload_image')) {
            $image = $request->file('upload_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $post->image = $imageName;
        }
        
        $post->save();

        return redirect()->route('admin.news.index')->with('success', 'News post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = NewsPost::findOrFail($id);
        $post->delete();
        return redirect()->route('admin.news.index')->with('success', 'News post deleted successfully');
    }

}
