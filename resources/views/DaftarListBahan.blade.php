@extends('masteradmin')
@section('titleadmin')
Toko Roti
@endsection
@section('kontenadmin')

<section id="aboutus" class="section-bg" style="margin-top: 50px;">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h3>Daftar List Bahan</h3>
        </div>

        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <!-- <th scope="col">No</th> -->
                    <th scope="col">Id Bahan</th>
                    <th scope="col">Nama Bahan</th>
                    <th scope="col">Harga Bahan</th>
                    <th scope="col">Jumlah Bahan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($bahan as $B)
		    <tr>
                <!-- <td></td>	 -->
                <td>{{ $B->id_bahan }}</td>
                <td>{{ $B->nama_bahan }}</td>
                <td>Rp.{{ $B->harga_bahan }}</td>
			    <td>
                    <?php
                    if($B->jumlah_bahan == 0){
                        echo 'Stock Kosong';
                    }else{
                        echo $B->jumlah_bahan;
                    }
                    ?>
                </td>
			    <td>
                    <button type="button" class="btn btn-secondary">
                        <a href="/formbahan/belibahan/{{ $B->id_bahan }}">Beli</a> 
                    </button>
                    <button type="button" class="btn btn-secondary">
                        <a href="/formbahan/editbahan/{{ $B->id_bahan }}">Edit</a> 
                    </button>
                    <button type="button" class="btn btn-danger">
                        <a href="/formbahan/hapusbahan/{{ $B->id_bahan }}">Delete</a> 
                    </button>
			    </td>
		    </tr>
		    @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection