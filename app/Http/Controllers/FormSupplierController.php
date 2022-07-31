<?php

namespace App\Http\Controllers;

use App\Models\ModelFormSupplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FormSupplierController extends Controller{
    public function formsupplier(){
        return view('FormSupplier');
    }

    public function TampilSupplier(){
    	// mengambil data dari table data supplier
    	$supplier = ModelFormSupplier::all();
    	return view('/daftarlistsupplier',['supplier' => $supplier]);
    }

    public function storesupplier(Request $request){
        $this->validate($request,[
            'id_supplier' => 'required',
            'nama_supplier' => 'required',
            'alamat_supplier' => 'required',
            'no_telp_supplier' => 'required'
        ]);

        ModelFormSupplier::create([
            'id_supplier' => $request->id_supplier,
            'nama_supplier' => $request->nama_supplier,
            'alamat_supplier' => $request->alamat_supplier,
            'no_telp_supplier' => $request->no_telp_supplier
        ]);
        return redirect('/daftarlistsupplier');
    }

    public function delsupplier($id_supplier){
        // menghapus data supplier berdasarkan id yang dipilih
        DB::table('supplier')->where('id_supplier',$id_supplier)->delete();
        return redirect('/daftarlistsupplier');
    }

    public function TampilEditSupplier($id_supplier){
	    $supplier = DB::table('supplier')->where('id_supplier',$id_supplier)->get();
	    return view('FormEditSupplier',['supplier' => $supplier]);
    }

    public function updatesupplier(Request $request){
	// update data 
	DB::table('supplier')->where('id_supplier',$request->id_supplier)->update([
		'nama_supplier' => $request->nama_supplier,
		'alamat_supplier' => $request->alamat_supplier,
		'no_telp_supplier' => $request->no_telp_supplier
	]);
	return redirect('/daftarlistsupplier');
    }
}
