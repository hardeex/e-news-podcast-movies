<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create News Post</title>
    <link rel="stylesheet" href="main.css">
    <!--- adding ckeditor cdn link -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
</head>
<style>
      .ck-editor__editable_inline{
        height: 500px;
    }
</style>
<body>

   
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            padding: 3rem
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);            
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="checkbox"] {
            margin-bottom: 10px;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>

    <h2>Create News Post</h2>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        
        <label for="content"   id="content">Content:</label><br>
        <textarea name="content" id="editor"></textarea><br>
       
        <label for="image">Image:</label><br>
        <input type="file" id="image" name="image"><br>
       
        <label for="is_featured">Is Featured:</label>
        <input type="checkbox" id="is_featured" name="is_featured" value="1"><br>
        <label for="is_trending">Is Trending:</label>
        <input type="checkbox" id="is_trending" name="is_trending" value="1"><br>
        <label for="is_headline">Is Headline:</label>
        <input type="checkbox" id="is_headline" name="is_headline" value="1"><br>

       
       
        <label for="category">Category:</label><br>
        <select id="category" name="category">
            @foreach ($categories as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select><br>
        <button type="submit" style="margin-top: 20px">Create</button>
    </form>

    <script>

        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                ckfinder:{
                    uploadUrl: "{{ route('ckeditor.upload', ['_token'=>csrf_token()])}}",
                }
            } ) 
            .catch( error => {
                console.error( error );
            } );
    </script>
    
</body>
</html>