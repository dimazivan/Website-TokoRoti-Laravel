<?php

namespace App\Http\Controllers;

use App\Models\ModelFormProduk;
use App\Models\ModelPenjualan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Perhitungan;

class FormJualController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function TampilJual()
    {
    	// mengambil data dari table daftar transaksi penjualan
    	$transaksi_penjualan = ModelPenjualan::all();

    	// mengirim data jual ke view daftar transaksi
    	return view('/daftartransaksi',['transaksi_penjualan' => $transaksi_penjualan]);

    }

    public function TampilJualLogin()
    {
    	// mengambil data dari table daftar transaksi penjualan
    	$transaksi_penjualan = ModelPenjualan::all();

    	// mengirim data jual ke view daftar transaksi
    	return view('/daftartransaksilogin',['transaksi_penjualan' => $transaksi_penjualan]);

    }

    

    public function TampilJualAdmin()
    {
    	// mengambil data dari table daftar transaksi penjualan
    	$transaksi_penjualan = ModelPenjualan::all();
    	// mengirim data jual ke view daftar transaksi
    	return view('/daftartransaksiadmin',['transaksi_penjualan' => $transaksi_penjualan]);

    }

    public function FormBeli(){
        $produk = ModelFormProduk::all();
        return view('FormBeli', ['produk' => $produk]);
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

    public function storepenjualan(Request $request)
    {
    	$this->validate($request,[
    		'Id_Transaksi_Penjualan' => 'required',
            'Nama_Pembeli' => 'required',
            'Id_Produk' => 'Required',
            'CBNama_Kue' => 'required',
            'Harga_Produk' => 'required',
            'Jumlah_Order' => 'required',
            'Total_Harga_Order' =>'required',
            'Bayar_Produk' => 'required'
    	]);
 
        ModelPenjualan::create([
    		'id_transaksi_penjualan' => $request->Id_Transaksi_Penjualan,
            'nama_pembeli' => $request->Nama_Pembeli,
            'id_produk' => $request ->Id_Produk,
            'nama_produk' => $request->CBNama_Kue,
            'harga_produk' => $request->Harga_Produk,
            'jumlah_order' => $request->Jumlah_Order,
            'total_harga_order' => $request->Total_Harga_Order,
            'catatan_pembeli' => $request->Catatan_Pembeli,
            'bayar_produk' => $request->Bayar_Produk,
            'status_penjualan' => 'Proses',
            'jenis_bayar' => $request->CBJenisBayar,
            'biaya_admin' => $request->Biaya_Admin,
            'sub_total_akhir' => $request->Total_Harga_Akhir
        ]);

        DB::table('produk')->where('id_produk', $request->Id_Produk)->update([
            'jumlah_produk' => $request->Jumlah_Akhir
        ]);
        
    	return redirect('/daftartransaksilogin');
    }

    public function proses($id_penjualan){
        DB::table('transaksi_penjualan')->where('id_transaksi_penjualan',$id_penjualan)->update([
            'status_penjualan' => 'Selesai'
        ]);
        return redirect('/daftartransaksipenjualan');
    }

    public function tolak($id_penjualan){
        DB::table('transaksi_penjualan')->where('id_transaksi_penjualan',$id_penjualan)->update([
            'status_penjualan' => 'Ditolak'
        ]);

        $jumlahorder = DB::table('transaksi_penjualan')->where('id_transaksi_penjualan',$id_penjualan)->value('jumlah_order');
        $idkue = DB::table('transaksi_penjualan')->where('id_transaksi_penjualan',$id_penjualan)->value('nama_produk');
        $stocksekarang = DB::table('produk')->where('id_produk',$idkue)->value('jumlah_produk');
        $result = $stocksekarang + $jumlahorder;
        
        DB::table('produk')->where('id_produk',$idkue)->update([
            'jumlah_produk' => $result
        ]);

        return redirect('/daftartransaksipenjualan');
    }

    public function delpenjualan($id_penjualan){
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('transaksi_penjualan')->where('id_transaksi_penjualan',$id_penjualan)->delete();
        return redirect('/daftartransaksipenjualan');
    }

}
