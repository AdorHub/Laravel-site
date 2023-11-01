<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    public function create ()
    {
        return view('auth.register');
    }
    public function store (RegisterRequest $request)
    {
        $data = $request->validated();
        $data['profile_image'] = Storage::disk('public')->put('/profile_images', $data['profile_image']);
        $user = User::create($data);
        Auth::login($user);
        return redirect()->route('main.index');
    }
}
