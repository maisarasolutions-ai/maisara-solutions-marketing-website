<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        return $this->view('portfolio.index');
    }
    public function casestudies()
    {
        return $this->view('portfolio.case-studies');
    }

    public function advisoryjournals()
    {
        return $this->view('portfolio.advisory-journals');
    }

    public function implementationevidence()
    {
        return $this->view('portfolio.implementation-evidence');
    }

    public function outcomes()
    {
        return $this->view('portfolio.outcomes');
    }

    public function perspective()
    {
        return $this->view('portfolio.perspective');
    }

    public function technologystory()
    {
        return $this->view('portfolio.technology-story');
    }

    public function clientnarratives()
    {
        return $this->view('portfolio.client-narratives');
    }

    public function authority()
    {
        return $this->view('portfolio.authority');
    }

    public function evolution()
    {
        return $this->view('portfolio.evolution');
    }

    public function confidentiality()
    {
        return $this->view('portfolio.confidentiality');
    }

}
