<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-News Dashboard</title>

<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/main.js') }}" defer></script>

</head>
<body>


  <style>
    form {
    max-width: 600px;
    margin: 0 auto;
}

label {
    display: block;
    margin-bottom: 0.5rem;
}

input[type="text"],
textarea,
input[type="file"],
input[type="url"] {
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
}

button[type="submit"] {
    background-color: darkred;
    color: white;
    padding: 0.5rem 1rem;
    border: none;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

.error {
    color: red;
    margin-top: 0.5rem;
}

  </style>

  <div class="dashboard">
    <div class="sidebar">
      <h2 style="margin-bottom: 5rem">Dashboard</h2>
      <ul>
        <li><a href="#" class="tablinks" onclick="openTab(event, 'view-website')">View Website</a></li>
        <li><a href="{{ route('admin.news.index') }}" target="_blank"> Manage Posts</a></li>
        <li><a href="{{ route('admin.news.create') }}" target="_blank">Create New Post</a></li>
        <li><a href="#" class="tablinks" onclick="openTab(event, 'ads')"> Manage Ad & Live Video </a></li>               
        <li><a href="#" class="tablinks" onclick="openTab(event, 'short-video')"> Short Videos </a></li>  
        <li><a href="#" class="tablinks" onclick="openTab(event, 'entertainment')"> Manage Group </a></li>    
      </ul>
    </div>
  
    <div class="content">
      
      <div id="view-website" class="tabcontent" style="display: block;">
        <h2>Visit Website</h2>
        <iframe src="{{ route('index') }}" frameborder="0" width="100%" height="500"></iframe>
      </div>
      <!---- End of the view website section-->
  
      <div id="ads" class="tabcontent" style="display: none;">
        <h2> Ads & Live Video </h2>
        <div class="ads-and-video">
        
        <form action="{{ route('store_ad_and_video') }}" method="POST" enctype="multipart/form-data">
            @csrf
        
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror<br>
            
            <label for="description">Description:</label><br>
            <textarea id="description" name="description">{{ old('description') }}</textarea>
            @error('description')
                <div class="error">{{ $message }}</div>
            @enderror<br>
        
            <label for="vertical_ad">Vertical Ad Image:</label><br>
            <input type="file" id="vertical_ad" name="vertical_ad">
            @error('vertical_ad')
                <div class="error">{{ $message }}</div>
            @enderror<br>
        
            <label for="horizontal_ad">Horizontal Ad Image:</label><br>
            <input type="file" id="horizontal_ad" name="horizontal_ad">
            @error('horizontal_ad')
                <div class="error">{{ $message }}</div>
            @enderror<br>
        
            <label for="video_upload">Video Upload:</label><br>
            <input type="file" id="video_upload" name="video_upload" accept="video/mp4, video/mov, video/avi">
            @error('video_upload')
                <div class="error">{{ $message }}</div>
            @enderror<br>
        
            <label for="video_link">Video Link:</label><br>
            <input type="url" id="video_link" name="video_link" value="{{ old('video_link') }}">
            @error('video_link')
                <div class="error">{{ $message }}</div>
            @enderror<br>
        
            <button type="submit">Submit</button>
        </form>
        
        </div>
      </div>
      <!---- end of the advid section -->
      
      <div id="short-video" class="tabcontent" style="display: none;">
        <h2> SHORT VIDEO </h2>
        <div class="ads-and-video">
        
        <form action="{{ route('short_videos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror<br>
            
            <label for="description">Description:</label><br>
            <textarea id="description" name="description">{{ old('description') }}</textarea>
            @error('description')
                <div class="error">{{ $message }}</div>
            @enderror<br>
        
            
        
            <label for="short_video">Video Upload:</label><br>
            <input type="file" id="short_video" name="short_video" accept="video/mp4, video/mov, video/avi">
            @error('short_video')
                <div class="error">{{ $message }}</div>
            @enderror<br>
        
           
        
            <button type="submit">Upload</button>
        </form>
        
        </div>
      </div>
    </div>
  </div>
  



</body>
</html>
