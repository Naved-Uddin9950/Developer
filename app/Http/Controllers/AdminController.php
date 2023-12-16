<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // public function categories()
    // {
    //     return view('admin.categories');
    // }

    public function courses()
    {
        return view('admin.courses');
    }

    public function students()
    {
        return view('admin.students');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function message()
    {
        return view('admin.message');
    }

    public function plans()
    {
        return view('admin.plans');
    }


    public function showCategories()
    {
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }

    public function createCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'status' => 'required|in:active,inactive',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.categories')->withErrors($validator)->withInput();
        }

        $category = Category::create([
            'category_id' => Category::generateUniqueId(),
            'name' => $request->input('name'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('admin.categories')->with('success', 'Category created successfully.')->with('category', $category);
    }

    public function updateCategory(Request $request, $id)
    {
        Category::findOrFail($id)->update($request->all());
        return redirect()->route('admin.categories')->with('success', 'Category updated successfully.');
    }


    public function deleteCategory($id)
    {
        Category::findOrFail($id)->delete();
        return redirect()->route('admin.categories')->with('success', 'Category deleted successfully.');
    }

}

