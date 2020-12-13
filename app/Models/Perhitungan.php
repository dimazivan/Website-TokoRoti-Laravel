<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perhitungan extends Model
{
    public function Total_Order($Jumlah_Beli, $Harga, $Jenis)
    {
        if ($Jenis == "Transfer") {
            $total = $Jumlah_Beli * $Harga;
            if($total > 200000){
                return $Jumlah_Beli * $Harga;
            }else{
                $diskon = $total * 0.1;
                return $total + $diskon;
            }
        } else if ($Jenis == "Virtual") {
            return ($Jumlah_Beli * $Harga + 10000);
        } else {
            return ($Jumlah_Beli * $Harga);
        }
    }

    public function Kembalian($Jumlah_Beli, $Harga, $Bayar, $Jenis)
    {
        if ($Jenis == "Transfer") {
            $total = $Jumlah_Beli * $Harga;
            if($total > 200000){
                return $Bayar - $Jumlah_Beli * $Harga;
            }else{
                $diskon = $total * 0.1;
                return $Bayar - ($total + $diskon);
            }
        } else if ($Jenis == "Virtual") {
            return $Bayar - ($Jumlah_Beli * $Harga + 10000);
        } else {
            return $Bayar - ($Jumlah_Beli * $Harga);
        }
    }
}
