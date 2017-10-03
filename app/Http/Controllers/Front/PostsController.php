<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index(String $post = null)
    {
        if (!$post) {
            return view('front.posts.index');
        }

        return view("front.posts.$post");
    }
}
