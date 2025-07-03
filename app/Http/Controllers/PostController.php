<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = \App\Models\Post::all();
        return view('posts.index', compact('posts'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        $request->merge(['slug' => Str::slug($request->title)]);
        Post::create($request->all());
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = \App\Models\Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function edit(string $id)
    {
        $post = \App\Models\Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        $post = \App\Models\Post::findOrFail($id);
        $post->update($request->all());
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = \App\Models\Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
