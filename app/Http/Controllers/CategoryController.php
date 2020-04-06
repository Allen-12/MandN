<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CategoryController extends Controller
{
    public function create()
    {
        return view('category.create');
    }

    public function store()
    {
        $data = request()->validate([
            'type' => 'required'
        ]);

       \App\Category::create($data);

        return redirect('/home');
    }

    public function index()
    {
        $categories = \App\Category::all();

//        dd($categories);

        return view('category.index',compact('categories'));
    }

    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    public function update(Category $category)
    {
        $data = request()->validate([
            'type' => 'required'
        ]);

        $category->update($data);

//        dd($category);

        return redirect('/categories');
    }

    public function show(Category $category)
    {
        $category->load('sizes');

        return view('category.show',compact('category'));
    }
}
