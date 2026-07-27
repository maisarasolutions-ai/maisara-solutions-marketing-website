<?php

namespace App\Http\Controllers;

class MethodologyController extends Controller
{
    public function index()
    {
        return $this->view('methodology.index');
    }
    public function discovery()
    {
        return $this->view('methodology.discovery');
    }

    public function scoping()
    {
        return $this->view('methodology.scoping');
    }

    public function codesign()
    {
        return $this->view('methodology.co-design');
    }

    public function governance()
    {
        return $this->view('methodology.governance');
    }

    public function qa()
    {
        return $this->view('methodology.qa');
    }

    public function arabicquality()
    {
        return $this->view('methodology.arabic-quality');
    }

    public function knowledgetransfer()
    {
        return $this->view('methodology.knowledge-transfer');
    }

    public function postlaunch()
    {
        return $this->view('methodology.post-launch');
    }

    public function escalation()
    {
        return $this->view('methodology.escalation');
    }

    public function technologyintegration()
    {
        return $this->view('methodology.technology-integration');
    }

}
