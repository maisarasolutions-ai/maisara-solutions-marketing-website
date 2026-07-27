<?php

namespace App\Http\Controllers;

class ReferralController extends Controller
{
    public function index()
    {
        return $this->view('client.referral.index');
    }
    public function programoverview()
    {
        return $this->view('client.referral.program-overview');
    }

    public function submit()
    {
        return $this->view('client.referral.submit');
    }

    public function track()
    {
        return $this->view('client.referral.track');
    }

    public function recognition()
    {
        return $this->view('client.referral.recognition');
    }

}
