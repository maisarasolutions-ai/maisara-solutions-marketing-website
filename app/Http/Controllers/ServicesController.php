<?php

namespace App\Http\Controllers;

class ServicesController extends Controller
{
    public function index()
    {
        return $this->view('services.index');
    }

    public function advisory()
    {
        return $this->view('services.advisory');
    }

    public function design()
    {
        return $this->view('services.design');
    }

    public function delivery()
    {
        return $this->view('services.delivery');
    }

    public function managedOps()
    {
        return $this->view('services.managed-ops');
    }

    public function localization()
    {
        return $this->view('services.localization');
    }

    public function industrySolutions()
    {
        return $this->view('services.industry-solutions');
    }

    public function enablement()
    {
        return $this->view('services.enablement');
    }

    public function sovereignty()
    {
        return $this->view('services.sovereignty');
    }
}
