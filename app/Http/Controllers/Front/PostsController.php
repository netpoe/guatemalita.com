<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entities\Post;

class PostsController extends Controller
{
    public function index(String $post = null)
    {
        if (!$post) {
            return $this->notes();
        }

        if (!file_exists(resource_path("views/front/posts/$post.blade.php"))) {
            return abort(404);
        }

        return view("front.posts.$post");
    }

    public function notes()
    {
        $posts = $this->getPostTemplateNames();

        $params = compact('posts');

        return view('front.posts.index', $params);
    }

    public function getPostTemplateNames()
    {
        $blacklist = [
            'index.blade.php',
            '..',
            '.'
        ];

        $templates = scandir(resource_path("views/front/posts/"));

        $posts = [];

        foreach ($templates as $template) {
            if (!in_array($template, $blacklist)) {
                $post = [
                    'template-name' => str_replace('.blade.php', '', $template),
                ];

                $posts[] = new Post($post);
            }
        }

        return $posts;
    }
}
