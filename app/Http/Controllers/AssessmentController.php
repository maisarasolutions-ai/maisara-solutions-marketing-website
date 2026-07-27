<?php

namespace App\Http\Controllers;

class AssessmentController extends Controller
{
    public function index()
    {
        return $this->view('assessment.index');
    }
    public function maturity()
    {
        return $this->view('assessment.maturity');
    }

    public function deploymentsuitability()
    {
        return $this->view('assessment.deployment-suitability');
    }

    public function arabicreadiness()
    {
        return $this->view('assessment.arabic-readiness');
    }

    public function advisoryreadiness()
    {
        return $this->view('assessment.advisory-readiness');
    }

    public function segmentidentifier()
    {
        return $this->view('assessment.segment-identifier');
    }

}
