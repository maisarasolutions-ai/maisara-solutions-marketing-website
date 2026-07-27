<?php

namespace App\Http\Controllers;

class KnowledgeBaseController extends Controller
{
    public function index()
    {
        return $this->view('knowledge-base.index');
    }
    public function faqsegments()
    {
        return $this->view('knowledge-base.faq-segments');
    }

    public function readiness()
    {
        return $this->view('knowledge-base.readiness');
    }

    public function modelscomparison()
    {
        return $this->view('knowledge-base.models-comparison');
    }

    public function architecture()
    {
        return $this->view('knowledge-base.architecture');
    }

    public function discoveryprep()
    {
        return $this->view('knowledge-base.discovery-prep');
    }

}
