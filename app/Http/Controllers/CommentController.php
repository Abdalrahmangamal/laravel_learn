<?php

namespace App\Http\Controllers;
use App\Models\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $data=Comment::all();
  return view('comment.index',[ 'comments'=>$data,"title"=>"Ramadan"]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Comment::factory(5)->create();
    return response(["message"=>"successful Creation","createdcount"=>5],201);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("comment.edit",["title"=>"Edit Comment"]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
