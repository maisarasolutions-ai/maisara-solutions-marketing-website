<?php

namespace App\Http\Controllers;

class InvestorController extends Controller
{
    public function index()
    {
        return $this->view('investor.index');
    }
    public function thesis()
    {
        return $this->view('investor.thesis');
    }

    public function economics()
    {
        return $this->view('investor.economics');
    }

    public function trajectory()
    {
        return $this->view('investor.trajectory');
    }

    public function market()
    {
        return $this->view('investor.market');
    }

}
