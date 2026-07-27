<?php

namespace App\Http\Controllers;

class PressController extends Controller
{
    public function index()
    {
        return $this->view('press.index');
    }
}
