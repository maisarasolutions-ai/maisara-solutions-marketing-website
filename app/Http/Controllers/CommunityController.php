<?php

namespace App\Http\Controllers;

class CommunityController extends Controller
{
    public function index()
    {
        return $this->view('community.index');
    }
    public function forums()
    {
        return $this->view('community.forums');
    }

    public function officehours()
    {
        return $this->view('community.office-hours');
    }

    public function sharing()
    {
        return $this->view('community.sharing');
    }

    public function regional()
    {
        return $this->view('community.regional');
    }

}
