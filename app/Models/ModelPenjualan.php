<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelPenjualan extends Model
{
    protected $table = "transaksi_penjualan";

    protected $fillable = [
        'id_transaksi_penjualan',
        'nama_pembeli',
        'id_produk',
        'nama_produk',
        'harga_produk',
        'jumlah_order',
        'total_harga_order',
        'catatan_pembeli',
        'bayar_produk',
        'status_penjualan',
        'jenis_bayar',
        'biaya_admin',
        'sub_total_akhir'
    ];

    // use SoftDeletes;
}
