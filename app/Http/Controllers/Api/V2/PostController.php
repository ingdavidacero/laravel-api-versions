<?php

namespace App\Http\Controllers\Api\V2;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\V2\PostResource;
use App\Http\Resources\V2\PostCollection;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'status' => 'OK',
            'data' => new PostCollection(Post::latest()->paginate())

        ]);
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
    public function show(Post $post)
    {
        return response()->json([
            'status' => 'OK',
            'data' => new PostResource($post)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
