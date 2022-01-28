<?php

namespace App\Http\Controllers;

use App\Background;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BackgroundController extends Controller
{
    public function index()
    {
        $background = Background::all();
        return view('admin/backgrounds/background', compact('background'));
    }
    public function add()
    {
        return view('admin/backgrounds/add');
    }
    public function create(Request $request)
    {
        $background = new Background();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $destinationPath = public_path() . '/admin/images/backgrounds';
            $file->move($destinationPath, $fileName);
            $background->image = $fileName;
        } else {
            $background->image = 'default.png';
        };

        $background->status = 0;
        $background->save();
        return redirect()->route('background');
    }
    public function edit($background_id)
    {
        $background = Background::find($background_id);

        return view('admin.backgrounds.edit', compact('background'));
    }
    public function update(Request $request, $background_id)
    {
        $background = Background::find($background_id);

        if ($request->hasFile('image')) {
            $background = Background::find($background_id);
            $filename = $background->image;
            File::delete(public_path() . '/admin/images/backgrounds/' . $filename);
            $file = $request->file('image');
            $fileName = $background->image;
            $destinationPath = public_path() . '/admin/images/backgrounds';
            $file->move($destinationPath, $fileName);
            $background->image = $fileName;
        } else {
            $new = $background->image;
        };
        Background::updateOrCreate(
            [
                'id' => $background_id
            ],
            [
                'image' => $new,
                'status' => $request->status
            ]
        );

        return redirect()->route('background');
    }
    public function delete($background_id)
    {
        $background = Background::find($background_id);
        $filename = $background->image;
        File::delete(public_path() . '/admin/images/backgrounds/' . $filename);
        Background::destroy($background_id);
        return redirect()->route('background');
    }
}
