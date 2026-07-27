<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactSubmissionRequest;
use App\Models\Assessment;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function index()
    {
        return $this->view('assessment.index');
    }
    public function maturity()
    {
        return $this->view('assessment.maturity');
    }

    public function deploymentsuitability()
    {
        return $this->view('assessment.deployment-suitability');
    }

    public function arabicreadiness()
    {
        return $this->view('assessment.arabic-readiness');
    }

    public function advisoryreadiness()
    {
        return $this->view('assessment.advisory-readiness');
    }

    public function segmentidentifier()
    {
        return $this->view('assessment.segment-identifier');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'type' => ['required', 'string', 'max:255'],
            'responses' => ['required', 'array'],
            'score' => ['nullable', 'integer'],
        ]);

        $validated['session_id'] = $request->session()->getId();
        $validated['recommendation'] = '';
        $validated['completed_at'] = now();

        Assessment::create($validated);

        return back()->with('status', __('Assessment submitted successfully.'));
    }
}
