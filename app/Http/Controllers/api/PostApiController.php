<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::paginate(25);
        return response($data, 200);
    }   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Post::create($request->all());
        return response(['data'=>$data,'message'=>'Post created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Post::find($id);
        if (!$data) {
            return response(["message" => "No post found"], 404);
        } else {
            return response($data, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Post::find($id);
        $data->update($request->all());
        if (!$data) {
            return response(["message" => "No post found"], 404);
        } else {
            return response($data, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Post::find($id);
        $data->delete();
        if (!$data) {
            return response(["message" => "No post found"], 404);
        } else {
            return response(null, 204);
        }
    }
}
