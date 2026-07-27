<?php

namespace App\Http\Controllers;

class StatusController extends Controller
{
    public function index()
    {
        return $this->view('status.index');
    }
    public function dashboard()
    {
        return $this->view('status.dashboard');
    }

    public function incidents()
    {
        return $this->view('status.incidents');
    }

    public function maintenance()
    {
        return $this->view('status.maintenance');
    }

    public function uptime()
    {
        return $this->view('status.uptime');
    }

}
