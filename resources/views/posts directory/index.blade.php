<!-- resources/views/posts/index.blade.php -->
<h1>Record of Database</h1>
@if (session('success'))
 <div class="alert alert-success">
 {{ session('success') }}
 </div>
@endif
<table class="table">
 <thead>
 <tr>
 <th>Title</th>
 <th>Content</th>
 <th>Actions</th>
 </tr>
 </thead>
 <tbody>
 @foreach ($posts as $post)
 <tr>
 <td>{{ $post->title }}</td>
 <td>{{ $post->content }}</td>
 <td>
 <a href="{{ route('posts.show', $post) }}"
class="btn btn-primary">View</a>
 <a href="{{ route('posts.edit', $post) }}"
class="btn btn-secondary">Edit</a>
 <form action="{{ route('posts.destroy', $post)
}}" method="POST" style="display: inline-block">
 @csrf
@method('DELETE')
<button type="submit" class="btn btndanger" onclick="return confirm('Are you sure?')">Delete</button>

 </form>
 </td>
 </tr>
 @endforeach
 </tbody>
</table>
<a href="{{ route('posts.create') }}" class="btn btn-warning">Create A New Data</a>

{{ $posts->links() }}

<style>

    /* Custom styles for index.blade.php */

.container {
    max-width: 800px; /* Adjust the maximum width as needed */
    margin: 0 auto;
    padding: 20px;
}

h1 {
    margin-bottom: 20px;
}

.alert {
    margin-bottom: 20px;
}

.table {
    width: 80%;
    border-collapse: collapse;
}

.table th, .table td {
    border: 2px solid black;
    padding: 8px;
    background-color: skyblue;
}

.table th {
    background-color: grey;
}

.btn {
    display: inline-block;
    margin-right: 5px;
    padding: 10px 15px;
    text-decoration: none;
    border-radius: 5px;
    cursor: pointer;
}
.btn-warning {
    background-color: orange;
    color: #fff;
    border: none;
}

.btn-primary {
    background-color: blue;
    color: #fff;
    border: none;
}

.btn-secondary {
    background-color: green;
    color: #fff;
    border: none;
}

.btndanger {
    background-color: red;
    color: #fff;
    border: none;
}

.btn:hover {
    opacity: 0.5;
    background-color: grey;
}

    </style>