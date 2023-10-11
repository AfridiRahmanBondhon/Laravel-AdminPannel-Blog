<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.Category.index',[
            'categories'=>Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::saveInfo($request);
        return redirect(route('CATEGORIES.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Category::statusCheck($id);
        return redirect(route('CATEGORIES.index'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.Category.edit',[
            'category'=>Category::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Category::saveInfo($request,$id);
        return redirect(route('CATEGORIES.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::deleteInfo($id);
        return redirect(route('CATEGORIES.index'));
    }
}
