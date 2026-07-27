<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        return $this->view('about.index');
    }

    public function founder()
    {
        return $this->view('about.founder');
    }

    public function team()
    {
        return $this->view('about.team');
    }

    public function future()
    {
        return $this->view('about.future');
    }
}
