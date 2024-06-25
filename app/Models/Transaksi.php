<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Transaksi extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'transaksi';

    // Primary key
    protected $primaryKey = 'id_transaksi';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'tanggal',
        'id_users',
        'id_layanan',
        'nopol',
        'jns_kendaraan',
        'name',
        'shift',
        'harga',
        'qty',
        'biaya'
    ];

    // Relasi ke tabel Users
    public function user()
    {
        return $this->belongsTo(User::class, 'id_users', 'id_users');
    }

    // Relasi ke tabel Layanan
    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan', 'id_layanan');
    }

    // Aksesori untuk mengonversi tanggal menjadi objek Carbon
    public function getTanggalAttribute($value)
    {
        return Carbon::parse($value);
    }
}
