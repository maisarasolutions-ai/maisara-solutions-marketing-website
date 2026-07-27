<?php

namespace App\Http\Controllers;

class OnboardingController extends Controller
{
    public function index()
    {
        return $this->view('client.onboarding.index');
    }
}
