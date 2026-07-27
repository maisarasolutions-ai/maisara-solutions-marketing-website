<?php

namespace App\Http\Controllers;

class InvestorController extends Controller
{
    public function index()
    {
        return $this->view('investor.index');
    }
}
