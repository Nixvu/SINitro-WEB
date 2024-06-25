<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile(Request $request)
    {
        $user = $request->session()->get('user');

        if (!$user) {
            return redirect()->route('login')->withErrors(['Anda harus login terlebih dahulu']);
        }

        $profileUser = User::findOrFail($user->id_users);

        return view('sinitro.profile', [
            'user' => $user, 
            'profileUser' => $profileUser,
        ]);
    }
}
