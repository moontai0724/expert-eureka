<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credentials))
            return back()->withInput($credentials)->withErrors(['message' => '帳號不存在或密碼錯誤']);

        $request->session()->regenerate();

        return redirect()->intended('/');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'name' => ['required', 'max:40'],
            'email' => ['required', 'max:255', 'unique:users', 'email'],
            'password' => ['required', 'confirmed'],
        ]);

        $user = new User();
        $user->name = $credentials['name'];
        $user->email = $credentials['email'];
        $user->password = password_hash($credentials['password'], PASSWORD_BCRYPT);
        $saved = $user->save();
        if (!$saved)
            return back()->withInput($credentials)->withErrors(['message' => '在儲存時發生未知錯誤']);

        return redirect()->route('auth.login')->withInput($credentials)->with('message', '註冊成功！');
    }

    /**
     * Log the user out of the application.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
