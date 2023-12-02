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
