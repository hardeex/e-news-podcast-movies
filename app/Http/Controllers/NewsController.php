<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsPost;
use App\Models\Category; 

class NewsController extends Controller
{
    //
    public function showByCategory($category)
    {
        $newsPosts = NewsPost::where('category', $category)->get();
        if ($newsPosts->isEmpty()) {
            return view('news.no-news-post');
        }

        return view('news.category')->with('newsPosts', $newsPosts);
    }
    
    //show indifividual post
   
    public function showPost($id)
    {
        $post = NewsPost::find($id);
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

}
