@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <h1>All Blog Posts</h1>

    @if (!isset($posts) || $posts->isEmpty())
        <p>No blog posts available.</p>
    @else
        <ul>
            @foreach ($posts as $post)
                <li>
                    <h2>
                        <a href="{{ url($post->url ?? '#') }}">
                            {{ $post->header ?? 'Untitled Post' }}
                        </a>
                    </h2>
                    <p>{{ $post->info ?? 'No description available.' }}</p>
                    <small>Published: {{ $post->created_at ? $post->created_at->format('M d, Y') : 'Unknown' }}</small>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
