<?php

namespace App\Http\Controllers;

use App\Background;
use Illuminate\Http\Request;
use App\Herb;

class GuestController extends Controller
{
    public function herbs()
    {
        $herb = Herb::all();
        $herbs = $herb->sortBy('name');
        return view('herbs', compact('herbs'));
    }
    public function background()
    {
        $herbs = Herb::all();
        $herb = $herbs->shuffle();

        $background = Background::where("status", 1)->get();
        return view('welcome', compact('background', 'herb'));
    }
}
