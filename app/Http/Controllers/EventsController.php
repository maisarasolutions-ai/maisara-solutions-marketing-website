<?php

namespace App\Http\Controllers;

class EventsController extends Controller
{
    public function index()
    {
        return $this->view('events.index');
    }
    public function calendar()
    {
        return $this->view('events.calendar');
    }

    public function webinars()
    {
        return $this->view('events.webinars');
    }

    public function workshops()
    {
        return $this->view('events.workshops');
    }

    public function roundtables()
    {
        return $this->view('events.roundtables');
    }

    public function speakingrequests()
    {
        return $this->view('events.speaking-requests');
    }

    public function library()
    {
        return $this->view('events.library');
    }

}
