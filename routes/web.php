<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;

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
//the block below describs the process of sending data we brought staticly to the view as well as making the routes !!!
// Route::get('/posts/{post}', function ($post) {

//     $posts = [
//         'my-first-post' => 'hello,this m first post',
//         'my-second-post' => 'hello 2end postorino'
//     ];

//     if (! array_key_exists($post,$posts)){
//         abort(404,'Sorry, that post was not found !');
//     }

//     return view('posts', [
//         'post' => $posts[$post]
//     ]);

// });

// Route::get('/posts/{post}', function ($post) {
//     return view('posts', [
//         'post'=> request('post')
//     ]);});

Route::get('/posts/{post}', [PostsController::class, 'show']);

route::get('/', function () {
    return view('welcome');
});
route::get('/about', function () {
    return view('about');
});
route::get('/contact', function () {
    return view('contact');
});
route::get('/cours', function () {
    return view('cours');
});

route::get('/contact', [ContactController::class, 'show']);
route::post('/contact', [ContactController::class, 'store']);
