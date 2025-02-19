<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Show all blog posts.
     */
    public function index(): View
    {
        // ✅ Fetch all active posts
        $posts = Post::where('is_active', true)->orderBy('created_at', 'desc')->get();

        return view('blog', compact('posts'));
    }

    /**
     * Show a single blog post.
     */
    public function show(string $url): View
    {
        // ✅ Fetch the post by its `url`
        $post = Post::where('url', $url)->firstOrFail();

        if (!$post) {
            abort(404, "Post not found.");
        }

        return view('posts.show', compact('post'));
    }
}
