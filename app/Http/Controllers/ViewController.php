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

    public function menulogin(){
        return view('MenuViewLogin');
    }

    public function variantlogin(){
        return view('VariantMenuLogin');
    }

    public function daftartransaksilogin(){
        return view('DaftarTransaksi');
    }

    public function aboutlogin(){
        return view('AboutLogin');
    }

    // public function registrasi(){
    //     return view('FormRegistrasi');
    // }
}
