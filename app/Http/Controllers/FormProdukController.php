<?php

namespace App\Http\Controllers;

use App\Models\ModelFormProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FormProdukController extends Controller{
    public function formproduk(){
        return view('FormProduk');
    }

    public function TampilProduk(){
    	// mengambil data dari table data produk
    	$produk = ModelFormProduk::all();
    	return view('/daftarlistproduk',['produk' => $produk]);
    }

    public function storeproduk(Request $request){
        $this->validate($request,[
            'id_produk' => 'required',
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'jumlah_produk' => 'required',
            'deskripsi_produk' => 'required'
        ]);

        ModelFormProduk::create([
            'id_produk' => $request->id_produk,
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'jumlah_produk' => $request->jumlah_produk,
            'deskripsi_produk' => $request->deskripsi_produk
        ]);
        return redirect('/daftarlistproduk');
    }

    public function delproduk($id_produk){
        // menghapus data produk berdasarkan id yang dipilih
        DB::table('produk')->where('id_produk',$id_produk)->delete();
        return redirect('/daftarlistproduk');
    }

    public function TampilEditProduk($id_produk){
	    $produk = DB::table('produk')->where('id_produk',$id_produk)->get();
	    return view('FormEditProduk',['produk' => $produk]);
    }

    public function updateproduk(Request $request){
	// update data 
	DB::table('produk')->where('id_produk',$request->id_produk)->update([
		'nama_produk' => $request->nama_produk,
		'harga_produk' => $request->harga_produk,
        'jumlah_produk' => $request->jumlah_produk,
        'deskripsi_produk' => $request->deskripsi_produk
	]);
	return redirect('/daftarlistproduk');
    }
}
