<?php

namespace App\Http\Controllers;

class BillingController extends Controller
{
    public function index()
    {
        return $this->view('client.billing.index');
    }
}
