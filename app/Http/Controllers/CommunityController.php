<?php

namespace App\Http\Controllers;

class CommunityController extends Controller
{
    public function index()
    {
        return $this->view('community.index');
    }
}
