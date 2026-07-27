<?php

namespace App\Http\Controllers;

class PartnersController extends Controller
{
    public function index()
    {
        return $this->view('partners.index');
    }
    public function technologyalliances()
    {
        return $this->view('partners.technology-alliances');
    }

    public function innovationhubs()
    {
        return $this->view('partners.innovation-hubs');
    }

    public function coworkingnetworks()
    {
        return $this->view('partners.coworking-networks');
    }

    public function professionalservices()
    {
        return $this->view('partners.professional-services');
    }

    public function referralprogramme()
    {
        return $this->view('partners.referral-programme');
    }

    public function jointmodels()
    {
        return $this->view('partners.joint-models');
    }

    public function successconarratives()
    {
        return $this->view('partners.success-co-narratives');
    }

    public function apply()
    {
        return $this->view('partners.apply');
    }

    public function resources()
    {
        return $this->view('partners.resources');
    }

    public function localpresence()
    {
        return $this->view('partners.local-presence');
    }

}
