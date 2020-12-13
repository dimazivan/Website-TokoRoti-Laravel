<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function menu(){
        return view('MenuView');
    }

    public function variant(){
        return view('VariantMenu');
    }

    public function daftartransaksi(){
        return view('DaftarTransaksi');
    }

    public function about(){
        return view('About');
    }

    public function login(){
        return view('Login');
    }

    public function registrasi(){
        return view('FormRegistrasi');
    }
}
