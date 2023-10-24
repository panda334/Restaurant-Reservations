<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuStoreRequest;
use App\Http\Requests\MenuUpdateRequest;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus=Menu::all();
        return view('admin.menus.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.menus.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MenuStoreRequest $request)
    {
        $request->validated();
        $image=$request->file('image')->store('/public/storage/menus');
        $menu=Menu::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'image'=>$image,
            
        ]);
        if($request->has('categories')){
            $menu->categories()->attach($request->categories);
        }
        return to_route('adminmenus.index');
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
    public function edit(Menu $menu)
    {
        $categories=Category::all();
        return view('admin.menus.edit',compact('menu','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MenuUpdateRequest $request, Menu $menu)
    {
        $request->validated();
        $image=$menu->image;
        if($request->hasFile('image')){
            Storage::delete($menu->image);
            $image=$request->file('image')->store('/public/storage/menus');
        }

        $menu->update([
            'name'=>$request->name,
            'image'=>$image,
            'description'=>$request->description,
            'price'=>$request->price,
        ]);
        if($request->has('categories')){
            $menu->categories()->sync($request->categories);
        }
        return to_route('adminmenus.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        Storage::delete($menu->image);
        $menu->delete();
        $menu->categories()->detach();
        return to_route('adminmenus.index');
    }

}
