<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index ()
    {
        $usersCount = User::all()->count();
        $postsCount = Post::all()->count();
        $commentsCount = Comment::all()->count();
        return view('admin.main', compact('postsCount', 'usersCount', 'commentsCount'));
    }
}
