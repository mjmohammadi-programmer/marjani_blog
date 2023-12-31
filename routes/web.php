<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




/*Route::get('/test',function (\Illuminate\Http\Request $request){
    $name = $request->get('name');
    $age = $request->get('age');

    dd('hi '.$name.' is '.$age.' years old');
});*/

/*Route::get('/test',[\App\Http\Controllers\HomeController::class,'index']);
Route::get('/calculate',[\App\Http\Controllers\HomeController::class,'calculate']);*/

Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);

Route::get('/post/new',[\App\Http\Controllers\PostController::class,'create']);
Route::post('/post/store',[\App\Http\Controllers\PostController::class,'store']);
Route::get('/post/{id}',[\App\Http\Controllers\PostController::class,'show']);

Route::get('/categories',[\App\Http\Controllers\CategoryController::class,'index']);
Route::get('/category/new',[\App\Http\Controllers\CategoryController::class,'create']);
Route::post('/category/store',[\App\Http\Controllers\CategoryController::class,'store']);
Route::get('/category/edit/{id}',[\App\Http\Controllers\CategoryController::class,'edit']);
Route::patch('/category/update/{id}',[\App\Http\Controllers\CategoryController::class,'update']);
Route::delete('/category/delete/{id}',[\App\Http\Controllers\CategoryController::class,'destroy']);
