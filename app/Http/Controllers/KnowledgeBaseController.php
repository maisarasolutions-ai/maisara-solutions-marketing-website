<?php

namespace App\Http\Controllers;

class KnowledgeBaseController extends Controller
{
    public function index()
    {
        return $this->view('knowledge-base.index');
    }
}
