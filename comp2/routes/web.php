<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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
        
        'posts'=>$category->post,
        'categories'=>Category::all(),
        'currentCategory'=>$category

    ]);
});

Route::get('/register',[RegisterController::class,'create'])->middleware('guest');

Route::post('/register',[RegisterController::class,'store'])->middleware('guest');

Route::get('/login',[SessionController::class,'create'])->middleware('guest');

Route::post('/login',[SessionController::class,'store'])->middleware('guest');

Route::post('/logout',[SessionController::class,'destroy'])->middleware('auth');


//Admin
Route::get('/admin/posts',[AdminPostController::class,'index'])->middleware('admin');

Route::get('/admin/posts/create',[AdminPostController::class,'create'])->middleware('admin');

Route::post('/admin/posts',[AdminPostController::class,'store'])->middleware('admin');

Route::get('/admin/posts/{post}/edit',[AdminPostController::class,'edit'])->middleware('admin');

Route::patch('/admin/posts/{post}',[AdminPostController::class,'update'])->middleware('admin');

Route::delete('/admin/posts/{post}',[AdminPostController::class,'destroy'])->middleware('admin');

