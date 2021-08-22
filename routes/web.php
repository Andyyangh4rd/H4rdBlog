<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Gao Yu Fei",
        "role" => "QunFei",
        "img" => "pretty.jpg",
        "title" => "About"
    ]);
});


Route::get('/blogs', [PostController::class, 'index']);

// halaman single post
// Route::get('/posts/{slug}', function ($slug) {

//     // foreach ($blog_posts as $post) {
//     //     if ($post['slug'] == $slug) {
//     //         $new_post = $post;
//     //     }
//     // }

//     return view('post', [
//         "title" => "Single Post",
//         "post" => Post::find($slug)
//     ]);
// });

Route::get('/posts/{post:slug}', [PostController::class, "show"]);
Route::get('/categories', function () {
    return view('categories', [
        "title" => "All Categories",
        "posts" => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        "title" => "Post Category By: " . $category->name,
        "posts" => $category->posts->load('category', 'author')
    ]);
});

Route::get('/author/{author:username}', function (User $author) {
    return view('posts', [
        "title" => "Post Author By: " . $author->name,
        "posts" => $author->posts->load('category', 'author'),
    ]);
});
