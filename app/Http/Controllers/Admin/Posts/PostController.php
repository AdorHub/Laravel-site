<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Models\Post;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;

class PostController extends Controller
{
    public function index ()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }
    public function create ()
    {
        return view('admin.posts.create');
    }
    public function store (StoreRequest $request)
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        Post::create($data);
        return redirect()->route('admin.posts.index');
    }
    public function show (Post $post)
    {
        return view('admin.posts.single-post', compact('post'));
    }
    public function edit (Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }
    public function update (Post $post, UpdateRequest $request)
    {
        $data = $request->validated();
        if (isset( $data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        }        
        $post->update($data);
        return redirect()->route('admin.posts.show', compact('post'));
    }
    public function delete (Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index');
    }
    public function destroy (Comment $comment)
    {
        Comment::find($comment->id)->delete();
        return redirect()->route('admin.posts.show', $comment->post->id);
    }
}
