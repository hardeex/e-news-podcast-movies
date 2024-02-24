
@extends('base.base')

@section('title', $post->title)


@section('page-content')
<section>

    <div class="not-found">
         <div class="post">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>        
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
                    <li><a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>
        
    </div>
    </div>
   
</section>
   
    
@endsection
