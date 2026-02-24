<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
Route::get('/', [IndexController::class,'index']);
Route::get("/about",[IndexController::class,'about']);
Route::get("/contact",[IndexController::class,'contact']);


// Route::get("/blog",[PostController::class,'index']);
// Route::get("/blog/{id}",[PostController::class,'show']);

Route::resource("/blog",PostController::class);

Route::get("/tag/test-many-to-many",[TagController::class,'testManyToMany']);
Route::get("/comments",[CommentController::class,'index']);


Route::get("/tag",[TagController::class,'index']);
