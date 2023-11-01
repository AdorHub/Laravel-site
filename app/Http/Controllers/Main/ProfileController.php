<?php

namespace App\Http\Controllers\Main;

use App\Models\User;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index ()
    {
        return view('main.profile');
    }
    public function show (User $user)
    {
        return view('main.user-profile', compact('user'));
    }
}
