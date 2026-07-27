<?php

namespace App\Http\Controllers;

class BillingController extends Controller
{
    public function index()
    {
        return $this->view('client.billing.index');
    }
    public function planoverview()
    {
        return $this->view('client.billing.plan-overview');
    }

    public function invoices()
    {
        return $this->view('client.billing.invoices');
    }

    public function paymentmethods()
    {
        return $this->view('client.billing.payment-methods');
    }

    public function planmodification()
    {
        return $this->view('client.billing.plan-modification');
    }

}
