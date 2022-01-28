<?php

namespace App\Http\Controllers;

use App\Herb;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HerbController extends Controller
{

    public function index()
    {
        $herb = Herb::all();
        return view('admin/herbs/herb', compact('herb'));
    }
    public function add()
    {
        return view('admin/herbs/add');
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'image' => 'required',
            ],
            [
                'name.required' => 'ต้องกรอกชื่อสมุนไพร',
                'description.required' => 'ต้องกรอกรายละเอียดสมุนไพร',
                'image.required' => 'ต้องเลือกรูปภาพสมุนไพร',
            ]
        );
        $herb = new Herb();
        $herb->name = $request->name;
        $herb->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $destinationPath = public_path() . '/admin/images/herbs';
            $file->move($destinationPath, $fileName);
            $herb->image = $fileName;
        } else {
            $herb->image = 'default.png';
        };
        $herb->save();
        return redirect()->route('herb');
    }
    public function edit($herb_id)
    {
        $herb = Herb::find($herb_id);

        return view('admin.herbs.edit', compact('herb'));
    }
    public function update(Request $request, $herb_id)
    {
        $herb = Herb::find($herb_id);
        $filename = $herb->image;
        if ($request->hasFile('image')) {
            File::delete(public_path() . '/admin/images/herbs/' . $filename);

            $file = $request->file('image');
            $fileName = $herb->image;
            $destinationPath = public_path() . '/admin/images/herbs';
            $file->move($destinationPath, $fileName);
            $new = $fileName;
        } else {
        };
        $new = $herb->image;
        Herb::updateOrCreate(
            [
                'id' => $herb_id
            ],
            [
                'name' => $request->name,
                'description' => $request->description,
                'image' => $new
            ]
        );

        return redirect()->route('herb');
    }
    public function delete($herb_id)
    {
        $herb = Herb::find($herb_id);
        $filename = $herb->image;
        File::delete(public_path() . '/admin/images/herbs/' . $filename);
        Herb::destroy($herb_id);
        return redirect()->route('herb');
    }
}
