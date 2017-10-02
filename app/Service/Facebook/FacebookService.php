<?php

namespace App\Service\Facebook;

class FacebookService
{
    public $fb;

    public function __construct()
    {
        $this->fb = new \Facebook\Facebook([
          'app_id' => '120678928645856',
          'app_secret' => '98156b460bd61df3dc1fb6b2f94a147f',
          'default_graph_version' => 'v2.10',
        ]);
    }
}
