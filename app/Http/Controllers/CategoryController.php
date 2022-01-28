<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->detail = $request->detail;
        $category->save();
        return redirect('admin/content');

        // dd($request);
    }

    public function edit($category_id)
    {
        $category = Category::find($category_id);
        return view('admin.category.edit', compact('category'));
    }
    public function delete($category_id)
    {
        Category::destroy($category_id);
        return redirect('/admin/content');
    }
}
