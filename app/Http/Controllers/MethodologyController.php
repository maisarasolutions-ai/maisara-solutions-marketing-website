<?php

namespace App\Http\Controllers;

class MethodologyController extends Controller
{
    public function index()
    {
        return $this->view('methodology.index');
    }
}
