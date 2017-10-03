<?php

namespace App\Entities;

class Post
{
    public $template;

    public $title;

    public function __construct(Array $post = [])
    {
        $this->template = $post['template-name'] ?? null;

        $this->title = $this->getTitleFromTemplateName();
    }

    public function getTitleFromTemplateName()
    {
        return str_replace('-', ' ', $this->template);
    }
}
