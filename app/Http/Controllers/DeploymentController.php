<?php

namespace App\Http\Controllers;

class DeploymentController extends Controller
{
    public function index()
    {
        return $this->view('deployment.index');
    }
    public function comparison()
    {
        return $this->view('deployment.comparison');
    }

    public function suitability()
    {
        return $this->view('deployment.suitability');
    }

    public function tco()
    {
        return $this->view('deployment.tco');
    }

    public function autonomy()
    {
        return $this->view('deployment.autonomy');
    }

    public function timeline()
    {
        return $this->view('deployment.timeline');
    }

    public function migration()
    {
        return $this->view('deployment.migration');
    }

    public function featureparity()
    {
        return $this->view('deployment.feature-parity');
    }

    public function referencecases()
    {
        return $this->view('deployment.reference-cases');
    }

    public function advisorybooking()
    {
        return $this->view('deployment.advisory-booking');
    }

}
