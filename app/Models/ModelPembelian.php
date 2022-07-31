<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPembelian extends Model
{
    protected $table = "transaksi_pembelian";

    protected $fillable = [
    'id_transaksi_pembelian',
    'nama_supplier',
    'id_bahan',
    'nama_bahan',
    'harga_bahan',
    'jumlah_beli',
    'total_harga_beli'];
}
