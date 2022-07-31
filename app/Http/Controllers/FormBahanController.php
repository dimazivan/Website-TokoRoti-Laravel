<?php

namespace App\Http\Controllers;

use App\Models\ModelFormBahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FormBahanController extends Controller{
    public function formbahan(){
        return view('FormBahan');
    }

    // public function FormBeliBahan(){

    // }

    public function TampilBahan(){
    	// mengambil data dari table data bahan
    	$bahan = ModelFormBahan::all();
    	return view('/daftarlistbahan',['bahan' => $bahan]);
    }

    public function storebahan(Request $request){
        $this->validate($request,[
            'id_bahan' => 'required',
            'nama_bahan' => 'required',
            'harga_bahan' => 'required',
            'jumlah_bahan' => 'required'
        ]);

        ModelFormBahan::create([
            'id_bahan' => $request->id_bahan,
            'nama_bahan' => $request->nama_bahan,
            'harga_bahan' => $request->harga_bahan,
            'jumlah_bahan' => $request->jumlah_bahan
        ]);
        return redirect('/daftarlistbahan');
    }

    public function delbahan($id_bahan){
        // menghapus data bahan berdasarkan id yang dipilih
        DB::table('bahan')->where('id_bahan',$id_bahan)->delete();
        return redirect('/daftarlistbahan');
    }

    public function tampileditbahan($id_bahan){
	    $bahan = DB::table('bahan')->where('id_bahan',$id_bahan)->get();
	    return view('FormEditBahan',['bahan' => $bahan]);
    }

    public function updatebahan(Request $request){
	// update data 
	DB::table('bahan')->where('id_bahan',$request->id_bahan)->update([
		'nama_bahan' => $request->nama_bahan,
		'harga_bahan' => $request->harga_bahan,
		'jumlah_bahan' => $request->jumlah_bahan
	]);
	return redirect('/daftarlistbahan');
    }

}
