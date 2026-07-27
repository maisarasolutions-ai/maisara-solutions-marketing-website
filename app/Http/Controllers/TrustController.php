<?php

namespace App\Http\Controllers;

class TrustController extends Controller
{
    public function index()
    {
        return $this->view('trust.index');
    }
}
