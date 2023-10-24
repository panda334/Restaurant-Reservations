<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryStoreRequest;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $image=$request->file('image')->store('public/storage/categories');
        Category::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$image,
        ]);
       return to_route('admincategories.index')->with('success','category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryStoreRequest $request, Category $category)
    {
        $request->validated();
        $image=$category->image;
        if($request->hasFile('image')){
            Storage::delete($category->image);
            $image=$request->file('image')->store('public/storage/categories');
        }

        $category->Update([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$image
        ]);
        return to_route('admincategories.index')->with('success','category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        Storage::delete($category->image);
        $category->delete();
        $category->menus()->detach();
        return to_route('admincategories.index')->with('success','category deleted successfully');
    }
}
