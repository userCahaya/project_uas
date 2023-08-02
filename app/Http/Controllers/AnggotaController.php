<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota_model;

class AnggotaController extends Controller
{
    public function index (){
        // return ("Testing Katalog");
        $myanggota = new Anggota_model();
        $anggota = $myanggota->tampil_anggota();
         
        $data = array('anggota' => $anggota);
        return view('anggota/index', $data);
     }
     public function tambah(){
         // return ('Testing');
         return view('anggota/tambah');
      }
  
      public function tambah_proses(Request $request){
          // return ('Testing Proses');
          $query = \DB::table('anggota')
          ->insert([
            'nama_choirul' => $request->nama_choirul,
            'alamat_choirul'  =>  $request->alamat_choirul,
            'no_hp_choirul'  =>  $request->no_hp_choirul,
              
          ]);
          return redirect('anggota');
      }
      public function edit($id_choirul){
        // return ('Testing');
        $views_master = \DB::table('anggota')->where('id_choirul', $id_choirul)->first();
        //dd($views_master);
        $data = array('views_master_anggota' => $views_master);
        return view('anggota/edit', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('anggota')->where('id_choirul',$request->id_choirul)
         ->update([
            'nama_choirul' => $request->nama_choirul,
            'alamat_choirul'  =>  $request->alamat_choirul,
            'no_hp_choirul'  =>  $request->no_hp_choirul,
              ]);
         return redirect('anggota');
     }
 
     public function delete ($id_choirul){
         $query = \DB::table('anggota')->where('id_choirul',$id_choirul)->delete();
         return redirect('anggota');
     }
 }
 