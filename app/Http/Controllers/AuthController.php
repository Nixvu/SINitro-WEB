<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerSave(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'shift' => 'required',
            'notelp' => 'required',
            'roles' => 'required',
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'shift' => $request->input('shift'),
            'notelp' => $request->input('notelp'),
            'roles' => $request->input('roles'),
        ]);

        return redirect()->route('login')->with('success', 'Berhasil Mendaftar');
    }

    public function loginAksi(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->put('user', Auth::user());
            return redirect()->intended('dashboard');
        } else {
            return redirect()->back()->withErrors([
                'email' => 'Email atau password salah',
            ])->withInput($request->only('email'));
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->forget('user');
        return redirect()->route('login')->with('success', 'Anda telah logout');
    }

    public function showDashboard()
    {
        $user = Auth::user();
        return view('sinitro.dashboard', ['user' => $user]);
    }
}
