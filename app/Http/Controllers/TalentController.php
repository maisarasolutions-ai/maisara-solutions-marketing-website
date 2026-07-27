<?php

namespace App\Http\Controllers;

class TalentController extends Controller
{
    public function index()
    {
        return $this->view('talent.index');
    }
}
