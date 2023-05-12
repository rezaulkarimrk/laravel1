<?php

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

// Route::get('/', function () {
//     // return view('welcome');
//     return view('home.index');
// })->name('home.inedx');

// Route::get('/contact', function () {
//     return view('home.contact');
// })->name('home.contact');

Route::view('/', 'home.index')->name('home.inedx');
Route::view('/contact', 'home.contact')->name('home.contact');

$posts = [
    1 => [
        'title' => 'Intro to Laravel',
        'content' => 'This is a short intro to Laravel',
        'is_new' => true,
        'has_comment' => true,
    ],
    2 => [
        'title' => 'Intro to PHP',
        'content' => 'This is a short intro to PHP',
        'is_new' => false,
    ]
    ];
Route::get('/posts', function () use ($posts) {
    //compact($posts) === ['posts' => $posts] //both are same work
    return view('posts.index', ['posts' => $posts]);
});

Route::get('/posts/{id}', function ($id) use ($posts) {
    abort_if(!isset($posts[$id]), 404);

    return view('posts.show', ['posts' => $posts[$id]]);
})
// ->where([
//     'id' => '[0-9]+'
// ])
->name('post.show');

Route::get('/recent_posts/{days_ago?}', function ( string $daysAgo = "2555") {
    return "Post from {$daysAgo} days ago";
})->name('post.recent.index');