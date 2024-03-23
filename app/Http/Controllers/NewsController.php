<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsPost;
use App\Models\Category; 
use App\Models\Image;
use Illuminate\Support\Facades\View;

class NewsController extends Controller
{


  
     // Display news posts by category
     public function showByCategory($category)
     {
         // Fetch category by name
         $category = Category::where('name', $category)->first();
         $newsPostsFooter = NewsPost::all();
     
         if (!$category) {
             return view('news.no-news-post');
         }
     
         // Fetch news posts by category ID
         $newsPosts = NewsPost::where('category', $category->name)->get();
     
         // Fetch recent posts
         $recentPosts = NewsPost::orderBy('created_at', 'desc')->take(5)->get();
     
              
         if ($newsPosts->isEmpty()) {
             return view('news.no-news-post');
         }
     
         return view('news.category', compact('category', 'newsPosts', 'recentPosts', 'newsPostsFooter'));
     }
     
     
     // Display individual news post
   // Display individual news post
   public function showPost($id)
   {
       $post = NewsPost::find($id); 
       $newsPostsFooter = NewsPost::all();

       if (!$post) {
           return view('news.no-news-post');
       }
   
       // Fetch recent posts
       $recentPosts = NewsPost::orderBy('created_at', 'desc')->take(8)->get();
       // Fetch categories
       $categories = Category::all(); 
   
       return view('news.post')
           ->with('post', $post)
           ->with('recentPosts', $recentPosts)
           ->with('categories', $categories)
           ->with('newsPostsFooter', $newsPostsFooter);
   }
   


    public function showPostSLUG($slug)
{
    $post = NewsPost::with('image')->where('slug', $slug)->firstOrFail(); // Eager load the 'image' relationship
    if (!$post) {
        return view('news.no-news-post');
    }

    // Fetch recent posts
    $recentPosts = NewsPost::orderBy('created_at', 'desc')->take(15)->get();
    // Fetch categories
    $categories = Category::all(); 

    return view('news.post')
        ->with('post', $post)
        ->with('recentPosts', $recentPosts)
        ->with('categories', $categories);
}





    // Display news posts for Nigeria category
    public function nigeria()
    {
        $nigeriaPosts = NewsPost::where('category', 'nigeria')->get();
        $recentPosts = NewsPost::orderBy('created_at', 'desc')->take(5)->get();
        $categories = Category::all();

        return view('categories.nigeria', compact('nigeriaPosts', 'recentPosts', 'categories'));
    }

   
}
