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

<div class="dashboard">
  <div class="sidebar">
    <h2 style="margin-bottom: 5rem">Dashboard</h2>
    <ul>
      <li><a href="#" class="tablinks" onclick="openTab(event, 'view-website')">View Website</a></li>
      <li><a href="{{ route('admin.news.index') }}" target="_blank">Manage Posts</a></li>
      <li><a href="{{ route('admin.news.create') }}" target="_blank">Create New Post</a></li>
      <li><a href="#" class="tablinks" onclick="openTab(event, 'published-news')">Published News</a></li>      
    </ul>
  </div>

  <div class="content">
    <div id="view-website" class="tabcontent">
      <h2>Visit Website</h2>
      <iframe src="{{ route('index') }}" frameborder="0" width="100%" height="500"></iframe>
    </div>

    <div id="published-news" class="tabcontent">
      <h2>Published News</h2>
      <div class="news-list">
        <!-- Display published news articles here -->
        
      </div>
    </div>
  </div>
</div>



</body>
</html>
