<?php

namespace App\Http\Controllers;

use App\Category;
use App\Size;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create(Size $size)
    {
        return view('item.create', compact('size'));
    }

    public function store(Size $size)
    {
        $data = \request()->validate([
            'brand' => 'required',
            'colour' => 'required',
            'quantity' => 'required|min:1'
        ]);
//        dd($data);
        $item = $size->items()->create($data);

        return redirect()->back();
    }

    public function show(Size $size)
    {
        $items = Size::all()->where('items.size_id ='.$size->id);
        dd($items);
    }
}
