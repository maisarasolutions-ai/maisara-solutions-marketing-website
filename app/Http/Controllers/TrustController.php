<?php

namespace App\Http\Controllers;

class TrustController extends Controller
{
    public function index()
    {
        return $this->view('trust.index');
    }
    public function datasovereignty()
    {
        return $this->view('trust.data-sovereignty');
    }

    public function securityposture()
    {
        return $this->view('trust.security-posture');
    }

    public function backuprecovery()
    {
        return $this->view('trust.backup-recovery');
    }

    public function privacypolicy()
    {
        return $this->view('trust.privacy-policy');
    }

    public function regionalcompliance()
    {
        return $this->view('trust.regional-compliance');
    }

}
