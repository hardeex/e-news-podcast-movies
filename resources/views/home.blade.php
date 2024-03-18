<!--- adding the base layout -->
@extends('base.base')
<!-- adding the page title-->
@section('title', 'E-News')
<!---Adding the styling and js links-->
@section('link')
    
@endsection

@section('page-content')


    <section>
        <div class="news-header-container">
            <div class="update-and-news-slider">
                <div class="news-update-slider">
                @if ($newsPosts)
                    <img src="{{ asset('storage/' . $newsPosts[0]->image) }}" alt="news update" id="slider-img" style="width: 100%; height: 400px;">
                @endif
                </div>
                
                <script>
                    var storeSliderImages = [
                        @foreach($newsPosts->sortByDesc('created_at') as $post)
                            "{{ asset('storage/' . $post->image) }}",
                        @endforeach
                    ];
                
                    var len = storeSliderImages.length;
                    var i = 0;
                
                    function slider() {
                        var slideImage = document.getElementById("slider-img"); 
                
                        if (i > len - 1) {
                            i = 0;
                        }
                
                        slideImage.src = storeSliderImages[i];
                        i++;
                        setTimeout(slider, 5000); 
                    }
                
                    // Start the slider
                    slider();
                </script>
                
           
                
    
                <div class="news-category-container">
                    <div class="news-update">
                        <a href="{{ route('category.show', 'health') }}" class="new-cat">Health</a>
                        <a href="{{ route('category.show', 'lifestyle') }}" class="new-cat">Lifestyle</a>
                        <a href="{{ route('category.show', 'politics') }}" class="new-cat"> Politics </a>
                        <a href="{{ route('category.show', 'local') }}" class="new-cat">Local</a>
                        <a href="{{ route('category.show', 'international') }}" class="new-cat">International</a>
                        <a href="{{ route('category.show', 'hotels') }}" class="new-cat">Hotels</a>
                        <a href="{{ route('category.show', 'business') }}" class="new-cat">Business</a>
                        <a href="{{ route('category.show', 'tedchnology') }}" class="new-cat">Technology</a>
                        <a href="{{ route('category.show', 'education & learning') }}" class="new-cat">Education & Learning</a>                    
                    </div>
                </div>
                
            </div>
           
    
            <!-- start of the headline section-->
            <div class="news-headline-container">
                <h3>Headline</h3>

           
                <!--- show the news headline-->
           
                <div class="news-headline">
                    @foreach($newsPosts->sortByDesc('created_at') as $post)
                    @if($post->is_headline)
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }} Image">
                        @endif
                        <h2>{{ $post->title }}</h2>
                        <p class="excerpt">{!! Illuminate\Support\Str::words(strip_tags($post->content), 60) !!}</p>
                    @endif
                @endforeach

       

                
                    </div>
                   
    
                  
                    
                </div>
                
            
            <!-- end of the news-container-headline-->
        </div>
  
    </section>

   <section>
     <!---=====GIST SECTION ====--->
     <div class="gist-section">
        <div class="local-gist">
            <h3>Hot Local Gists</h3>
            @php
            $localPostsExist = false;
        @endphp
        
     
        @foreach($newsPosts->sortByDesc('created_at')->take(15) as $post)
            @if($post->category == 'Local')
                <p><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></p>
                @php
                    $localPostsExist = true;
                @endphp
            @endif
        @endforeach
        
        
        @if(!$localPostsExist)
            <p>No post available for this category yet</p>
        @endif
        
        </div>
   
        
       
   
        <div class="international-gist">
            <h3>Hot International Gists</h3>
            @php
            $localPostsExist = false;
        @endphp
        
        @foreach($newsPosts->sortByDesc('created_at')->take(15) as $post)
            @if($post->category == 'International')
                <p><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></p>
                @php
                    $localPostsExist = true;
                @endphp
            @endif
        @endforeach
        
        @if(!$localPostsExist)
            <p>No post available for this category yet</p>
        @endif
     
        </div>
    </div>

   </section>

   <section>
     <!---- ==== TEXT< VIDEO AND AD ECTION ===----->
     <div class="txt-vid-ad-section">
        <div class="txt-news">
       
            <div class="international-gist">
                <h3>Topics</h3>
                @foreach($newsPosts->take(10) as $post)
                    <p><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></p>
                @endforeach
            
        
                         
            </div>
        </div>
        <div class="live-video">
            <button disabled><i class="fas fa-play"></i> Live TV</button>
            
    
          @if ($liveVideos->isNotEmpty())
              @foreach($liveVideos as $video)
                <div class="video-container">
                    <video controls>
                        <source src="{{ asset('storage/' . $video->video_upload) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                @endforeach
                @else
                    <p> No Live Event at the moment </p>
          @endif
      
        

            <p style="font-weight: 600">
                @foreach($liveDesc->sortByDesc('created_at') as $desc)
                @if($desc->desc)
                    <p class="excerpt">{!! Illuminate\Support\Str::words(strip_tags($desc->desc), 60) !!}</p>
                @endif                                   
            @endforeach
            
       
            </p>
        </div>
      
        <div class="news-ad">
            <div class="news-ad">
                @if($verticalAds->isNotEmpty())
                @foreach($verticalAds as $ad)
                    <img src="{{ asset('storage/' . $ad->vertical_ad) }}" alt="Ad">
                @endforeach
            @else
                <p>No vertical ads found.</p>
            @endif
            
            </div>
            
        </div>
        
        
        

    </div>
   </section>
    
   <section>
     <!--- TOP TOPIC NEWS CATEGORIES SECTION ==== -->
     <div class="e-news-topics">
        <h3>Top Topics</h3> 
        <div class="top-topics-container">
            @foreach($newsPosts->sortByDesc('created_at') as $post)
                @if($post->top_topic)
                <div class="top-topic">
                    <a href="{{ route('post.show', $post->id) }}" class="top-topic-link">
                        @if($post->image)
                        <div class="top-topic-image">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }} Image">
                        </div>
                        @endif
                        <div class="top-topic-content">
                            <h2 class="top-topic-title">{{ $post->title }}</h2>
                            <p class="top-topic-excerpt">{!! Illuminate\Support\Str::words(strip_tags($post->content), 80) !!}</p>
                        </div>
                    </a>
                </div>
                @endif
            @endforeach    
        </div>
    </div>
    
   </section>
        

   <div class="ad-horizontal-views">
        @if($horizontalAds->isNotEmpty())
        @foreach($horizontalAds as $ad)
            <img src="{{ asset('storage/' . $ad->horizontal_ad) }}" alt="Ad">
        @endforeach
    @else
        <p>No horizontal ad at the moment.</p>
    @endif

   </div>

   <section>
    <div class="top-news-category" >
        <h3>Top News Category</h3>
        <form action="/search" method="get" class="form">
            <div class="search-container">
                <input type="search" name="search" id="search">
                <button type="submit">Search</button> 
            </div>
        </form>
    
        <div class="cat-item-container" style="margin-top: 50px">
            <div class="cat-item">
                <i class="fas fa-building"></i>
                <a href="{{ route('category.show', 'politics') }}">Politics</a>                
            </div>
        
            <div class="cat-item">
                <i class="fas fa-paint-brush"></i>
                <a href="{{ route('category.show', 'Arts & Entertainment') }}"> Art & Entertainment </a>
                <p></p>
            </div>
        
            <div class="cat-item">
                <i class="fas fa-briefcase"></i>
                <a href="{{ route('category.show', 'business') }}"> Business </a>              
            </div>
        
            <div class="cat-item">
                <i class="fas fa-comments"></i>
                <a href="{{ route('category.show', 'communication') }}"> Communication </a>               
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'automobiles') }}"> Automobiles </a>              
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'agriculture&farming') }}">Agriculture & Farming </a>               
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'hotels') }}"> Hotels </a>                  
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'government') }}"> Government </a>                  
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Health & Medicine') }}"> Health & Medicine </a>                  
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Hotel & Estate') }}">Hotel & Estate </a>  
                <p>  </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'IT & Computers') }}"> IT & Computers </a>                
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Legal Services') }}"> Legal Services </a>                 
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', ' Merchants') }}">  Merchants </a>                
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Business Service') }}"> Business Service </a>                  
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Engineering') }}"> Engineering </a>                 
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Events Conference') }}"> Events Conference </a>                
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Energy & Utilities') }}"> Energy & Utilities </a>                  
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Education & Learning') }}"> Education & Learning </a>                  
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Car Dealer') }}"> Car Dealer </a>                  
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Artisans - General Care') }}"> Artisans - General Care </a>               
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Security & Emergency') }}"> Security & Emergency </a>              
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Pet Supply') }}">Pet Supply </a>                  
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Schools') }}"> Schools </a>                  
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Sports') }}"> Sports </a>                 
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', ' Online Influencers') }}"> Online Influencers </a>                  
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Personal Care') }}"> Personal Care </a>                 
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Tourism & Hospitality') }}"> Tourism & Hospitality </a>                 
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Fashion & Clothing ') }}"> Fashion & Clothing  </a>                
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Food & Restaurant') }}"> Food & Restaurant </a>                 
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Companies ') }}"> Companies  </a>              
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Phone/Laptop') }}"> Phone/Laptop </a>                 
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Religion & Spirituality') }}"> Religion & Spirituality </a>                 
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Shopping') }}">Shopping </a>                 
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Transportation') }}">Transportation </a>                  
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Non-Profit Organization') }}"> Non-Profit Organization </a>                  
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <a href="{{ route('category.show', 'Online Courses') }}"> Online Courses </a>                  
            </div>
    
        </div>
        <!--- end of cat-item-category-->
    
       </div>        
   </section>

   <div class="entertainment-container">
    <div class="entertainment-header">
        <p>Entertainment</p>
    </div>

    <section>
        <div class="entertainment-news">
            <div class="get-entertainment-update">
                <div class="featured-news">
                    @php
                    $isEntertainment = false;
                @endphp
                
                @foreach($newsPosts->sortByDesc('created_at')->take(10) as $post)
                    @if($post->category == 'Entertainment')
                                        
                            @if($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }} Image">
                            @endif
                            <h2><a href="{{ route('post.show', $post->id) }}" class="featured-news-item">{{ $post->title }}</a></h2>      
                           
                            <p class="excerpt">{!! Illuminate\Support\Str::words(strip_tags($post->content), 50) !!}</p>
                            @php
                                $isEntertainment = true;
                            @endphp
                        </a>
                    @endif
                @endforeach
                
                
                  
                
                    <button type="submit"> <a href="{{ route('category.show', 'entertainment') }}" style="color:white;">See More </a> </button>
                </div>
                
                <div class="more-news">
                  
        <div class="featured-news-item">
           
        </div>


                   <div class="more-news-item">
                        @foreach($newsPosts->sortByDesc('created_at') as $post)
                        @if($post->category == 'Music' && $post->is_headline)
                           
                                @if($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }} Image" >
                                @endif
                                <h2><a href="{{ route('post.show', $post->id) }}" >{{ $post->title }}</a></h2>   
                                
                                <p class="excerpt">{!! Illuminate\Support\Str::words(strip_tags($post->content), 30) !!}</p>
                           
                        @endif
                    @endforeach
                   </div>

                   

                 


                  

                  
                </div>
            </div>
            <div class="music-news">
                <h3>Music News</h3>
                
                <div class="music-news-item">
                    @foreach($newsPosts->sortByDesc('created_at') as $post)
                    @if($post->category == 'Music')
                    <div class="music-news-content">
                        @if($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }} Image" >
                                @endif
                        <div class="music-news-desc">
                            <h4><a href="{{ route('post.show', $post->id) }}" >{{ $post->title }}</a></h4>   
                                
                                <p class="excerpt">{!! Illuminate\Support\Str::words(strip_tags($post->content), 30) !!}</p>
                                @endif
                                @endforeach
                        </div>
                    </div>
                </div>               

            </div>
        </div>
        
    </section>
   </div>
   
   <!--
   <div class="recent-movie-container">
        <div class="movie-title">
            <p style="font-size: 2rem">Movie Title</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>                        
        </div>
        <div class="movie-details">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi natus nulla laborum error itaque cupiditate qui dolorum sequi quam architecto neque ad dolorem, placeat, pariatur quod voluptates. Voluptas, optio magnam.</p>
            <button type="submit">See Movies</button>
        </div>
   </div>
---->


   <div class="display-movies">
        <div class="movie-item">

            @foreach($newsPosts->sortByDesc('created_at') as $post)
                @if($post->category == 'Music')
                @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }} Image" >
            @endif
            <h4 style="word-wrap: break-word; width: 200px;"><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h4>


            @endif
            @endforeach
            
        </div> 
        
   </div>

<!--
   <div class="display-music">
        <div class="music-item">
            <img src="news/music-cover.jpeg" alt="Music Cover Image">
            <a href="">
                    <div>
                    <h5>Music Title</h5>
                    <p>Singer Name</p>
                </div>
            </a>                    
        </div>

        <div class="music-item">
            <img src="news/music-cover.jpeg" alt="Music Cover Image">
            <a href="">
                    <div>
                    <h5>Music Title</h5>
                    <p>Singer Name</p>
                </div>
            </a>                    
        </div>

        <div class="music-item">
            <img src="news/music-cover.jpeg" alt="Music Cover Image">
            <a href="">
                    <div>
                    <h5>Music Title</h5>
                    <p>Singer Name</p>
                </div>
            </a>                    
        </div>

        <div class="music-item">
            <img src="news/music-cover.jpeg" alt="Music Cover Image">
            <a href="">
                    <div>
                    <h5>Music Title</h5>
                    <p>Singer Name</p>
                </div>
            </a>                    
        </div>

        <div class="music-item">
            <img src="news/music-cover.jpeg" alt="Music Cover Image">
            <a href="">
                    <div>
                    <h5>Music Title</h5>
                    <p>Singer Name</p>
                </div>
            </a>                    
        </div>

        <div class="music-item">
            <img src="news/music-cover.jpeg" alt="Music Cover Image">
            <a href="">
                    <div>
                    <h5>Music Title</h5>
                    <p>Singer Name</p>
                </div>
            </a>                    
        </div>

        <div class="music-item">
            <img src="news/music-cover.jpeg" alt="Music Cover Image">
            <a href="">
                    <div>
                    <h5>Music Title</h5>
                    <p>Singer Name</p>
                </div>
            </a>                    
        </div>

        <div class="music-item">
            <img src="news/music-cover.jpeg" alt="Music Cover Image">
            <a href="">
                    <div>
                    <h5>Music Title</h5>
                    <p>Singer Name</p>
                </div>
            </a>                    
        </div>

        <div class="music-item">
            <img src="news/music-cover.jpeg" alt="Music Cover Image">
            <a href="">
                    <div>
                    <h5>Music Title</h5>
                    <p>Singer Name</p>
                </div>
            </a>                    
        </div>

        <div class="music-item">
            <img src="news/music-cover.jpeg" alt="Music Cover Image">
            <a href="">
                    <div>
                    <h5>Music Title</h5>
                    <p>Singer Name</p>
                </div>
            </a>                    
        </div>

        <div class="music-item">
            <img src="news/music-cover.jpeg" alt="Music Cover Image">
            <a href="">
                    <div>
                    <h5>Music Title</h5>
                    <p>Singer Name</p>
                </div>
            </a>                    
        </div>

        <div class="music-item">
            <img src="news/music-cover.jpeg" alt="Music Cover Image">
            <a href="">
                    <div>
                    <h5>Music Title</h5>
                    <p>Singer Name</p>
                </div>
            </a>                    
        </div>
   </div>
   --->
   <section>
        <button type="submit" style="padding: 10px">See More Music</button>
   </section>

   <div class="pride-of-nigeria">
    <h2>PRIDE OF NIGERIA</h2>
    <i class="fas fa-star">  Award  </i> <i class="fas fa-star">  </i>
    <section>
       
        <div class="show-pride-items">
            <div class="pride-item">
                @php
                    $isPrideofNigeriaExist = false;
                @endphp
            
                @foreach($newsPosts->sortByDesc('created_at')->take(10) as $post)
                    @if($post->category == 'Pride of Nigeria')                                                   
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }} Image">
                        @endif
                        <div class="pride-txt">
                            <!---<p id="pride-type">This Morning Emergency Service</p>-->
                            <h4><a href="{{ route('post.show', $post->id) }}" >{{ $post->title }}</a></h4> 
                        </div>
                        <p class="pride-excerpt">
                            {!! Illuminate\Support\Str::words(strip_tags($post->content), 50) !!}
                        </p>
                        @php
                            $isPrideofNigeriaExist = true;
                        @endphp
                    @endif
                @endforeach
            
                @if(!$isPrideofNigeriaExist)
                    <p>No post available for this category yet</p>
                @endif
            </div>
            
        </div>
     <button type="submit" id="pride-btn">Pride of Nigeria</button>           
    </section>
   </div>

   <section>
    <h2>Other Essential Solutions</h2>
    <div class="essential-items-container">
        <div class="essential-item">
            <a href="">
                <p class="e-title">E-Registry</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur distinctio velit expedita? Eius dolores, quos sunt ut voluptatum itaque assumenda tempora</p>
            </a>
        </div>
    
        <div class="essential-item">
            <a href="">
                <p class="e-title">E-Certified</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur distinctio velit expedita? Eius dolores, quos sunt ut voluptatum itaque assumenda tempora</p>
            </a>
        </div>
    
        <div class="essential-item">
            <a href="">
                <p class="e-title">E-Registry</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur distinctio velit expedita? Eius dolores, quos sunt ut voluptatum itaque assumenda tempora</p>
            </a>
        </div>
    
        <div class="essential-item">
           <a href="">
            <p class="e-title">E-Autos</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur distinctio velit expedita? Eius dolores, quos sunt ut voluptatum itaque assumenda tempora</p>
           </a>
        </div>
        
        <div class="essential-item">
           <a href="">
            <p class="e-title">E-Registry</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur distinctio velit expedita? Eius dolores, quos sunt ut voluptatum itaque assumenda tempora</p>
           </a>
        </div>
    </div>
    
   </section>


   <section>
    <div class="short-video-header">
            <h2>Short Videos</h2>
            <button type="submit">See All</button>
        </div>
       <div class="short-video-container">
        <div class="short-video-row">
            @foreach($shortVideos as $video)
            <div class="short-video-item">
                <!-- Video player -->
                <div class="video-overlay">
                    <button class="play-button"></button>
                </div>
                <video controls>
                    <source src="{{ asset('storage/' . $video->video_path) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Likes and views count -->
                <div class="video-stats">
                    <div>
                        <i class="fas fa-heart"></i>
                        <span class="likes">{{ $video->likes }}</span>
                    </div>
                    <div>
                        <i class="fas fa-eye"></i>
                        <span class="views">{{ $video->views }}</span>
                    </div>
                </div>
                <!-- Video title and description -->
                <h3>{{ $video->title }}</h3>
                <p>{{ $video->description }}</p>
            </div>
            @endforeach
        </div>

     
    </div>
    
           
   </section>


   <section id="remembrance">
    <div class="news-header-container" >
        <div class="update-and-news-slider">
            <div class="news-update-slider">
                @php
                    $remembrancePosts = $newsPosts->filter(function($post) {
                        return in_array($post->category, ['Remembrance', 'Memorial', 'Condolence', 'Obituary']);
                    });
                @endphp
            
                @if ($remembrancePosts->isNotEmpty())
                    <img src="{{ asset('storage/' . $remembrancePosts->first()->image) }}" alt="news update" id="slider-img" style="width: 100%; height: 400px;">
                @endif
            
                <script>
                    var storeSliderImages = [
                        @foreach($remembrancePosts->sortByDesc('created_at') as $post)
                            "{{ asset('storage/' . $post->image) }}",
                        @endforeach
                    ];
                
                    var len = storeSliderImages.length;
                    var i = 0;
                
                    function slider() {
                        var slideImage = document.getElementById("slider-img"); 
                
                        if (i > len - 1) {
                            i = 0;
                        }
                
                        slideImage.src = storeSliderImages[i];
                        i++;
                        setTimeout(slider, 5000); 
                    }
                
                    // Start the slider
                    slider();
                </script>
            </div>
            

            <div class="news-category-container">
                <div class="news-update">
                    <a href="{{ route('category.show', 'Memorial') }}" class="new-cat">Memorial</a>
                    <a href="{{ route('category.show', 'Condolescence') }}" class="new-cat">Condolescence</a>
                    <a href="{{ route('category.show', 'Obituary') }}" class="new-cat">Obituary</a>
                    <a href="{{ route('category.show', 'Weather') }}" class="new-cat">Weather</a>
                    <a href="{{ route('category.show', 'Technology') }}" class="new-cat">Technology</a>
                    <a href="{{ route('category.show', 'Politician') }}" class="new-cat">Politician</a>                                    
                </div>
            </div>
            
        </div>
       

        <!-- start of the headline section-->
        <div class="news-headline-container">
            <h3>Remembrance</h3>
            <!--- show the news headline-->
            <div class="news-headline">
                @php
                $isRemembranceExist = false;
                @endphp
            
                @foreach($newsPosts->sortByDesc('created_at')->take(10) as $post)
                    @if(($post->category == 'Remembrance' || $post->category == 'Memorial' || $post->category == 'Condolescence' || $post->category == 'Obituary') && $post->is_headline)                                                   
                        @php
                        $isRemembranceExist = true;
                        @endphp
            
                        <div class="news-headline-image">
                            @if($post->image)
                            <a href="{{ route('post.show', $post->id) }}">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }} Image">
                            </a>
                                
                            @endif
                        </div>
                        <!----
                        <div class="news-headline-title">
                            <h2><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h2>
                        </div>
                    -->
                        <div class="remember-me">
                           
                                    @if ($post->deceased_name)
                                        <p>{{ $post->deceased_name }}</p>
                                    @endif
                                    <p>{{ $post->age }} years</p>
                         
                           
                        </div>
            
                        <p >
                            <a href="{{ route('post.show', $post->id) }}" style="color: black">{!! Illuminate\Support\Str::words(strip_tags($post->content), 20) !!}.... </a>
                        </p>
                        <br><br>
                    @endif
                @endforeach
            
                @if(!$isRemembranceExist)
                    <p>No post available for this category yet</p>
                @endif
            </div>
            
            
        </div>
        <!-- end of the news-container-headline-->
    </div>
</section>

<div class="family-tree">
    <h4> Start your family tree for free </h4>
    <p>Connect with your family ancestory and discover the where, what and who of how it leads to you</p>
    <div class="family-tree-button">
        <button type="submit" id="view-ancestry">View Ancestry</button>
        <button type="submit" id="build-tree-btn">Build Yout Tree</button>
    </div>
</div>

<div class="register-biz">
    <div class="register-caption">
        <h3>Register Now to get your Business Listed on Essential Direct</h3>
        <p>
            Join Essential Direct today and showcase your business to the world! Stand out in your industry and reach new customers effortlessly. 
            With Essential Direct, your business will get the visibility it deserves. 
            Don't miss out on this opportunity to grow your brand and increase your sales. Sign up now and take your business to the next level!
        </p>
        <button type="submit">Register Now</button>
    </div>

    <div class="register-image">
        <img src="images/biz-reg.jpg" alt=""E-direct business registration>
    </div>
</div>

<section>
    <div class="book-hotel-container">
        <h3>Book an hotel before leaving</h3>
        <div class="featured-hotel-container">
            <div class="hotel">
                <h6>Hundreds of 5-star reviews</h6>
                <p>Thanks for your first class quality and great value</p>              
                    <button>Book Now</button>                               
            </div>

            <div class="about-hotel">
                <h5>You will be amazed by what we have prepared for you</h5>
                <p>
                    Prepare to be enchanted by our warm hospitality and personalized service, crafted to exceed your expectations. 
                    Whether you're traveling for business or leisure, our dedicated team is committed to making your stay a memorable one.
                </p>
            </div>
        </div>

        <div class="hotel-images">
            <img src="images/hotel2.jpeg" alt="">
            <img src="images/hotel3.jpeg" alt="">
            <img src="images/hotel4.jpeg" alt="">
        </div>
    </div>
</section>

<section>
    <div class="group-container">
        <div class="group-header">
            <h1>Groups You May Like</h1>
            <button>See More</button>
        </div>

        <div class="group-items-container">
            <div class="group-item">
                <img src="news/pride4.jpeg" alt="" class="group-image">
                <p class="group-name">Essential Staff</p>
                <div class="group-info">
                    <p><span>12</span>Member</p>  
                    <p><span>129</span>Posts today</p>                    
                </div> <br>
                <button>Join</button>
            </div>

            <div class="group-item">
                <img src="news/pride4.jpeg" alt="" class="group-image">
                <p class="group-name">Essential Staff</p>
                <div class="group-info">
                    <p><span>12</span>Member</p>  
                    <p><span>129</span>Posts today</p>                    
                </div> <br>
                <button>Join</button>
            </div>

            <div class="group-item">
                <img src="news/pride4.jpeg" alt="" class="group-image">
                <p class="group-name">Essential Staff</p>
                <div class="group-info">
                    <p><span>12</span>Member</p>  
                    <p><span>129</span>Posts today</p>                    
                </div> <br>
                <button>Join</button>
            </div>

            

            <div class="group-item">
                <img src="news/pride4.jpeg" alt="" class="group-image">
                <p class="group-name">Essential Staff</p>
                <div class="group-info">
                    <p><span>12</span>Member</p>  
                    <p><span>129</span>Posts today</p>                    
                </div> <br>
                <button>Join</button>
            </div>

            <div class="group-item">
                <img src="news/pride4.jpeg" alt="" class="group-image">
                <p class="group-name">Essential Staff</p>
                <div class="group-info">
                    <p><span>12</span>Member</p>  
                    <p><span>129</span>Posts today</p>                    
                </div> <br>
                <button>Join</button>
            </div>

           

            <div class="group-item">
                <img src="news/pride4.jpeg" alt="" class="group-image">
                <p class="group-name">Essential Staff</p>
                <div class="group-info">
                    <p><span>12</span>Member</p>  
                    <p><span>129</span>Posts today</p>                    
                </div> <br>
                <button>Join</button>
            </div>

           

            
            
        </div>
    </div>
</section>
@endsection


