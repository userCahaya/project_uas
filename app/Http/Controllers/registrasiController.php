<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registrasiModel;

class registrasiController extends Controller
{
    public function index (){
       // return ("Testing registrasi");
             $data['registrasi'] = registrasiModel::get();
        return view('registrasi/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('registrasi/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('registrasi')
         ->insert([
             'id_registrasi' => $request->id_registrasi,
             'nama'  =>  $request->nama,
             'alamat'  =>  $request->alamat,
             'jenis_kelamin'  =>  $request->jenis_kelamin,
        
             
         ]);
         return redirect('registrasi');
     }
     public function edit($id){
        $data['registrasi'] = registrasiModel::where('id',$id)->first();

        return view('registrasi/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Testing Pr;;oses');
        $query = registrasiModel::where('id',$request->id)
        ->update([
            'id_registrasi' => $request->id_registrasi,
            'nama'  =>  $request->nama,
            'alamat'  =>  $request->alamat,
            'jenis_kelamin'  =>  $request->jenis_kelamin,
       
             ]);
        return redirect('registrasi');
    }

    public function delete ($id){
        $query = \DB::table('registrasi')->where('id',$id)->delete();
        return redirect('registrasi');
    }
}
