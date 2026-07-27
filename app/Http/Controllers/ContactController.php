<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactSubmissionRequest;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return $this->view('contact.index');
    }

    public function booking()
    {
        return $this->view('contact.booking');
    }

    public function regionalRouting()
    {
        return $this->view('contact.regional-routing');
    }

    public function channels()
    {
        return $this->view('contact.channels');
    }

    public function liveChat()
    {
        return $this->view('contact.live-chat');
    }

    public function submit(ContactSubmissionRequest $request)
    {
        $data = $request->validated();
        $data['ip_address'] = $request->ip();
        $data['user_agent'] = $request->userAgent();

        ContactSubmission::create($data);

        return back()->with('status', __('Thank you. Your inquiry has been received.'));
    }
}
