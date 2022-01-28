<?php

namespace App\Http\Controllers\admin;

use App\Herb;

use App\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $herbs = Herb::all();

        return view('admin.dashboard', compact('users', 'herbs'));
    }


    public function user()
    {
        $user = User::all();

        return view('admin.users.index', compact('user'));
    }
    public function status_update(Request $request, $user_id)
    {
        User::updateOrCreate(
            [
                'id' => $user_id
            ],
            [
                'type' => $request->type,
            ]
        );

        return redirect()->route('user');
    }
}
