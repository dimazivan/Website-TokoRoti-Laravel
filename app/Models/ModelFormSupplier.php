<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFormSupplier extends Model{
    
    protected $table = "supplier";

    protected $fillable = [
    'id_supplier',
    'nama_supplier',
    'alamat_supplier',
    'no_telp_supplier'];
}
