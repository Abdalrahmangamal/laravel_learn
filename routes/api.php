<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;

Route::post("/blog",[PostController::class,'create']);
Route::delete("/blog/{id}",[PostController::class,'delete']);



Route::post("/comments",[CommentController::class,'create']);



Route::post("/tag",[TagController::class,'create']);