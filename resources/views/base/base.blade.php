<!---
    The is the layout file for all pages across the website witht he exception of the dashboard area
    This file covers the header and footer section of the website

-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
    <!--- set custom title for each of the page-->
     <title>@yield('title')</title>

     
        <!-- Other CSS files -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Your custom CSS file -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
   
    
     <!--End of link custom css files -->

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-QLIq7Fqhj07dJ/oDKC4RApV5V4PPX0Xr2lryREs2znPm6wOhAMfcJC9uKn+5aWjZ" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-rHK8Yvo0Hq21bHk1hiOPpGWT1H8wvcPb11TPFqEadFk5BdCiA/pz5wr5bx6F7bMd" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    @yield('link')`
    <!--- end of links to the css files  -->

  
    
</head>
<body onload="slider()">
    <div class="display-exchange-rate">
        <ul class="exchange-rate-list">
            @if(isset($exchangeRate['rates']))
                @foreach($exchangeRate['rates'] as $currency => $rate)
                    <li>{{ $currency }}: {{ $rate }}</li>
                @endforeach
            @else
                <li>Exchange rates currently unavailable</li>
            @endif
        </ul>
    </div>
            <header>
                <nav>           
                    <ul>
                        <li>
                            <a href="/">
                                <img src="images/e-direct-logo.png" alt="E-Direct Logo">
                            </a>                    
                        </li>
            
                        <li>
                            <form action="/search" method="get" class="form">
                                <div class="search-container">
                                    <input type="search" name="search" id="search">
                                    <button type="submit">Search</button> 
                                </div>
                            </form>
                        </li>
            
                        <li><a href="{{ route('category.show', 'nigeria') }}">Nigeria</a></li>
                        <li><a href="{{ route('category.show', 'world') }}">World</a></li>
                        <li><a href="{{ route('category.show', 'politics') }}">Politics</a></li>
                        <li><a href="{{ route('category.show', 'business') }}">Business</a></li>
                        <li><a href="{{ route('category.show', 'health') }}">Health</a></li>
                        <li><a href="{{ route('category.show', 'entertainment') }}">Entertainment</a></li>
                        <li><a href="{{ route('category.show', 'sport') }}">Sport</a></li>                        
                        <li>
                            <a href="">
                                <i class="fa-solid fa-microphone"></i>
                                Audio
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">Account</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li><a href="{{ route('single') }}">Admin Area</a></li>
                            </ul>
                        </li>
                        
                        
                    </ul>
                </nav>
            </header>


         @yield('hero-content')   
         
        
            @yield('page-content')
        

            <footer>
                <div class="subscriber">
                    <img src="images/notifiation.png" alt="Subscriber for E-news">
                    <div class="subscribe-form">
                        <h6>subscribe to our newsletter</h6>
                        <p>Don't miss out on latest update and information</p>
                        <form action="" method="get" class="form">
                            <div class="search-container">
                                <input type="email" name="subscriber-email" id="subscribe-email">
                                <button type="submit">Search</button> 
                            </div>
                        </form>
                    </div>
                </div>

               
            </footer>

          
                 <div class="footer">
                    <form action="/search" method="get" class="form">
                        <div class="search-container">
                            <input type="search" name="search" id="search">
                            <button type="submit">Search</button> 
                        </div>
                    </form>

                    <div class="footer-links">
                        <div class="about-us-footer">
                            <h3>About Us</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates unde iste id pariatur corporis, doloribus aliquid deserunt iusto. Quos, distinctio beatae. Ipsum minus rerum fuga aliquid veritatis. Dolor, vero aperiam!</p>
                            <button>Learn More</button>
                        </div>

                        <div class="quick-links-footer">
                            <div class="link-item">
                                <h5>World</h5>
                                <ul>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                </ul>
                            </div>

                            <div class="link-item">
                                <h5>Business</h5>
                                <ul>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                </ul>
                            </div>

                            <div class="link-item">
                                <h5>Tech</h5>
                                <ul>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                </ul>
                            </div>

                            <div class="link-item">
                                <h5>Entertainment</h5>
                                <ul>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                </ul>
                            </div>

                            <div class="link-item">
                                <h5>Health</h5>
                                <ul>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                </ul>
                            </div>

                            <div class="link-item">
                                <h5>World</h5>
                                <ul>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                </ul>
                            </div>

                            <div class="link-item">
                                <h5>World</h5>
                                <ul>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                    <li><a href=""> Nigeria</a></li>
                                </ul>
                            </div>

                            <div class="link-item">
                                <h5>Follow Us</h5>
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <!-- Adding more social media icons as needed by the team -->
                                </ul>
                            </div>
                            

                        </div>
                    </div>
                </div>
          
            
</body>
</html>