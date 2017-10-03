<?php

namespace App\Service\Facebook;

class FacebookService
{
    public $fb;

    public function __construct()
    {
        $this->fb = new \Facebook\Facebook([
          'app_id' => env('FACEBOOK_APP_ID'),
          'app_secret' => env('FACEBOOK_APP_SECRET'),
          'default_graph_version' => 'v2.10',
        ]);
    }
}
