<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Layanan;

class PelangganController extends Controller
{
    public function pelanggan(Request $request)
    {
        $user = $request->session()->get('user');
    
        if (!$user) {
            return redirect()->route('login')->withErrors(['Anda harus login terlebih dahulu']);
        }
    
        $transaksi = Transaksi::with('user')->get();
    
        return view('sinitro.pelanggan', [
            'user' => $user,
            'transaksi' => $transaksi,
        ]);
    }
  
}
