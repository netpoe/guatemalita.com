<?php

namespace App\Service\Facebook;

use App\Entities\Facebook\Event;
use Moment\Moment;

class EventsService extends FacebookService
{
    public $pageIds = [];

    public $eventsByPageId = [];

    public $eventsByDate = [];

    public function __construct()
    {
        parent::__construct();

        $this->registerPageId(174100923084060); // la sala de cine GT
        $this->registerPageId(316317121727396); // alianza francesa GT
        $this->registerPageId(270410246403469); // teatro lux
    }

    public function registerPageId(Int $pageId)
    {
        $this->pageIds[] = $pageId;

        return $this;
    }

    public function setEventsForPages()
    {
        foreach ($this->pageIds as $id) {
            try {
                $response = $this->fb->get("/$id/events?time_filter=upcoming", $this->fb->getApp()->getAccessToken());
            } catch(\Facebook\Exceptions\FacebookResponseException $e) {
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch(\Facebook\Exceptions\FacebookSDKException $e) {
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }

            $events = $response->getDecodedBody()['data'];

            foreach ($events as $event) {
                $this->eventsByPageId[$id][] = new Event($this->fb, $event);
            }
        }

        return $this;
    }

    public function getEventsByPageId()
    {
        return $this->eventsByPageId;
    }

    public function getEventsByDate()
    {
        return $this->eventsByDate;
    }

    public function getCalendar()
    {
        $eventsByPageId = $this->getEventsByPageId();

        $eventsByDate = [];

        foreach ($eventsByPageId as $pageId) {
            foreach ($pageId as $event) {
                $date = new \DateTime($event->start_time);

                $key = $date->format('Y-m-d');

                if (!isset($eventsByDate[$key])) {
                    $m = new Moment($key);
                    $eventsByDate[$key]['date'] = $m->format('l, d [de] F Y');
                }

                $eventsByDate[$key]['events'][] = $event;
            }
        }

        ksort($eventsByDate);

        return $eventsByDate;
    }
}
