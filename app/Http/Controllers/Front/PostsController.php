<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\PostsAdapter as Posts;

class PostsController extends Controller
{
    public function index(String $post = null)
    {
        if (!$post) {
            return view('front.posts.index');
        }

        $posts = new Posts;

        $posts->store($post);

        $templateName = $posts->getPostTemplateName();

        return view("front.posts.$templateName");
    }
}
