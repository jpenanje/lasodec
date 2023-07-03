<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(20);

        return view('events', [
            'events' => $events,
        ]);
    }
}
