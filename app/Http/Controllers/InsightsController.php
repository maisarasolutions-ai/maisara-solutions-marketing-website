<?php

namespace App\Http\Controllers;

class InsightsController extends Controller
{
    public function index()
    {
        return $this->view('insights.index');
    }
}
