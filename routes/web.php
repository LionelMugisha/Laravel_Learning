<?php

use App\Models\Post;
use App\Models\Category;
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

Route::get('/', function () {

    return view('posts',[
        'posts' => Post::with('category')->get()
    ]);
});

Route::get('post/{post:slug}', function (Post $post) {
    //find post by its slug and pass it to a view callled 'post'
    // $post = Post::findOrFail($id);
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function(Category $category){
    return view('posts',[
        'posts' => $category->posts
    ]);
});