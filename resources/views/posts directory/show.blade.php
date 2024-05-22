<!-- resources/views/posts/show.blade.php -->
<div class="post-container">
    <h1 class="post-title">{{ $post->title }}</h1>
    <p class="post-content">{{ $post->content }}</p>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to all posts</a>
</div>


<style>

    /* Custom styles for show.blade.php */

.post-container {
    max-width: 600px; /* Adjust the maximum width as needed */
    margin: 0 auto;
    padding: 20px;
    border: 1px solid black;
    border-radius: 5px;
   background-color:yellow;
}

.post-title {
    font-size: 24px;
    margin-bottom: 10px;
}

.post-content {
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 20px;
}

.btn {
    display: inline-block;
    margin-right: 10px;
    padding: 10px 20px;
    text-decoration: none;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
}

.btn-primary {
    background-color: #007bff;
    border: none;
}

.btn-primary:hover {
    opacity: 0.5;
    background-color:grey;
}


    </style>