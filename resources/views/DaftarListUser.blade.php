@extends('masteradmin')
@section('titleadmin')
Toko Roti
@endsection
@section('kontenadmin')

<section id="aboutus" class="section-bg" style="margin-top: 50px;">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h3>Daftar List User</h3>
        </div>

        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <!-- <th scope="col">No</th> -->
                    <th scope="col">Id User</th>
                    <th scope="col">Nama User</th>
                    <th scope="col">Username</th>
                    <th scope="col">Level User</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data_user as $DU)
		    <tr>
                <!-- <td></td>	 -->
                <td>{{ $DU->id_user }}</td>
                <td>{{ $DU->nama_user }}</td>
                <td>{{ $DU->username }}</td>
			    <td>
                <!-- {{ $DU->level_user }} -->
                    <?php
                    if($DU->level_user == 0){
                        echo 'Admin';
                    }else{
                        echo 'Customer';
                    }
                    ?>
                </td>
			    <td>
                    <button type="button" class="btn btn-secondary">
                        <a href="/formuser/edituser/{{ $DU->id_user }}">Edit</a> 
                    </button>
                    <button type="button" class="btn btn-danger">
                        <a href="/formuser/hapususer/{{ $DU->id_user }}">Delete</a> 
                    </button>
			    </td>
		    </tr>
		    @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection