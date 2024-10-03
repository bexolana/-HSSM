<?php

namespace App\Http\Controllers;

use App\Models\SocialMediaServiceDescription;
use Illuminate\Http\Request;

class SocialMediaServiceDescriptionController extends Controller
{
    public function index()
    {
        $descriptions = SocialMediaServiceDescription::all();
        return view('social_media_service_descriptions.index', compact('descriptions'));
    }

    public function create()
    {
        return view('social_media_service_descriptions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'sms_id' => 'required|exists:social_media_services,id',
            'description' => 'required',
        ]);

        SocialMediaServiceDescription::create($request->all());
        return redirect()->route('social-media-service-descriptions.index')->with('success', 'Description created successfully.');
    }

    public function show(SocialMediaServiceDescription $description)
    {
        return view('social_media_service_descriptions.show', compact('description'));
    }

    public function edit(SocialMediaServiceDescription $description)
    {
        return view('social_media_service_descriptions.edit', compact('description'));
    }

    public function update(Request $request, SocialMediaServiceDescription $description)
    {
        $request->validate([
            'description' => 'required',
        ]);

        $description->update($request->all());
        return redirect()->route('social-media-service-descriptions.index')->with('success', 'Description updated successfully.');
    }

    public function destroy(SocialMediaServiceDescription $description)
    {
        $description->delete();
        return redirect()->route('social-media-service-descriptions.index')->with('success', 'Description deleted successfully.');
    }
}