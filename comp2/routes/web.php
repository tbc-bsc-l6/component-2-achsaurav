<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class,'show']);

Route::get('/categories/{category:slug}',function(Category $category){
    return view('home',[
        'posts'=>$category->post
    ]);
});

Route::get('/register',function(){
    return view('register');
});

Route::get('/add',function(){
    return view('addProduct');
});