<?php

namespace App\Http\Controllers;

class AssessmentController extends Controller
{
    public function index()
    {
        return $this->view('assessment.index');
    }
}
