<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage News Posts</title>
    <style>
       
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .manager-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #f0f0f0;
        }

        

        .manager-header a {
            text-decoration: none;
            color: #333;
            padding: 8px 16px;
            border: 1px solid #333;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .manager-header a:hover {
            background-color: #333;
            color: #fff;
        }

       
       
        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        
        .search-container {
            margin-bottom: 20px;
        }

        input[type="search"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

       
        table {
            width: 100%;
            border-collapse: collapse;
        }

        
        th {
            background-color: #f2f2f2;
            padding: 10px;
            text-align: left;
        }

        /* Style for table data */
        td {
            padding: 10px;
        }

        
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        
        .actions {
            white-space: nowrap;
        }

        .actions a {
            margin-right: 10px;
            color: #007bff;
            text-decoration: none;
        }

        .actions form {
            display: inline;
        }

        .actions button {
            margin-left: 5px;
            padding: 5px 10px;
            background-color: #dc3545;
            border: none;
            color: white;
            border-radius: 3px;
            cursor: pointer;
        }

        /* Responsive styles */
        @media (max-width: 768px) {

            .manager-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .manager-header a {
                margin-top: 10px;
            }
           
            tr {
                display: block;
                margin-bottom: 20px;
                border: 1px solid #ddd;
            }

           
            th {
                display: none;
            }

           
            td {
                display: block;
                text-align: left;
            }

            
            .actions {
                text-align: center;
            }

           
            .actions a,
            .actions button {
                margin: 5px;
            }

            
        }
    </style>
</head>
<body>
    <div class="manager-header">
        <h2>MANAGE PUBLISHED POSTS</h2>
        <a href="{{ route('admin.news.create') }}" target="_blank">Submit A Post News</a>
    </div>
    

    <div class="search-container">
        <input type="search" name="search" id="search" placeholder="Search..." onkeyup="searchTable()">
    </div>

    <table>
        <thead>
            <tr>
                <th>S/N</th>
                <th>News Title</th>
                <th class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($newsPosts as $key => $post)
                <tr id="post{{ $key + 1 }}">
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $post->title }}</td>
                    <td class="actions">
                        <a href="{{ route('admin.news.edit', $post->id) }}">Edit</a>
                        <form action="{{ route('admin.news.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        function searchTable() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("search");
            filter = input.value.toUpperCase();
            table = document.querySelector("table");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; 
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>
</html>
