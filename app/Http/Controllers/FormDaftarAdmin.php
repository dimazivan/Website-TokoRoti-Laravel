<?php

namespace App\Http\Controllers;

use App\Models\ModelFormDaftarAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FormDaftarAdmin extends Controller
{
    public function registrasiadmin(){
        return view('FormDaftarUser');
    }

    public function TampilUser()
    {
    	// mengambil data dari table data user
    	$data_user = ModelFormDaftarAdmin::all();
    	return view('/daftarlistuser',['data_user' => $data_user]);
    }

    public function storeregistrasiadmin(Request $request){

        $this->validate($request,[
            'id_user' => 'required',
            'nama_user' => 'required',
            'username' => 'required',
            'kata_sandi' => 'required'
    	]);
 
        ModelFormDaftarAdmin::create([
            'id_user' => $request->id_user,
            'nama_user' => $request->nama_user,
            'username' => $request->username,
            'kata_sandi' => $request->kata_sandi,
            'level_user' => $request->CBLevel_User
        ]);
        // dd($request);
        return redirect('/login');
    }

    public function deluser($id_user){
        // menghapus data user berdasarkan id yang dipilih
        DB::table('data_user')->where('id_user',$id_user)->delete();
        return redirect('/daftarlistuser');
    }

    public function TampilEditUser($id_user){
	    $data_user = DB::table('data_user')->where('id_user',$id_user)->get();
	    return view('FormEditDaftarUser',['data_user' => $data_user]);
    }

    public function updateuser(Request $request){
	// update data 
	DB::table('data_user')->where('id_user',$request->id_user)->update([
		'nama_user' => $request->nama_user,
		'username' => $request->username,
		'kata_sandi' => $request->kata_sandi,
		'level_user' => $request->CBLevel_User
	]);
	return redirect('/daftarlistuser');
    }
}
