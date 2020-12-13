<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPenjualan extends Model
{
    protected $table = "transaksi_penjualan";

    protected $fillable = [
    'id_transaksi_penjualan',
    'nama_pembeli',
    'nama_produk',
    'harga_produk',
    'jumlah_order',
    'total_harga_order',
    'bayar_produk'];
}
