<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
// Route::get("/blog",[PostController::class,'index']);
// Route::get("/blog/{id}",[PostController::class,'show']);
Route::get("/about",  AboutController::class);
Route::get('/',  IndexController::class);
Route::get("/contact", ContactController::class);


Route::resource("/blog", PostController::class);
Route::resource("/comments", CommentController::class);
Route::resource("/tag", TagController::class);
Route::get("/tag/test-many-to-many", [TagController::class, 'testManyToMany']);
// Route::get("/comments",[CommentController::class,'index']);
// Route::get("/tag",[TagController::class,'index']);
