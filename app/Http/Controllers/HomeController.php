<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $last_posts = Post::query()->limit(4)->orderBy('id','desc')->get();
        $categories = Category::query()->limit(4)->get();

        /*$category_test = Category::query()->where('id' , '1')->first();
        $category_posts_test = $category_test->posts;
        dd($category_posts_test);*/

        /*return view('index',compact(['posts']));
        return view('index')->with(['posts' => $posts]);*/

        return view('index', [
            'posts' => $posts,
            'last_posts' => $last_posts,
            'categories' => $categories,
        ]);
    }

    /*public function index(Request $request){
        $name = $request->get('name');
        $age = $request->get('age');

        $var = 1;
        $var2 = 2;

        dd($this->plus($var,$var2));
        dd('hi '.$name.' is '.$age.' years old');
    }

    public function calculate(Request $request)
    {
        $a = $request->get('a');
        $b = $request->get('b');

        if ($request->get('action') == "plus"){
            dd($this->plus($a,$b));
        }else{
            dd($this->minus($a,$b));
        }
    }*/

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function plus($a, $b)
    {
        return $a + $b;
    }

    public function minus($a, $b)
    {
        return $a - $b;
    }
}
