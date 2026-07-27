<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function index()
    {
        return $this->view('contact.index');
    }

    public function booking()
    {
        return $this->view('contact.booking');
    }

    public function regionalRouting()
    {
        return $this->view('contact.regional-routing');
    }

    public function channels()
    {
        return $this->view('contact.channels');
    }

    public function liveChat()
    {
        return $this->view('contact.live-chat');
    }
}
