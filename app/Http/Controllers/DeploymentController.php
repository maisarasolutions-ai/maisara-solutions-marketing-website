<?php

namespace App\Http\Controllers;

class DeploymentController extends Controller
{
    public function index()
    {
        return $this->view('deployment.index');
    }
}
