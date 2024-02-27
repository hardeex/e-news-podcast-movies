@extends('base.base')

@section('title', $category)

@section('page-content')
<section>
    @if ($newsPosts->isEmpty())
        <p>No news posts available for this category.</p>
    @else
        <div class="post-grid">
            @foreach ($newsPosts as $post)
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <img src="{{ $post->image }}" alt="{{ $post->title }}">
                <p class="excerpt">{{ Illuminate\Support\Str::limit($post->content, 80) }}</p>
                <a href="{{ route('post.show', $post->id) }}" class="read-more">Read more</a>
            </div>
            
            
            @endforeach
        </div>
    @endif
</section>

<aside>
    <h2>Recent News</h2>
    <ul>
        <ul>
            @foreach ($recentPosts as $recentPost)
                <li>
                    <a href="{{ route('post.show', $recentPost->id) }}">
                        @if ($recentPost->image)
                        <img src="{{ $post->image }}" alt="{{ $post->title }}">
                        @endif
                        {{ $recentPost->title }}
                    </a>
                </li>
            @endforeach
        </ul>
        
    </ul>
</aside>
@endsection
