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
                    <a href=""> <img src="news/1.jpg" alt="news update" id="slider-img"></a>
                    
                </div>
    
                <div class="news-category-container">
                    <div class="news-update">
                        <a href="#" class="new-cat">Sports</a>
                        <a href="#" class="new-cat">Lifestyle</a>
                        <a href="#" class="new-cat">Memorial</a>
                        <a href="#" class="new-cat">Local</a>
                        <a href="#" class="new-cat">International</a>
                        <a href="#" class="new-cat">Politics</a>
                        <a href="#" class="new-cat">Sports</a>
                        <a href="#" class="new-cat">Sports</a>
                        <a href="#" class="new-cat">Sports</a>                    
                    </div>
                </div>
                
            </div>
           
    
            <!-- start of the headline section-->
            <div class="news-headline-container">
                <h3>Headline</h3>
                <!--- show the news headline-->
                <div class="news-headline">
                    <div class="news-headline-image">
                        <a href=""><img src="news/4.jpg" alt="headline image"></a>
                    </div>
                    <div class="news-headline-title">
                        <h2>International Jazz Festival</h2>
                    </div>
                    <div class="news-headline-excerpt">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Repellendus unde odio culpa fuga fugiat reiciendis sit commodi alias. 
                            In veniam fugiat saepe soluta! Atque facere velit labore quas expedita praesentium.
                        </p>
                    </div>
    
    
                    <div class="news-headline-image">
                        <a href=""><img src="news/3.jpg" alt="headline image"></a>
                    </div>
                    <div class="news-headline-title">
                        <h2>International Jazz Festival</h2>
                    </div>
                    <div class="news-headline-excerpt">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Repellendus unde odio culpa fuga fugiat reiciendis sit commodi alias. 
                            In veniam fugiat saepe soluta! Atque facere velit labore quas expedita praesentium.
                        </p>
                    </div>
    
    
                    <div class="news-headline-image">
                        <a href=""><img src="news/1.jpg" alt="headline image"></a>
                    </div>
                    <div class="news-headline-title">
                        <h2>International Jazz Festival</h2>
                    </div>
                    <div class="news-headline-excerpt">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Repellendus unde odio culpa fuga fugiat reiciendis sit commodi alias. 
                            In veniam fugiat saepe soluta! Atque facere velit labore quas expedita praesentium.
                        </p>
                    </div>
    
                    <div class="news-headline-image">
                        <a href=""><img src="news/5.jpg" alt="headline image"></a>
                    </div>
                    <div class="news-headline-title">
                        <h2>International Jazz Festival</h2>
                    </div>
                    <div class="news-headline-excerpt">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Repellendus unde odio culpa fuga fugiat reiciendis sit commodi alias. 
                            In veniam fugiat saepe soluta! Atque facere velit labore quas expedita praesentium.
                        </p>
                    </div>
                    
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti unde architecto delectus expedita nulla voluptas nam, fuga suscipit minima totam quis. Beatae consectetur accusantium delectus ipsa non dolores iure obcaecati.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti unde architecto delectus expedita nulla voluptas nam, fuga suscipit minima totam quis. Beatae consectetur accusantium delectus ipsa non dolores iure obcaecati.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti unde architecto delectus expedita nulla voluptas nam, fuga suscipit minima totam quis. Beatae consectetur accusantium delectus ipsa non dolores iure obcaecati.</p>
        </div>
       
        
        <div class="international-gist">
            <h3>Hot International Gists</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione fugiat esse incidunt similique natus. Deleniti perspiciatis laboriosam provident dolore dolorum adipisci magnam neque, ducimus animi, debitis cumque saepe omnis accusantium?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti unde architecto delectus expedita nulla voluptas nam, fuga suscipit minima totam quis. Beatae consectetur accusantium delectus ipsa non dolores iure obcaecati.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti unde architecto delectus expedita nulla voluptas nam, fuga suscipit minima totam quis. Beatae consectetur accusantium delectus ipsa non dolores iure obcaecati.</p>
        </div>
    </div>

   </section>

   <section>
     <!---- ==== TEXT< VIDEO AND AD ECTION ===----->
     <div class="txt-vid-ad-section">
        <div class="txt-news">
            <div class="international-gist">
                <h3>Topics</h3>
                <p>Lorem ipsum dolor sit amet consectetur</p>
                <p>Lorem ipsum dolor sit amet consectetur</p>
                <p>Lorem ipsum dolor sit amet consectetur</p>
                <p>Lorem ipsum dolor sit amet consectetur</p>               
            </div>
        </div>
        <div class="live-video">
            <button disabled><i class="fas fa-play"></i> Live TV</button>
            <video controls  >
                <source src="news/Lagos State Government Initiates Removal Of Illegal Structures In Ijora.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p style="font-weight: 600">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi quos totam beatae eius cumque at praesentium vitae porro veritatis, ab delectus 
            </p>
        </div>
        <div class="news-ad">
            <img src="news/filipino cookbook.jpg" alt="Advertisement">
        </div>
    </div>
   </section>
    
   <section>
     <!--- TOP TOPIC NEWS CATEGORIES SECTION ==== -->
   <div class="e-news-topics">
    <h3 >Top Topics</h3> 
   <div class="top-topics-container">
      
       <div class="top-topic-item">
         
           <img src="news/1.jpg" alt="News category">
           <div class="top-topic-desc">
               <h4>Business News</h4>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure commodi reiciendis exercitatioatione, similique doloremque.</p>
           </div>
         
       </div>

       <div class="top-topic-item">
           <img src="news/2.jpg" alt="News category">
           <div class="top-topic-desc">
               <h4>Business News</h4>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure commodi reiciendis exercitatioatione, similique doloremque.</p>
           </div>
       </div>

       <div class="top-topic-item">
           <img src="news/3.jpg" alt="News category">
           <div class="top-topic-desc">
               <h4>Business News</h4>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure commodi reiciendis exercitatioatione, similique doloremque.</p>
           </div>
       </div>

       <div class="top-topic-item">
           <img src="news/4.jpg" alt="News category">
           <div class="top-topic-desc">
               <h4>Business News</h4>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure commodi reiciendis exercitatioatione, similique doloremque.</p>
           </div>
       </div>

       <div class="top-topic-item">
           <img src="news/5.jpg" alt="News category">
           <div class="top-topic-desc">
               <h4>Business News</h4>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure commodi reiciendis exercitatioatione, similique doloremque.</p>
           </div>
       </div>

       <div class="top-topic-item">
           <img src="news/6.jpg" alt="News category">
           <div class="top-topic-desc">
               <h4>Business News</h4>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure commodi reiciendis exercitatioatione, similique doloremque.</p>
           </div>
       </div>

       <div class="top-topic-item">
           <img src="news/7.jpg" alt="News category">
           <div class="top-topic-desc">
               <h4>Business News</h4>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure commodi reiciendis exercitatioatione, similique doloremque.</p>
           </div>
       </div>

       <div class="top-topic-item">
           <img src="news/8.jpg" alt="News category">
           <div class="top-topic-desc">
               <h4>Business News</h4>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure commodi reiciendis exercitatioatione, similique doloremque.</p>
           </div>
       </div>

       <div class="top-topic-item">
           <img src="news/4.jpg" alt="News category">
           <div class="top-topic-desc">
               <h4>Business News</h4>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure commodi reiciendis exercitatioatione, similique doloremque.</p>
           </div>
       </div>
   </div>
  </div>
   </section>
        

   <div class="ad-horizontal-views">
    <img src="news/9.jpeg" alt="Ad banner" style="width:100%">
   </div>

   <section>
    <div class="top-news-category" >
        <h3>Top News Category</h3>
        <form action="/search" method="get">
            <div class="search-container">
                <input type="search" name="search" id="search">
                <button type="submit">Search</button> 
            </div>
        </form>
    
        <div class="cat-item-container" style="margin-top: 50px">
            <div class="cat-item">
                <i class="fas fa-building"></i>
                <p>Politics</p>
            </div>
        
            <div class="cat-item">
                <i class="fas fa-paint-brush"></i>
                <p>Art & Entertainment</p>
            </div>
        
            <div class="cat-item">
                <i class="fas fa-briefcase"></i>
                <p>Business</p>
            </div>
        
            <div class="cat-item">
                <i class="fas fa-comments"></i>
                <p> Communication </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Automobiles </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Agriculture & Farming </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Hotels </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Government </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Health & Medicine </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Hotel & Estate </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> IT & Computers </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p>Legal Services </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p>Merchants </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Business Service </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Engineering </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Events Conference </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p>Energy & Utilities  </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Education & Learning </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Car Dealer </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Artisans - General Care </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Security & Emergency </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Pet Supply </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Schools </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Sports </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p>Online Influencers  </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p>Personal Care  </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Tourism & Hospitality </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Fashion & Clothing </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p>Food & Restaurant  </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Companies  </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Phone/Laptop </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Religion & Spirituality </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p>Shopping  </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Transportation </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Non-Profit Organization </p>
            </div>
    
            <div class="cat-item">
                <i class="fas fa-car"></i>
                <p> Online Courses </p>
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
                    <img src="news/judah.jpeg" alt="">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas delectus ex excepturi facere nesciunt dolorem ipsa minima eius inventore optio expedita rerum unde, mollitia iusto, cum eum placeat ipsam dolor.</p>
                    <button type="submit">See More</button>
                </div>
                <div class="more-news">
                   <div class="more-news-item">
                    <img src="news/olamide.jpeg" alt="">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas delectus ex excepturi
                    </p>
                   </div>

                   <div class="more-news-item">
                    <img src="news/olami2.jpeg" alt="">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas delectus ex excepturi
                    </p>
                   </div>

                   <div class="more-news-item">
                    <img src="news/music-cover.jpeg" alt="">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas delectus ex excepturi
                    </p>
                   </div>

                   <div class="more-news-item">
                    <img src="news/music-cover.jpeg" alt="">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas delectus ex excepturi
                    </p>
                   </div>

                   <div class="more-news-item">
                    <img src="news/music-cover.jpeg" alt="">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas delectus ex excepturi
                    </p>
                   </div>

                   <div class="more-news-item">
                    <img src="news/music-cover.jpeg" alt="">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas delectus ex excepturi
                    </p>
                   </div>

                   <div class="more-news-item">
                    <img src="news/music-cover.jpeg" alt="">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas delectus ex excepturi
                    </p>
                   </div>

                   <div class="more-news-item">
                    <img src="news/music-cover.jpeg" alt="">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas delectus ex excepturi
                    </p>
                   </div>

                   <div class="more-news-item">
                    <img src="news/music-cover.jpeg" alt="">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas delectus ex excepturi
                    </p>
                   </div>
                </div>
            </div>
            <div class="music-news">
                <h3>Music News</h3>
                <div class="music-news-item">
                    <div class="music-news-content">
                        <img src="news/3.jpg" alt="News category">
                        <div class="music-news-desc">
                            <h4>Healthy Living</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                
                <div class="music-news-item">
                    <div class="music-news-content">
                        <img src="news/3.jpg" alt="News category">
                        <div class="music-news-desc">
                            <h4>Healthy Living</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="music-news-item">
                    <div class="music-news-content">
                        <img src="news/3.jpg" alt="News category">
                        <div class="music-news-desc">
                            <h4>Healthy Living</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="music-news-item">
                    <div class="music-news-content">
                        <img src="news/3.jpg" alt="News category">
                        <div class="music-news-desc">
                            <h4>Healthy Living</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="music-news-item">
                    <div class="music-news-content">
                        <img src="news/3.jpg" alt="News category">
                        <div class="music-news-desc">
                            <h4>Healthy Living</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="music-news-item">
                    <div class="music-news-content">
                        <img src="news/3.jpg" alt="News category">
                        <div class="music-news-desc">
                            <h4>Healthy Living</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="music-news-item">
                    <div class="music-news-content">
                        <img src="news/3.jpg" alt="News category">
                        <div class="music-news-desc">
                            <h4>Healthy Living</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="music-news-item">
                    <div class="music-news-content">
                        <img src="news/3.jpg" alt="News category">
                        <div class="music-news-desc">
                            <h4>Healthy Living</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="music-news-item">
                    <div class="music-news-content">
                        <img src="news/3.jpg" alt="News category">
                        <div class="music-news-desc">
                            <h4>Healthy Living</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="music-news-item">
                    <div class="music-news-content">
                        <img src="news/3.jpg" alt="News category">
                        <div class="music-news-desc">
                            <h4>Healthy Living</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="music-news-item">
                    <div class="music-news-content">
                        <img src="news/3.jpg" alt="News category">
                        <div class="music-news-desc">
                            <h4>Healthy Living</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="music-news-item">
                    <div class="music-news-content">
                        <img src="news/3.jpg" alt="News category">
                        <div class="music-news-desc">
                            <h4>Healthy Living</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="music-news-item">
                    <div class="music-news-content">
                        <img src="news/3.jpg" alt="News category">
                        <div class="music-news-desc">
                            <h4>Healthy Living</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="music-news-item">
                    <div class="music-news-content">
                        <img src="news/3.jpg" alt="News category">
                        <div class="music-news-desc">
                            <h4>Healthy Living</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="music-news-item">
                    <div class="music-news-content">
                        <img src="news/3.jpg" alt="News category">
                        <div class="music-news-desc">
                            <h4>Healthy Living</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
   </div>
   
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

   <div class="display-movies">
        <div class="movie-item">
            <a href="">
                <img src="news/movie3.jpeg" alt="Movies Cover Image">
                <p>Movie Title</p>
            </a>
            
        </div>

        <div class="movie-item">
            <a href="">
                <img src="news/movie3.jpeg" alt="Movies Cover Image">
                <p>Movie Title</p>
            </a>            
        </div>

        <div class="movie-item">
            <a href="">
                <img src="news/movie3.jpeg" alt="Movies Cover Image">
                <p>Movie Title</p>
            </a>            
        </div>

        <div class="movie-item">
            <a href="">
                <img src="news/movie3.jpeg" alt="Movies Cover Image">
                <p>Movie Title</p>
            </a>            
        </div>

        <div class="movie-item">
            <a href="">
                <img src="news/movie3.jpeg" alt="Movies Cover Image">
                <p>Movie Title</p>
            </a>            
        </div>

        <div class="movie-item">
            <a href="">
                <img src="news/movie3.jpeg" alt="Movies Cover Image">
                <p>Movie Title</p>
            </a>            
        </div>

        <div class="movie-item">
            <a href="">
                <img src="news/movie3.jpeg" alt="Movies Cover Image">
                <p>Movie Title</p>
            </a>            
        </div>

        <div class="movie-item">
            <a href="">
                <img src="news/movie3.jpeg" alt="Movies Cover Image">
                <p>Movie Title</p>
            </a>            
        </div>

        <div class="movie-item">
            <a href="">
                <img src="news/movie3.jpeg" alt="Movies Cover Image">
                <p>Movie Title</p>
            </a>            
        </div>

        <div class="movie-item">
            <a href="">
                <img src="news/movie3.jpeg" alt="Movies Cover Image">
                <p>Movie Title</p>
            </a>            
        </div>

        <div class="movie-item">
            <a href="">
                <img src="news/movie3.jpeg" alt="Movies Cover Image">
                <p>Movie Title</p>
            </a>            
        </div>

        <div class="movie-item">
            <a href="">
                <img src="news/movie3.jpeg" alt="Movies Cover Image">
                <p>Movie Title</p>
            </a>            
        </div>

        <div class="movie-item">
            <a href="">
                <img src="news/movie3.jpeg" alt="Movies Cover Image">
                <p>Movie Title</p>
            </a>            
        </div>

        <div class="movie-item">
            <a href="">
                <img src="news/movie3.jpeg" alt="Movies Cover Image">
                <p>Movie Title</p>
            </a>            
        </div>

        <div class="movie-item">
            <a href="">
                <img src="news/movie3.jpeg" alt="Movies Cover Image">
                <p>Movie Title</p>
            </a>            
        </div>

        <div class="movie-item">
            <a href="">
                <img src="news/movie3.jpeg" alt="Movies Cover Image">
                <p>Movie Title</p>
            </a>            
        </div>

        <div class="movie-item">
            <a href="">
                <img src="news/movie3.jpeg" alt="Movies Cover Image">
                <p>Movie Title</p>
            </a>            
        </div>
   </div>

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
   <section>
        <button type="submit" style="padding: 10px">See More Music</button>
   </section>

   <div class="pride-of-nigeria">
    <h2>PRIDE OF NIGERIA</h2>
    <i class="fas fa-star">  Award  </i> <i class="fas fa-star">  </i>
    <section>
        <div class="show-pride-items">
            <div class="pride-item">
                <img src="news/pride.jpeg" alt="">
                <div class="pride-txt">
                    <h4>Pride Title</h4>
                    <p id="pride-type">This Morning Emergency Service</p>
                </div>
                <p class="pride-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius similique aperiam, ipsam iure, corporis maiores magni maxime voluptates saepe nemo temporibus tenetur fuga necessitatibus possimus nihil aliquid accusantium dolor fugit?</p>
            </div>

                    
            <div class="pride-item">
                <img src="news/pride.jpeg" alt="">
                <div class="pride-txt">
                    <h4>Pride Title</h4>
                    <p id="pride-type">This Morning Emergency Service</p>
                </div>
                <p class="pride-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius similique aperiam, ipsam iure, corporis maiores magni maxime voluptates saepe nemo temporibus tenetur fuga necessitatibus possimus nihil aliquid accusantium dolor fugit?</p>
            </div>
        
            <div class="pride-item">
                <img src="news/pride.jpeg" alt="">
                <div class="pride-txt">
                    <h4>Pride Title</h4>
                    <p id="pride-type">This Morning Emergency Service</p>
                </div>
                <p class="pride-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius similique aperiam, ipsam iure, corporis maiores magni maxime voluptates saepe nemo temporibus tenetur fuga necessitatibus possimus nihil aliquid accusantium dolor fugit?</p>
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
            <div class="short-video-item">
            <div class="video-overlay">
                <button class="play-button"></button>
            </div>
            <video controls  loop onplay="hideOverlay(this)" onpause="showOverlay(this)">
                <source src="news/night.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-stats">
                <div>
                    <i class="fas fa-heart"></i>
                    <span class="likes">100</span>
                </div>
    
                <div>
                    <i class="fas fa-eye"></i>
                    <span class="views">1K </span>
                </div>    
            </div>            
        </div>

        <div class="short-video-item">
            <div class="video-overlay">
                <button class="play-button"></button>
            </div>
            <video controls  loop onplay="hideOverlay(this)" onpause="showOverlay(this)">
                <source src="news/night.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-stats">
                <div>
                    <i class="fas fa-heart"></i>
                    <span class="likes">100</span>
                </div>
    
                <div>
                    <i class="fas fa-eye"></i>
                    <span class="views">1K </span>
                </div>    
            </div>            
        </div>

        <div class="short-video-item">
            <div class="video-overlay">
                <button class="play-button"></button>
            </div>
            <video controls  loop onplay="hideOverlay(this)" onpause="showOverlay(this)">
                <source src="news/night.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-stats">
                <div>
                    <i class="fas fa-heart"></i>
                    <span class="likes">100</span>
                </div>
    
                <div>
                    <i class="fas fa-eye"></i>
                    <span class="views">1K </span>
                </div>    
            </div>            
        </div>

        <div class="short-video-item">
            <div class="video-overlay">
                <button class="play-button"></button>
            </div>
            <video controls  loop onplay="hideOverlay(this)" onpause="showOverlay(this)">
                <source src="news/night.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-stats">
                <div>
                    <i class="fas fa-heart"></i>
                    <span class="likes">100</span>
                </div>
    
                <div>
                    <i class="fas fa-eye"></i>
                    <span class="views">1K </span>
                </div>    
            </div>            
        </div>

        <div class="short-video-item">
            <div class="video-overlay">
                <button class="play-button"></button>
            </div>
            <video controls loop onplay="hideOverlay(this)" onpause="showOverlay(this)">
                <source src="news/night.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-stats">
                <div>
                    <i class="fas fa-heart"></i>
                    <span class="likes">100</span>
                </div>
    
                <div>
                    <i class="fas fa-eye"></i>
                    <span class="views">1K </span>
                </div>    
            </div>            
        </div>

        <div class="short-video-item">
            <div class="video-overlay">
                <button class="play-button"></button>
            </div>
            <video controls loop onplay="hideOverlay(this)" onpause="showOverlay(this)">
                <source src="news/night.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-stats">
                <div>
                    <i class="fas fa-heart"></i>
                    <span class="likes">100</span>
                </div>
    
                <div>
                    <i class="fas fa-eye"></i>
                    <span class="views">1K </span>
                </div>    
            </div>            
        </div>

        <div class="short-video-item">
            <div class="video-overlay">
                <button class="play-button"></button>
            </div>
            <video controls loop onplay="hideOverlay(this)" onpause="showOverlay(this)">
                <source src="news/night.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-stats">
                <div>
                    <i class="fas fa-heart"></i>
                    <span class="likes">100</span>
                </div>
    
                <div>
                    <i class="fas fa-eye"></i>
                    <span class="views">1K </span>
                </div>    
            </div>            
        </div>

        <div class="short-video-item">
            <div class="video-overlay">
                <button class="play-button"></button>
            </div>
            <video controls  loop onplay="hideOverlay(this)" onpause="showOverlay(this)">
                <source src="news/night.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-stats">
                <div>
                    <i class="fas fa-heart"></i>
                    <span class="likes">100</span>
                </div>
    
                <div>
                    <i class="fas fa-eye"></i>
                    <span class="views">1K </span>
                </div>    
            </div>            
        </div>
        </div>        
    </div>    
   </section>


   <section id="remembrance">
    <div class="news-header-container" >
        <div class="update-and-news-slider">
            <div class="news-update-slider">
                <a href=""> <img src="news/1.jpg" alt="news update" id="slider-img"></a>
                
            </div>

            <div class="news-category-container">
                <div class="news-update">
                    <a href="#" class="new-cat">Memorial</a>
                    <a href="#" class="new-cat">Condolesence</a>
                    <a href="#" class="new-cat">Obituary</a>
                    <a href="#" class="new-cat">Local</a>
                    <a href="#" class="new-cat">Cndolescence</a>
                    <a href="#" class="new-cat">Politician</a>
                    <a href="#" class="new-cat">Sports</a>
                    <a href="#" class="new-cat">Sports</a>
                    <a href="#" class="new-cat">Sports</a>                    
                </div>
            </div>
            
        </div>
       

        <!-- start of the headline section-->
        <div class="news-headline-container">
            <h3>Rememrance</h3>
            <!--- show the news headline-->
            <div class="news-headline">
                <div class="news-headline-image">
                    <a href=""><img src="news/4.jpg" alt="headline image"></a>
                </div>
                <div class="news-headline-title">
                    <h2>International Jazz Festival</h2>
                </div>
                <div class="remember-me">
                    <p> Name of the deaceased    </p>
                    <p> 68 years         </p>
                </div>


                <div class="news-headline-image">
                    <a href=""><img src="news/3.jpg" alt="headline image"></a>
                </div>
                <div class="news-headline-title">
                    <h2>International Jazz Festival</h2>
                </div>
                <div class="remember-me">
                    <p> Name of the deaceased    </p>
                    <p> 68 years         </p>
                </div>


                <div class="news-headline-image">
                    <a href=""><img src="news/1.jpg" alt="headline image"></a>
                </div>
                <div class="news-headline-title">
                    <h2>International Jazz Festival</h2>
                </div>
                <div class="remember-me">
                    <p> Name of the deaceased    </p>
                    <p> 68 years         </p>
                </div>

                <div class="news-headline-image">
                    <a href=""><img src="news/5.jpg" alt="headline image"></a>
                </div>
                <div class="news-headline-title">
                    <h2>International Jazz Festival</h2>
                </div>
                <div class="remember-me">
                    <p> Name of the deaceased    </p>
                    <p> 68 years         </p>
                </div>
                
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
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ea at veritatis nulla, molestias eaque rem iure dolor, sed soluta delectus minima dignissi</p>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos necessitatibus fugit animi architecto! Accusantium, dolores. Sunt itaque maiores, inventore commodi officia quos deleniti fugiat nam beatae, perspiciatis animi quas eum.</p>
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


