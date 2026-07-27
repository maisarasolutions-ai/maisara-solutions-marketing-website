<?php

namespace App\Http\Controllers;

class SuccessController extends Controller
{
    public function index()
    {
        return $this->view('client.success.index');
    }
}
