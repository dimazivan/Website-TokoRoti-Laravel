<?php

namespace App\Http\Controllers;

use App\Models\ModelFormBahan;
use App\Models\ModelFormSupplier;
use App\Models\ModelPembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FormBeliController extends Controller
{
    public function TampilBeli()
    {
        // mengambil data dari table daftar transaksi Pembelian
        $transaksi_pembelian = ModelPembelian::all();

        // mengirim data jual ke view daftar transaksi
        return view('/daftartransaksipembelian', ['transaksi_pembelian' => $transaksi_pembelian]);
    }

    public function formbelibahan($id_bahan)
    {
        $bahan = DB::table('bahan')->where('id_bahan', $id_bahan)->get();
        $supplier = ModelFormSupplier::all();
        return view('FormBeliBahan', ['bahan' => $bahan],['supplier'=>$supplier]);
    }

    public function storepembelian(Request $request)
    {
        // update data

        $this->validate($request, [
            'Id_Transaksi_Pembelian' => 'required',
            'CBNama_Supplier' => 'required',
            'Id_Bahan' => 'required',
            'Nama_Bahan' => 'required',
            'Harga_Bahan' => 'required',
            'Jumlah_Beli' => 'required',
            'Total_Harga_Beli' => 'required',
        ]);

        ModelPembelian::create([
            'id_transaksi_pembelian' => $request->Id_Transaksi_Pembelian,
            'nama_supplier' => $request->CBNama_Supplier,
            'id_bahan' => $request->Id_Bahan,
            'nama_bahan' => $request->Nama_Bahan,
            'harga_bahan' => $request->Harga_Bahan,
            'jumlah_beli' => $request->Jumlah_Beli,
            'total_harga_beli' => $request->Total_Harga_Beli
        ]);

        DB::table('bahan')->where('id_bahan', $request->Id_Bahan)->update([
            'jumlah_bahan' => $request->Jumlah_Akhir
        ]);

        return redirect('/daftartransaksipembelian');
    }

    public function delpembelian($id_pembelian)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('transaksi_pembelian')->where('id_transaksi_pembelian', $id_pembelian)->delete();
        return redirect('/daftartransaksipembelian');
    }
}
