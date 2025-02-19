@extends('layouts.app')

@section('title', $post->header)

@section('content')
    <script>
        console.log("Step 1: Loading show.blade.php...");

        document.addEventListener("DOMContentLoaded", function () {
            console.log("Step 2: DOM fully loaded.");

            let postTitle = "{{ $post->header }}";
            let postUrl = "{{ $post->url }}";
            let postContent = "{{ $post->post_content }}";
            let postDate = "{{ $post->created_at ? $post->created_at->format('M d, Y') : 'Unknown' }}";

            console.log("Step 3: Retrieved post data:");
            console.log("Title:", postTitle);
            console.log("URL:", postUrl);
            console.log("Content:", postContent);
            console.log("Date:", postDate);
        });
    </script>

    <h1>{{ $post->header }}</h1>
    <h3>{{ $post->post_header }}</h3>

    <p>{{ $post->post_content }}</p>

    <small>Published on {{ $post->created_at ? $post->created_at->format('M d, Y') : 'Unknown' }}</small>

    <br><br>
    <a href="{{ route('posts.index') }}">Back to Blog</a>
@endsection
