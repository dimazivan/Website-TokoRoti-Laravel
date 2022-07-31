@extends('masterlogin')
@section('titlelogin')
Toko Roti
@endsection
@section('kontenlogin')

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
                    <th scope="col">Jenis Pembayaran</th>
                    <th scope="col">Biaya Admin</th>
                    <th scope="col">Sub Total Akhir</th>
                    <th scope="col">Tanggal Transaksi</th>
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
                <td>{{ $TJ->jenis_bayar }}</td>
                <td>{{ $TJ->biaya_admin }}</td>
                <td>{{ $TJ->sub_total_akhir }}</td>
                <td>{{ $TJ->created_at }}</td>
			    <!-- <td>
                    <button type="button" class="btn btn-danger"><a href="/order/hapuspenjualan/{{ $TJ->id_transaksi_penjualan }}">Cancel</a> </button>
			    </td> -->
		    </tr>
		    @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection