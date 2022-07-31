@extends('masteradmin')
@section('titleadmin')
Toko Roti
@endsection
@section('kontenadmin')

<section id="aboutus" class="section-bg" style="margin-top: 50px;">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h3>Daftar List Supplier</h3>
        </div>

        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <!-- <th scope="col">No</th> -->
                    <th scope="col">Id Supplier</th>
                    <th scope="col">Nama Supplier</th>
                    <th scope="col">Alamat Supplier</th>
                    <th scope="col">No Telp Supplier</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($supplier as $S)
		    <tr>
                <!-- <td></td>	 -->
                <td>{{ $S->id_supplier }}</td>
                <td>{{ $S->nama_supplier }}</td>
                <td>{{ $S->alamat_supplier }}</td>
			    <td>
                <!-- {{ $S->level_user }} -->
                    <?php
                    if($S->no_telp_supplier == null){
                        echo 'Tidak Ada Nomor Telepon';
                    }else{
                        echo $S->no_telp_supplier;
                    }
                    ?>
                </td>
			    <td>
                    <button type="button" class="btn btn-secondary">
                        <a href="/formsupplier/editsupplier/{{ $S->id_supplier }}">Edit</a> 
                    </button>
                    <button type="button" class="btn btn-danger">
                        <a href="/formsupplier/hapussupplier/{{ $S->id_supplier }}">Delete</a> 
                    </button>
			    </td>
		    </tr>
		    @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection