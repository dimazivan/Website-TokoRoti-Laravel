@extends('master')
@section('title')
Toko Roti
@endsection
@section('konten')

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
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($transaksi_penjualan as $TJ)
		    <tr>
                <!-- <td></td>	 -->
                <td>{{ $TJ->id_transaksi_penjualan }}</td>
			    <td>{{ $TJ->nama_pembeli }}</td>
			    <td>{{ $TJ->nama_produk }}</td>
                <td>{{ $TJ->harga_produk }}</td>
			    <td>{{ $TJ->jumlah_order }}</td>
			    <td>{{ $TJ->total_harga_order }}</td>
			    <td>{{ $TJ->catatan_pembeli }}</td>
                <td>{{ $TJ->bayar_produk }}</td>
                <td>{{ $TJ->status_penjualan }}</td>
			    <td>
                    <button type="button" class="btn btn-danger">Cancel</button>
			    </td>
		    </tr>
		    @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection