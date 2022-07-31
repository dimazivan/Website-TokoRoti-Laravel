<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelPembelian;
use App\Models\ModelPenjualan;

class FormKeuntungan extends Controller{
    public function TampilKeuntungan(){
    	return view('Keuntungan');
    }
}
