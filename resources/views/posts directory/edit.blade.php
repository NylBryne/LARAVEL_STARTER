<!-- resources/views/posts/edit.blade.php -->
<h1>Edit Post Details</h1>
@if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
@endif
<form action="{{ route('posts.update', $post) }}" method="POST">
 @csrf
 @method('PUT')
 <div class="form-group">
 <label for="title">Title</label>
 <input type="text" name="title" id="title" class="formcontrol" value="{{ $post->title }}" required>
 </div>
 <div class="form-group">
 <label for="content">Content</label>
 <textarea name="content" id="content" class="form-control"
rows="4" required>{{ $post->content }}</textarea>
 </div>
 <div class="button-container1">
 <button type="submit" class="btn btn-primary">Update</button>
</div>
</form>

<style>

    /* Custom styles for edit.blade.php */

.form-container {
    width: 50%; /* Adjust the width as needed */
    margin: 0 auto;
}

.form-group {
    
    margin-bottom: 20px;
    width: 50%;
    margin-left: 33% ; 
    
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
textarea {
    width: 70%;
    padding: 20px;
    border: 1px solid black;
    border-radius: 5px;
    box-sizing: border-box;
    background-color:lightblue;
}

textarea {
    resize: vertical;
}

.btn-primary {
    background-color: green;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.button-container1 {
    text-align: center; /* Center the button horizontally */
}

.btn-primary:hover {
    background-color: #0056b3;
}

    </style>