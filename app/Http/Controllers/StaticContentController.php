<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class StaticContentController extends Controller
{

    /**
     * Show the homepage.
     *
     * @return View
     */
    public function home(): View //
    {
        return view('home');
    }


    /**
     * Show the profile.
     *
     */
    public function profile(): View
    {
        return view('profile');
    }

    /**
     * Show the dashboard.
     *
     */
    public function dashboard(): View
    {
        return view('dashboard');
    }

    /**
     * Show the blog.
     *
     */
    public function blog(): View
    {
        return view('blog');
    }

    /**
     * Show the faq page.
     *
     */
    public function faq(): View
    {
        return view('faq');
    }
}
