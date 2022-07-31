@extends('masteradmin')
@section('titleadmin')
Toko Roti
@endsection
@section('kontenadmin')

<?php
use Illuminate\Support\Facades\DB;
?>

<section id="aboutus" class="section-bg" style="margin-top: 50px;">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h3>Daftar Transaksi</h3>
        </div>

        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <!-- <th scope="col">No</th> -->
                    <th scope="col">Id Order</th>
                    <th scope="col">Nama Customer</th>
                    <th scope="col">Nama Kue</th>
                    <th scope="col">Harga Produk</th>
                    <th scope="col">Jumlah Order</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Catatan Pembeli</th>
                    <th scope="col">Jumlah Bayar</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tanggal Transaksi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($transaksi_penjualan as $TJ)
		    <tr>
                <!-- <td></td>	 -->
                <td>{{ $TJ->id_transaksi_penjualan }}</td>
			    <td>{{ $TJ->nama_pembeli }}</td>
                <td>
                <?php
                $namakue = DB::table('produk')->where('id_produk', $TJ->nama_produk)->value('nama_produk');
                if($namakue != null){
                    echo $namakue;
                }else{
                    echo $TJ->nama_produk;
                }
                ?>
                </td>
                <td>Rp.{{ $TJ->harga_produk }}</td>
			    <td>{{ $TJ->jumlah_order }}</td>
			    <td>Rp.{{ $TJ->total_harga_order }}</td>
			    <td>
                <?php
                if($TJ->catatan_pembeli == null){
                    echo 'Tidak Ada Catatan Pembeli';
                }else{
                    echo $TJ->catatan_pembeli;
                }
                ?>
                </td>
                <td>Rp.{{ $TJ->bayar_produk }}</td>
                <td>{{ $TJ->status_penjualan }}</td>
                <td>{{ $TJ->created_at }}</td>
                <td>
                    <button type="button" class="btn btn-success"><a href="/daftartransaksipenjualan/proses/{{ $TJ->id_transaksi_penjualan }}">Proses</a> </button>
                    <button type="button" class="btn btn-success"><a href="/daftartransaksipenjualan/tolak/{{ $TJ->id_transaksi_penjualan }}">Ditolak</a> </button>
			    <!-- </td>
			    <td> -->
                    <button type="button" class="btn btn-danger"><a href="/order/hapuspenjualan/{{ $TJ->id_transaksi_penjualan }}">Cancel</a> </button>
			    </td>
		    </tr>
		    @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection