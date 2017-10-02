<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\Facebook\EventsService;

class EventsController extends Controller
{
    public function index()
    {
        $fbService = new EventsService;

        $calendar = $fbService
                    ->setEventsForPages()
                    ->getCalendar();

        $params = compact('calendar');

        return view('front.events.index', $params);
    }
}
