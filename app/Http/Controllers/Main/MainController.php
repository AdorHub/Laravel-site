<?php

namespace App\Http\Controllers\Main;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;

class MainController extends Controller
{
    public function index ()
    {
        $posts = Post::all();
        return view('main.index', compact('posts'));
    }
    public function show(Post $post)
    {
        return view('main.singlepost', compact('post'));
    }
    public function store (CommentRequest $request, Post $post)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->user()->id;
        $data['post_id'] = $post->id;

        Comment::create($data);
        return redirect()->route('main.show', $post->id);
    }
}
