@extends('masteradmin')
@section('titleadmin')
Toko Roti
@endsection
@section('kontenadmin')

<section id="aboutus" class="section-bg" style="margin-top: 50px;">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h3>Daftar Transaksi Pembelian</h3>
        </div>

        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <!-- <th scope="col">No</th> -->
                    <th scope="col">Id Transaksi Pembelian</th>
                    <th scope="col">Nama Supplier</th>
                    <th scope="col">Id Bahan</th>
                    <th scope="col">Nama Bahan</th>
                    <th scope="col">Harga Bahan</th>
                    <th scope="col">Jumlah Beli</th>
                    <th scope="col">Total Harga Beli</th>
                    <th scope="col">Tanggal Transaksi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($transaksi_pembelian as $TP)
		    <tr>
                <!-- <td></td>	 -->
                <td>{{ $TP->id_transaksi_pembelian }}</td>
                <td>{{ $TP->nama_supplier }}</td>
                <td>{{ $TP->id_bahan }}</td>
			    <td>{{ $TP->nama_bahan }}</td>
                <td>{{ $TP->harga_bahan }}</td>
			    <td>{{ $TP->jumlah_beli }}</td>
			    <td>{{ $TP->total_harga_beli }}</td>
                <th>{{ $TP->created_at }}</th>
			    <td>
                    <button type="button" class="btn btn-danger">
                        <a href="/orderbahan/hapuspembelian/{{ $TP->id_transaksi_pembelian }}">Cancel</a> </button>
			    </td>
		    </tr>
		    @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection