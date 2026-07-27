<?php

namespace App\Http\Controllers;

class TechnologyController extends Controller
{
    public function index()
    {
        return $this->view('technology.index');
    }
}
