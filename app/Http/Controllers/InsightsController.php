<?php

namespace App\Http\Controllers;

class InsightsController extends Controller
{
    public function index()
    {
        return $this->view('insights.index');
    }
    public function thoughtleadership()
    {
        return $this->view('insights.thought-leadership');
    }

    public function perspectives()
    {
        return $this->view('insights.perspectives');
    }

    public function intelligence()
    {
        return $this->view('insights.intelligence');
    }

    public function successstories()
    {
        return $this->view('insights.success-stories');
    }

    public function resources()
    {
        return $this->view('insights.resources');
    }

    public function newsletter()
    {
        return $this->view('insights.newsletter');
    }

}
