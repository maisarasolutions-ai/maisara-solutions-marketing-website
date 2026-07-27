<?php

namespace App\Http\Controllers;

class SuccessController extends Controller
{
    public function index()
    {
        return $this->view('client.success.index');
    }
    public function dashboard()
    {
        return $this->view('client.success.dashboard');
    }

    public function advisorybooking()
    {
        return $this->view('client.success.advisory-booking');
    }

    public function requests()
    {
        return $this->view('client.success.requests');
    }

    public function reports()
    {
        return $this->view('client.success.reports');
    }

}
