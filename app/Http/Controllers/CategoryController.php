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
        $categories = Category::all();

        return view('category.index',[
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = Category::query()->create([
            'name' => $request->get('name'),
        ]);

        if ($category){
            return redirect('/categories');
        }else{
            return redirect()->back();
        }
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
    public function edit($id)
    {
        $category = Category::query()->where('id',$id)->firstOrFail();

        return view('category.edit',[
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id,Request $request)
    {
        $category = Category::query()->where('id' , $id)->firstOrFail();

        $update = $category->update([
            'name' => $request->get('name'),
        ]);

        if ($update){
            return redirect('/categories');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::query()->where('id',$id)->firstOrFail();
        $delete = $category->delete();

        if ($delete){
            return redirect('/categories');
        }else{
            return redirect()->back();
        }
    }
}
