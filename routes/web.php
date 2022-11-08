<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

use App\http\Controllers\PostController;

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

Auth::routes();

Route::resource('posts', PostController::class);

Route::redirect('/', '/posts');

/*
Route::get('/', function () {
    $posts = Post::paginate(5);

    //dd($posts[5]);

    return view('home',
        [ 'posts' => $posts ]
    );
});

Route::get('/post/{post}', function (Post $post) {
    //dd($post);
    return view('post', ['post' => $post ]);
});
*/
