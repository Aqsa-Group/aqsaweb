<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;

class AdController extends Controller
{
    public function create()
    {
        return view('ads.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'main_image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'video'      => 'nullable|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:51200', // حداکثر 50MB
            'title'      => 'required|string|max:255',
            'paragraph'  => 'required|string',
            'link'       => 'nullable|url',
        ]);

        $imagePath = $request->file('main_image')->store('ads/images', 'public');
        $videoPath = $request->hasFile('video')
        ? $request->file('video')->store('ads/videos', 'public')
        : null;

        Ad::create([
            'main_image' => $imagePath,
            'video'      => $videoPath,
            'title'      => $request->title,
            'paragraph'  => $request->paragraph,
            'link'       => $request->link,
        ]);

        return back()->with('success', 'آگهی با موفقیت ذخیره شد.');
    }
}
