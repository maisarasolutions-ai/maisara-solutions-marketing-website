<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactSubmissionRequest;
use App\Models\NewsletterSubscription;
use Illuminate\Http\Request;

class InsightsController extends Controller
{
    public function index()
    {
        return $this->view('insights.index');
    }
    public function thoughtleadership()
    {
        return $this->view('insights.thought-leadership');
    }

    public function perspectives()
    {
        return $this->view('insights.perspectives');
    }

    public function intelligence()
    {
        return $this->view('insights.intelligence');
    }

    public function successstories()
    {
        return $this->view('insights.success-stories');
    }

    public function resources()
    {
        return $this->view('insights.resources');
    }

    public function newsletter()
    {
        return $this->view('insights.newsletter');
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'max:255'],
        ]);

        NewsletterSubscription::create([
            'email' => $request->input('email'),
            'token' => bin2hex(random_bytes(32)),
        ]);

        return back()->with('status', __('Thank you for subscribing.'));
    }
}
