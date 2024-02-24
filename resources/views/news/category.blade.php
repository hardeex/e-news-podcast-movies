
@extends('base.base')

@section('title', $newsPosts)

@section('page-content')
<section>
     @if ($newsPosts->isEmpty())
        <p>No news posts available for this category.</p>
    @else

    
            <div class="post-grid">
            @foreach ($newsPosts as $post)
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <p class="excerpt">{{ Illuminate\Support\Str::limit($post->content, 80) }}</p>
                <a href="{{ route('post.show', $post->id) }}" class="read-more">Read more</a>
            </div>
            @endforeach
        </div>

        

  
</section>
   
        
    @endif
@endsection
