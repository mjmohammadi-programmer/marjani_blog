<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

       return view('post.create',[
           'categories' => $categories,
       ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*dd($request->all());*/
        /*dd($request->get('title'));*/

        $post = Post::query()->create([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'category_id' => $request->get('category'),
        ]);

        if ($post){
            return redirect('/');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::query()->where('id',$id)->firstOrFail();

        /*if ($post == null){
            abort(404);
        }*/

        return view('post.show',['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
