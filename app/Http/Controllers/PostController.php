<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function list()
    {
        $posts = Post::latest()->get();

        return view('post.list', compact('posts'));
    }

    public function add()
    {
        return view('post.add');
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function save(Request $request)
    {
        if ($request->has('id')) {
            $post = Post::findOrFail($request->id);
            $post->update($request->all());
        } else {
            Post::create($request->all());
        }
        return redirect()->route('admin.post.list');
    }

    public function delete(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.post.list'); 
    }
}
