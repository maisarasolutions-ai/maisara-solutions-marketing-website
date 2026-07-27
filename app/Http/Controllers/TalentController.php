<?php

namespace App\Http\Controllers;

class TalentController extends Controller
{
    public function index()
    {
        return $this->view('talent.index');
    }
    public function openpositions()
    {
        return $this->view('talent.open-positions');
    }

    public function careerpathways()
    {
        return $this->view('talent.career-pathways');
    }

    public function apply()
    {
        return $this->view('talent.apply');
    }

    public function valuesinpractice()
    {
        return $this->view('talent.values-in-practice');
    }

    public function workmodel()
    {
        return $this->view('talent.work-model');
    }

    public function specialistnetwork()
    {
        return $this->view('talent.specialist-network');
    }

    public function internships()
    {
        return $this->view('talent.internships');
    }

    public function benefits()
    {
        return $this->view('talent.benefits');
    }

    public function diversity()
    {
        return $this->view('talent.diversity');
    }

}
