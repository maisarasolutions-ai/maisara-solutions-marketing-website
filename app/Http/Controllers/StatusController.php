<?php

namespace App\Http\Controllers;

class StatusController extends Controller
{
    public function index()
    {
        return $this->view('status.index', [
            'services' => [
                ['name' => 'Website', 'status' => 'operational'],
                ['name' => 'API', 'status' => 'operational'],
                ['name' => 'Email', 'status' => 'operational'],
                ['name' => 'Support', 'status' => 'operational'],
            ],
        ]);
    }

    public function dashboard()
    {
        return $this->view('status.dashboard', [
            'uptime' => '99.9%',
            'incidents' => 0,
            'maintenance' => 0,
        ]);
    }

    public function incidents()
    {
        return $this->view('status.incidents', [
            'incidents' => [],
        ]);
    }

    public function maintenance()
    {
        return $this->view('status.maintenance', [
            'scheduled' => [],
        ]);
    }

    public function uptime()
    {
        return $this->view('status.uptime', [
            'uptime' => '99.9%',
            'history' => [],
        ]);
    }
}
