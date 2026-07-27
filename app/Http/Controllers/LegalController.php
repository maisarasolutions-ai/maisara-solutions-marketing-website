<?php

namespace App\Http\Controllers;

class LegalController extends Controller
{
    public function index()
    {
        return $this->view('legal.index');
    }
    public function agreementtemplates()
    {
        return $this->view('legal.agreement-templates');
    }

    public function serviceterms()
    {
        return $this->view('legal.service-terms');
    }

    public function privacypolicy()
    {
        return $this->view('legal.privacy-policy');
    }

    public function subscriptionterms()
    {
        return $this->view('legal.subscription-terms');
    }

}
