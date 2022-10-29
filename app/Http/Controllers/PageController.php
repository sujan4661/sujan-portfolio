<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function blogs()
    {
        return view('pages.blog-posts');
    }
    public function moreBlogs()
    {
        return view('pages.more-blogs');
    }
}
