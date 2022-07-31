@extends('masteradmin')
@section('titleadmin')
Toko Roti
@endsection
@section('kontenadmin')

<section id="aboutus" class="section-bg" style="margin-top: 50px;">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h3>Daftar List Produk</h3>
        </div>

        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <!-- <th scope="col">No</th> -->
                    <th scope="col">Id Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga Produk</th>
                    <th scope="col">Jumlah Produk</th>
                    <th scope="col">Deskripsi Produk</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($produk as $P)
		    <tr>
                <!-- <td></td>	 -->
                <td>{{ $P->id_produk }}</td>
                <td>{{ $P->nama_produk }}</td>
                <td>Rp.{{ $P->harga_produk }}</td>
			    <td>
                <!-- {{ $P->level_user }} -->
                    <?php
                    if($P->jumlah_produk == 0){
                        echo 'Stock Produk Sedang Kosong';
                    }else{
                        echo $P->jumlah_produk;
                    }
                    ?>
                </td>
                <td>{{ $P-> deskripsi_produk }}</td>
			    <td>
                    <button type="button" class="btn btn-secondary">
                        <a href="/formproduk/editproduk/{{ $P->id_produk }}">Edit</a> 
                    </button>
                    <button type="button" class="btn btn-danger">
                        <a href="/formproduk/hapusproduk/{{ $P->id_produk }}">Delete</a> 
                    </button>
			    </td>
		    </tr>
		    @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection