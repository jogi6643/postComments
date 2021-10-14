<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/post', [PostController::class, 'create'])->name('post.create');
// Route::post('/post', [PostController::class, 'store'])->name('post.store');
// Route::get('/post/{id}', [PostController::class, 'edit'])->name('post.edit');
// Route::post('/post', [PostController::class, 'update'])->name('post.update');
// Route::get('/posts', [PostController::class, 'index'])->name('posts');
// Route::get('/article/{post:slug}', [PostController::class,'show'])->name('post.show');
// Route::post('/comment/store', [CommentController::class,'store'])->name('comment.add');
// Route::post('/reply/store', [CommentController::class,'replyStore'])->name('reply.add');
Route::resource('posts', PostsController::class);
Route::resource('comments', CommentsController::class);
Route::post('/reply/store', [CommentsController::class,'replyStore'])->name('reply.add');