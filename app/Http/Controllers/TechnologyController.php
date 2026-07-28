<?php

namespace App\Http\Controllers;

class TechnologyController extends Controller
{
public function index()
{
    return view('technology.index', array_merge($this->sharedViewData(), [
        'content' => null,
        'contentSections' => [],
    ]));
}
    public function architecturephilosophy()
    {
        return $this->view('technology.architecture-philosophy');
    }

    public function sovereigninfrastructure()
    {
        return $this->view('technology.sovereign-infrastructure');
    }

    public function isolation()
    {
        return $this->view('technology.isolation');
    }

    public function arabicfirst()
    {
        return $this->view('technology.arabic-first');
    }

    public function aidelivery()
    {
        return $this->view('technology.ai-delivery');
    }

    public function security()
    {
        return $this->view('technology.security');
    }

    public function scalability()
    {
        return $this->view('technology.scalability');
    }

    public function performance()
    {
        return $this->view('technology.performance');
    }

    public function openfoundations()
    {
        return $this->view('technology.open-foundations');
    }

    public function ecosystem()
    {
        return $this->view('technology.ecosystem');
    }

}
