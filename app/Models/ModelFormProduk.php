<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFormProduk extends Model{
    protected $table = "produk";

    protected $fillable = [
    'id_produk',
    'nama_produk',
    'harga_produk',
    'jumlah_produk',
    'deskripsi_produk'];
}
