<?php

namespace App\Http\Controllers\be;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\ProfileService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public function index()
    {
        $profile = $this->profileService->getProfile(Auth::id());
        return view('be.pages.profile.index', compact('profile'));
    }

    public function edit($id)
    {
        $profile = User::findOrFail($id); // Pastikan model User digunakan
        return view('be.pages.profile.edit', compact('profile'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'introduction' => 'nullable|string',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'resume_file' => 'nullable|file|mimes:pdf|max:2048',
            'github_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
        ]);

        $data = $request->except(['_method', '_token']);

        // Handle file uploads
        if ($request->hasFile('profile_image')) {
            $data['profile_image'] = $request->file('profile_image')->store('profile_images', 'public');
        }
        if ($request->hasFile('resume_file')) {
            $data['resume_file'] = $request->file('resume_file')->store('resumes', 'public');
        }

        $this->profileService->updateProfile($id, $data);

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }
}
