<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class TagController extends Controller
{
function index(){
  $data=Tag::all();
  return view('tag.index',[ 'tags'=>$data,"title"=>"Ramadan"]);
}

function create(){
  Tag::create([
    "title"=>"tag 2",
  ]);
  return redirect("/tag");
  }

  function testManyToMany(){
  $post2=Post::find(2);
  $post3=Post::find(3);
  $post2->tags()->attach([3]);
  // $post2->tags()->attach([2]);
  
return response()->json([
  'post2'=>$post2->tags,
  'post3'=>$post3->tags
]);
  }
}
