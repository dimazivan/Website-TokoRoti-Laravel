<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\ModelFormDaftar;
use Illuminate\Http\Request;

class FormDaftarUser extends Controller{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function registrasi(){
        return view('FormRegistrasi');
    }

    public function storeregistrasi(Request $request){

        $this->validate($request,[
            'id_user' => 'required',
            'nama_user' => 'required',
            'username' => 'required',
            'kata_sandi' => 'required'
    	]);
 
        ModelFormDaftar::create([
            'id_user' => $request->id_user,
            'nama_user' => $request->nama_user,
            'username' => $request->username,
            'kata_sandi' => $request->kata_sandi,
            'level_user' => '1'
        ]);
        // dd($request);
        return redirect('/login');
    }

    // public function storeregistrasi(Request $request){

    //     $Daftar_User = new ModelFormDaftar();
    
    //     $Daftar_User->id_user = $request->id_user;
    //     $Daftar_User->nama_user = $request->nama_user;
    //     $Daftar_User->username = $request->username;
    //     $Daftar_User->kata_sandi = $request->password;
    //     $Daftar_User->level_user = '1';
            
    //     $Daftar_User->save();
    //     return redirect('/login');
    // }
    
}
