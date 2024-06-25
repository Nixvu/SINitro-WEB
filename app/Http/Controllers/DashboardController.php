<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Layanan;

class DashboardController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::with('user', 'layanan')->paginate(10);
        return view('dashboard', compact('transaksi'));
    }

    public function showDashboard(Request $request)
    {
        $user = $request->session()->get('user');
        if (!$user) {
            return redirect()->route('login');
        }

        $transaksi = Transaksi::with('user', 'layanan')->get();
        $totalMotor = $transaksi->where('jns_kendaraan', 'Motor')->count();
        $totalMobil = $transaksi->where('jns_kendaraan', 'Mobil')->count();
        $totalPendapatan = $transaksi->sum('biaya');

        return view('sinitro.dashboard', [
            'user' => $user,
            'transaksi' => $transaksi,
            'totalMotor' => $totalMotor,
            'totalMobil' => $totalMobil,
            'totalPendapatan' => $totalPendapatan,
        ]);
    }  

    public function storeTransaction(Request $request)
    {
        $request->validate([
            'nopol' => 'required|string|max:10',
            'kendaraan' => 'required|string|in:Motor,Mobil',
            'layanan' => 'required|integer',
            'qty' => 'required|integer',
            'tanggal' => 'required|date',
            'shift' => 'required|integer',
        ]);

        $user = $request->session()->get('user');
        if (!$user) {
            return redirect()->route('login')->withErrors(['Anda harus login terlebih dahulu']);
        }

        $layanan = Layanan::where('id_layanan', $request->input('layanan'))->first();
        if (!$layanan) {
            return redirect()->back()->withErrors(['Layanan tidak ditemukan']);
        }

        $transaksi = new Transaksi();
        $transaksi->tanggal = $request->input('tanggal');
        $transaksi->id_users = $user->id_users;
        $transaksi->id_layanan = $layanan->id_layanan;
        $transaksi->nopol = $request->input('nopol');
        $transaksi->jns_kendaraan = $request->input('kendaraan');
        $transaksi->name = $user->name;
        $transaksi->shift = $user->shift;
        $transaksi->qty = $request->input('qty');
        $transaksi->harga = $layanan->harga;
        $transaksi->biaya = $transaksi->qty * $transaksi->harga;
        $transaksi->created_at = now();
        $transaksi->updated_at = now();

        $transaksi->save();

        return redirect()->route('dashboard')->with('success', 'Transaksi berhasil disimpan');
    }

    public function viewDetail($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('sinitro.aksi.tampilan', compact('transaksi'));
    }

    public function editDetail($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $layananList = Layanan::all(); // Asumsi ini digunakan untuk select dropdown layanan
    
        return view('sinitro.aksi.edit', compact('transaksi', 'layananList'));
    }
    
    public function updateDetail(Request $request, $id)
    {
        $request->validate([
            'nopol' => 'required|string|max:10',
            'kendaraan' => 'required|string|in:Motor,Mobil',
            'layanan' => 'required|integer',
            'qty' => 'required|integer',
            'tanggal' => 'required|date',
            'shift' => 'required|integer',
        ]);
    
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->tanggal = $request->input('tanggal');
        $transaksi->nopol = $request->input('nopol');
        $transaksi->jns_kendaraan = $request->input('kendaraan');
        $transaksi->shift = $request->input('shift');
        $transaksi->qty = $request->input('qty');
        $transaksi->id_layanan = $request->input('layanan');
        $layanan = Layanan::findOrFail($request->input('layanan'));
        $transaksi->harga = $layanan->harga;
        $transaksi->biaya = $transaksi->qty * $transaksi->harga;
    
        $transaksi->save();
    
        return redirect()->route('view', $id)->with('success', 'Detail transaksi berhasil diperbarui');
    }
    
    public function deleteDetail($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('dashboard')->with('success', 'Transaksi berhasil dihapus');
    }    
}
