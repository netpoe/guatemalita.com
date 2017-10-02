<?php

namespace App\Entities\Facebook;

use Facebook\Facebook;

class Event
{
    public $fb;

    public $description;

    public $name;

    public $place;

    public $start_time;

    public $id;

    public function __construct(Facebook $fb, Array $event)
    {
        $this->fb = $fb;

        $this->id = $event['id'];

        $this->cover = $this->getEventCover();

        $this->description = $event['description'];

        $this->name = $event['name'];

        $this->place = new Place($event['place']);

        $this->start_time = $event['start_time'];
    }

    public function getEventCover()
    {
        try {
            $response = $this->fb->get("/{$this->id}?fields=cover", $this->fb->getApp()->getAccessToken());
        } catch(\Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(\Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        return $response->getDecodedBody()['cover']['source'];
    }
}
