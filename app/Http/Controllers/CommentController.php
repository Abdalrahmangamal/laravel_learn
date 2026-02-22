<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
function index(){
  $data=Comment::all();
  return view('comment.index',[ 'comments'=>$data,"title"=>"Ramadan"]);
}

function create(){
  Comment::create([
    "author"=>"Comment Author",
    "content"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate.",
    "post_id"=>1
    
  ]);
  return redirect("/comments");
  }
}
