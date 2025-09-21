<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    // show the welcome page with data
    public function index()
    {
        $home = Home::first(); // take the first record
        return view('welcome', compact('home'));
    }

    // save or update home data
    public function store(Request $request)
    {
        $home = Home::first() ?? new Home();

        $home->main_title = $request->main_title;
        $home->main_paragraph = $request->main_paragraph;

        if ($request->hasFile('main_image')) {
            $home->main_image = $request->file('main_image')->store('uploads', 'public');
        }

        // cards
        $home->card1_title = $request->card_title1;
        $home->card1_paragraph = $request->card_paragraph1;
        $home->card2_title = $request->card_title2;
        $home->card2_paragraph = $request->card_paragraph2;
        $home->card3_title = $request->card_title3;
        $home->card3_paragraph = $request->card_paragraph3;

        // client
        if ($request->hasFile('client_image')) {
            $home->client_image = $request->file('client_image')->store('uploads', 'public');
        }

        $home->save();

        return redirect('/')->with('success', 'Home updated successfully!');
    }
}
