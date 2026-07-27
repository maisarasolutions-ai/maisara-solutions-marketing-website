<?php

namespace App\Http\Controllers;

class PressController extends Controller
{
    public function index()
    {
        return $this->view('press.index');
    }
    public function presskit()
    {
        return $this->view('press.press-kit');
    }

    public function news()
    {
        return $this->view('press.news');
    }

    public function commentary()
    {
        return $this->view('press.commentary');
    }

    public function inquiries()
    {
        return $this->view('press.inquiries');
    }

}
