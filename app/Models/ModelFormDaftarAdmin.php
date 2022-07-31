<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFormDaftarAdmin extends Model{
    protected $table = "data_user";

    protected $fillable = [
    'id_user',
    'nama_user',
    'username',
    'kata_sandi',
    'level_user'];
}
