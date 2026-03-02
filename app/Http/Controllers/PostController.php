<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::Paginate(10);
        return view('post.index', ['posts' => $data, "title" => "Ramadan"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create', ['title' => "create new post"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
        $validated=$request->validate([
            'title'=>'required',
            'body'=>'required',
            'author'=>'required'
        ],
        [
            'title.required'=>'title is required',
            'body.required'=>'content is required',
            'author.required'=>'author is required'
        ]);
        // Do operation
        print_r($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Post::findOrFail($id);
        return view('post.show', ['post' => $data, "title" => "single post"]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('post.edit', ['title' => "edit post"]);
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
