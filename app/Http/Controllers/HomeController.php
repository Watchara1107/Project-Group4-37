<?php

namespace App\Http\Controllers;

use App\Background;
use Illuminate\Http\Request;
use App\User;
use App\Herb;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->isAdmin()) {
            return view('admin/dashboard');
        } else {
            return view('home');
        }
    }

    public function profile()
    {
        $user = User::find(auth()->user()->id);
        return view('home', compact('user'));
    }
    public function update(Request $request, $user_id)
    {
        User::updateOrCreate(
            [
                'id' => $user_id
            ],
            [
                'name' => $request->name,
            ]
        );

        return redirect()->route('home');
    }

}
