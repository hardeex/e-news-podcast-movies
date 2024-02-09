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

     <!--- Link to the css files  -->
     <link rel="stylesheet" href="css/main.css">
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
                The container to display the exchange rate in continuous horizontal scroll
            </div>
            <header>
                <nav>           
                    <ul>
                        <li>
                            <a href="">
                                <img src="images/e-direct-logo.png" alt="E-Direct Logo">
                            </a>                    
                        </li>
            
                        <li>
                            <form action="/search" method="get">
                                <div class="search-container">
                                    <input type="search" name="search" id="search">
                                    <button type="submit">Search</button> 
                                </div>
                            </form>
                        </li>
            
                        <li><a href="">Nigeria</a></li>
                        <li><a href="">World</a></li>
                        <li><a href="">Politics</a></li>
                        <li><a href="">Business</a></li>
                        <li><a href="">Health</a></li>
                        <li><a href="">Entertainment</a></li>
                        <li><a href="">Sport</a></li>
                        <li>
                            <a href="">
                                <i class="fa-solid fa-microphone"></i>
                                Audio
                            </a>
                        </li>
                        
                    </ul>
                </nav>
            </header>


         @yield('hero-content')   
         
        
            @yield('page-content')
        

            
</body>
</html>