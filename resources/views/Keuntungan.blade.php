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
            <h3>Keuntungan</h3>
        </div>

        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <!-- <th scope="col">No</th> -->
                    <th scope="col">Nilai Keuntungan</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
		    <tr>
                <td>
                <?PHP
                $pembelian = DB::table('transaksi_pembelian')->sum('total_harga_beli');
                $penjualan = DB::table('transaksi_penjualan')->sum('total_harga_order');
                $result = $penjualan - $pembelian;
                echo 'Rp.'.$result;
                ?>
                </td>
                <td>
                <?PHP
                if($result < 0){
                    echo 'Rugi';
                }else if($result == 0){
                    echo 'Impas';
                }else{
                    echo 'Untung';
                }
                ?>
                </td> 
		    </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection