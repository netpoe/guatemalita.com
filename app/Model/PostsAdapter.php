<?php

namespace App\Model;

class PostsAdapter extends Posts
{
    public $post;

    public $postsStorageFile;

    public $posts = [];

    public $postId;

    public $currentPost;

    public function __construct()
    {
        parent::__construct();

        $this->storagePath = storage_path('app/posts.json');

        $this->postsStorageFile = file_get_contents($this->storagePath);

        $this->posts = json_decode($this->postsStorageFile, true);
    }

    public function store(String $post)
    {
        $this->post = $post;

        if ($this->postExists()) {
            return $this;
        }

        $this->postId = $this->getNextPostId();

        $this->posts[$this->postId] = [];

        $this->currentPost = $this->posts[$this->postId];

        $this->currentPost['id'] = $this->postId;

        $this->currentPost['template-names'][] = $this->post;

        $this->posts[$this->postId] = $this->currentPost;

        $this->updateTemplateFileName();

        $this->saveInFile();

        print_r($this->posts); exit;
        return $this;

    }

    public function updateTemplateFileName()
    {
        $oldfile = resource_path("views/front/posts/{$this->post}.blade.php");

        $templateName = "{$this->postId}-{$this->post}";

        $newFile = resource_path("views/front/posts/{$templateName}.blade.php");

        rename($oldfile, $newFile);

        $this->currentPost['template-name'] = $templateName;

        $this->posts[$this->postId] = $this->currentPost;

        return $this;
    }

    public function saveInFile()
    {
        $data = json_encode($this->posts, JSON_PRETTY_PRINT);

        file_put_contents($this->storagePath, $data);

        return $this;
    }

    public function getNextPostId()
    {
        if (!$this->posts) {
            return 1;
        }

        return end($this->posts)['id'] + 1;
    }

    public function postExists()
    {
        if (!$this->posts) {
            return false;
        }

        foreach ($this->posts as $post) {
            foreach ($post['template-names'] as $name) {
                if ($name == $this->post) {
                    $this->postId = $post['id'];
                    return true;
                }
            }
        }

        return false;
    }

    public function getPostTemplateName()
    {
        return $this->posts[$this->postId]['template-name'];
    }
}
