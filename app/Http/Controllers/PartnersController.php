<?php

namespace App\Http\Controllers;

class PartnersController extends Controller
{
    public function index()
    {
        return $this->view('partners.index');
    }
}
