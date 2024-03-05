
@extends('base.base')

@section('title', $post->title)


@section('page-content')
<section>

    <div class="not-found">
        <div class="post">
            <h2>{{ $post->title }}</h2>
            @if ($post->image)
                <img src="{{ asset($post->image) }}" alt="Post Image">
            @endif
            <div>{!! nl2br(e($post->content)) !!}</div> 
        </div>
        
        
        
        

    <div class="aside-container">
        <h2>Recent News</h2>
        <ul>
            @foreach ($recentPosts as $recentPost)
                <li><a href="{{ route('post.show', $recentPost->id) }}">{{ $recentPost->title }}</a></li>
            @endforeach
        </ul>

        <br><br>
        <div class="category-list">
            <h2>Categories</h2>
            <ul>
                @foreach ($categories as $category)
                    <li><a href="{{ route('category.show', $category->name) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>
        
    </div>
    </div>
   
</section>
   
    
@endsection
