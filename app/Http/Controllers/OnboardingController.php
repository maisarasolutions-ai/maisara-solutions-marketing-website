<?php

namespace App\Http\Controllers;

class OnboardingController extends Controller
{
    public function index()
    {
        return $this->view('client.onboarding.index');
    }
    public function welcome()
    {
        return $this->view('client.onboarding.welcome');
    }

    public function platformaccess()
    {
        return $this->view('client.onboarding.platform-access');
    }

    public function kickoff()
    {
        return $this->view('client.onboarding.kickoff');
    }

    public function timeline()
    {
        return $this->view('client.onboarding.timeline');
    }

    public function training()
    {
        return $this->view('client.onboarding.training');
    }

}
