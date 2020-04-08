<?php

namespace App\Http\Controllers;

use App\Category;
use App\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function create(Category $category)
    {
        return view('size.create', compact('category'));
    }

    public function store(Category $category)
    {
        $data = request()->validate([
            'size' => 'required'
        ]);

        $category->sizes()->create($data);

        return redirect('/categories/'.$category->id);
    }

    public function show(Category $category, Size $size)
    {
        $category->load('sizes');
//        dd($size);

        return view('size.show', compact('category','size'));
    }
}
