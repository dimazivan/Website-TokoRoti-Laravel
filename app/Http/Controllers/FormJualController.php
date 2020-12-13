<?php

namespace App\Http\Controllers;

use App\Models\ModelPenjualan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Perhitungan;

class FormJualController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function FormBeli(){
        return view('FormBeli');
    }
    public function TotalHarga(Request $databeli){
        $Jumlah_Beli = $databeli->input('Jumlah_Order');
        $Harga = $databeli->input('Harga_Kue');
        $Bayar = $databeli->input('Bayar');
        $Jenis = $databeli->input('CBJenisBayar');
        $Hitung = new Perhitungan();
        echo "Total Harga : Rp.".$Hitung -> Total_Order($Jumlah_Beli, $Harga, $Jenis)."<br>";
        echo "Kembalian Anda : Rp. " .$Hitung -> Kembalian($Jumlah_Beli, $Harga, $Bayar,$Jenis). "";
        echo "Transaksi Anda Sudah Masuk Daftar Transaksi, Silahkan Di Cek ! (~^_^)~";
    }

    // public function storepenjualan(Request $request)
    // {
    // 	$this->validate($request,[
    // 		'Id_Transaksi_Penjualan' => 'required',
    //         'Nama_Pelanggan' => 'required',
    //         'Nama_Produk' => 'required',
    //         'Harga_Produk' => 'required',
    //         'Jumlah_Beli' => 'required',
    //         'Total_Harga_Order' =>'required',
    //         'Bayar_Produk' => 'required'
    // 	]);
 
    //     ModelPenjualan::create([
    // 		'id_transaksi_penjualan' => $request->Id_Transaksi_Penjualan,
    //         'nama_pelanggan' => $request->Nama_Pelanggan,
    //         'nama_produk' => $request->Nama_Produk,
    //         'harga_produk' => $request->Harga_Produk,
    //         'jumlah_beli' => $request->Jumlah_Beli,
    //         'total_harga_order' => $request->Total_Harga_Order,
    //         'catatan_pembeli' => $request->Catatan_Pembeli,
    //         'bayar_produk' => $request->Bayar_Produk,
    //         'status_penjualan' => $request->Status_Penjualan
    //     ]);
    //     dd($request);
    // 	return redirect('/daftartransaksi');
    // }

    public function store(Request $request){

        $Transaksi_Penjualan = new ModelPenjualan();

        $Transaksi_Penjualan->id_transaksi_penjualan = $request->Id_Transaksi_Penjualan;
        $Transaksi_Penjualan->nama_pembeli = $request->Nama_Pembeli;
        $Transaksi_Penjualan->id_produk = $request->Id_Produk;
        $Transaksi_Penjualan->nama_produk = $request->Nama_Produk;
        $Transaksi_Penjualan->harga_produk = $request->Harga_Produk;
        $Transaksi_Penjualan->jumlah_order = $request->Jumlah_Order;
        $Transaksi_Penjualan->total_harga_order = $request->Total_Harga_Order;
        $Transaksi_Penjualan->catatan_pembeli = $request->Catatan_Pembeli;
        $Transaksi_Penjualan->bayar_produk = $request->Bayar_Produk;
        $Transaksi_Penjualan->status_penjualan = 'Proses';
        
        $Transaksi_Penjualan->save();
        return redirect()->route('daftarpenjualan');
    }

}
