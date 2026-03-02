<?php


use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PostController;
// use App\Http\Controllers\CommentController;
// use App\Http\Controllers\TagController;
use App\Http\Controllers\api\PostApiController;
// Route::post("/blog",[PostController::class,'create']);
// Route::delete("/blog/{id}",[PostController::class,'delete']);
// Route::post("/comments",[CommentController::class,'create']);



// Route::post("/tag",[TagController::class,'create']);

Route::prefix('v1')->group(function(){
Route::apiResource("post",PostApiController::class);
}) ;
Route::prefix('v1')->group(function(){
Route::apiResource("post",PostApiController::class);
}) ;