<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
function index(){
  $data=Post::all();
  return view('post.index',[ 'posts'=>$data,"title"=>"Ramadan"]);
}
function show($id){
  $data=Post::findOrFail($id);
  RETURN view('post.show',['post'=>$data,"title"=>"single post"]);
}
function create(){
  Post::create([
    "title"=>"Post 2",
    "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate.",
    "published"=>1,
    "author"=>"John Doe 2"
  ]);
  return redirect("/blog");
  }
  function delete(){
     Post::destroy(1);
  }
}
