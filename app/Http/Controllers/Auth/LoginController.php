<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create ()
    {
        return view('auth.login');
    }
    public function store (LoginRequest $request)
    {
        $data = $request->validated();
        if (!Auth::attempt($data, $request->boolean('remember'))) {
            back();
        }
        $request->session()->regenerate();
        return redirect()->route('main.index');
    }
    public function destroy ()
    {
        Auth::logout();
        return redirect()->route('main.index');
    }
}
