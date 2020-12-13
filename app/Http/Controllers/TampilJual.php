<?php

namespace App\Http\Controllers;

use App\Models\ModelPenjualan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class TampilJual extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function TampilJual()
    {
    	// mengambil data dari table daftar transaksi penjualan
    	$transaksi_penjualan = ModelPenjualan::all();

    	// mengirim data jual ke view daftar transaksi
    	return view('/daftartransaksi',['transaksi_penjualan' => $transaksi_penjualan]);

    }


}
