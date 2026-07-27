<?php

namespace App\Http\Controllers;

class ReferralController extends Controller
{
    public function index()
    {
        return $this->view('client.referral.index');
    }
}
