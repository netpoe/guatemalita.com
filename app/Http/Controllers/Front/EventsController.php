<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\Facebook\EventsService;
use Roumen\Feed\Feed;

class EventsController extends Controller
{
    public function index()
    {
        $calendar = $this->getCalendar();

        $params = compact('calendar');

        return view('front.events.index', $params);
    }

    public function rssFeed(Feed $feed)
    {
        $calendar = $this->getCalendar();

        $feed->title = 'Próximos eventos en Guatemala';

        foreach ($calendar as $date) {
            foreach ($date['events'] as $event) {
                $title = $event->name;
                $url = "https://www.facebook.com/events/{$event->id}";
                $pubdate = $date['date'];
                $content = $event->description;
                $img = "<img src=\"$event->cover\" width=\"100%\" height=\"auto\" class=\"mcnImage\">";
                $description = $img;
                $feed->add(
                    $title,
                    $pubdate,
                    $url,
                    null,
                    $description,
                    $content
                );
            }
        }

        return $feed->render('atom');
    }

    private function getCalendar()
    {
        $fbService = new EventsService;

        $calendar = $fbService
                    ->setEventsForPages()
                    ->getCalendar();

        return $calendar;
    }
}
