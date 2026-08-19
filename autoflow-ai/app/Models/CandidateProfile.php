<?php

namespace App\Http\Controllers;

use App\Models\CandidateProfile;
use Illuminate\Http\Request;

class CandidateProfileController extends Controller
{
    public function edit()
    {
        $profile = CandidateProfile::firstOrCreate(
            ['user_id' => auth()->id()],
            ['verification_status' => 'draft']
        );

        return view('candidate.profile', compact('profile'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'headline' => ['nullable', 'string', 'max:255'],
            'bio' => ['nullable', 'string', 'max:2000'],
            'location' => ['nullable', 'string', 'max:255'],
            'work_preference' => ['nullable', 'in:remote,hybrid,onsite'],
            'availability' => ['nullable', 'string', 'max:255'],
            'expected_salary' => ['nullable', 'integer', 'min:0'],

            'linkedin_url' => ['nullable', 'url'],
            'github_url' => ['nullable', 'url'],
            'portfolio_url' => ['nullable', 'url'],

            'cv' => ['nullable', 'file', 'mimes:pdf,doc,docx', 'max:5120'],
        ]);

        $profile = CandidateProfile::firstOrCreate([
            'user_id' => auth()->id(),
        ]);

        if ($request->hasFile('cv')) {
            $validated['cv_path'] = $request->file('cv')
                ->store('candidate-cvs', 'public');
        }

        unset($validated['cv']);

        $profile->update($validated);

        return back()->with('success', 'Profile updated successfully.');
    }
}