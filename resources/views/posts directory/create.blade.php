<!-- resources/views/posts/create.blade.php -->
<h1>Create Post</h1>
@if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
@endif
<form action="{{ route('posts.store') }}" method="POST">
 @csrf
 <div class="form-group">
 <label for="title">Title</label>
 <input type="text" name="title" id="title" class="formcontrol" required>
 </div>
 <div class="form-group">
 <label for="content">Content</label>
 <textarea name="content" id="content" class="form-control"
rows="4" required></textarea>
 </div>
 <div class="button-container">
 <button type="submit" class="btn btn-primary">Create</button>
</div>
</form>
<style>

    /* Custom styles for create.blade.php */

/* Center the form */
.form-container {
    width: 50%; /* Adjust the width as needed */
    margin: 0 auto;
   
}

/* Style form elements */
.form-group {
    margin-bottom: 20px;
    width: 100%;
    margin-left: 26% ; 
    
    
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
textarea {
    width: 50%;
    padding: 10px;
    border: 1px solid black;
    border-radius: 5px;
    box-sizing: border-box;
    background-color:lightblue;
}

textarea {
    resize: vertical;
}

.btn-primary {
    background-color: blue;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer; 
}
.button-container {
    text-align: center; /* Center the button horizontally */
}

.btn-primary:hover {
    background-color: #0056b3;
}

    </style>