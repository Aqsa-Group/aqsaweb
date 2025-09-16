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
            'title'      => 'required|string|max:255',
            'paragraph'  => 'required|string',
            'link'       => 'nullable|url',
        ]);

        $imagePath = $request->file('main_image')->store('ads', 'public');

        Ad::create([
            'main_image' => $imagePath,
            'title'      => $request->title,
            'paragraph'  => $request->paragraph,
            'link'       => $request->link,
        ]);

        return back()->with('success', 'آگهی با موفقیت ذخیره شد.');
    }
}
