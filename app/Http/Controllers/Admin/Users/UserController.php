<?php

namespace App\Http\Controllers\Admin\Users;

use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index ()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
    public function delete (User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index');
    }
    public function comments (User $user)
    {
        return view('admin.users.user-comments', compact('user'));
    }
}
