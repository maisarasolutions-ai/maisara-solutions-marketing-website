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
        return $this->view('client.billing.plan-overview', [
            'plans' => [
                ['name' => 'Starter', 'price' => '$499/mo'],
                ['name' => 'Growth', 'price' => '$999/mo'],
                ['name' => 'Enterprise', 'price' => 'Custom'],
            ],
        ]);
    }

    public function invoices()
    {
        return $this->view('client.billing.invoices', [
            'invoices' => [],
        ]);
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
