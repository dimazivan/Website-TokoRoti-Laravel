<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFormBahan extends Model
{
    protected $table = "bahan";

    protected $fillable = [
    'id_bahan',
    'nama_bahan',
    'harga_bahan',
    'jumlah_bahan'];
}
