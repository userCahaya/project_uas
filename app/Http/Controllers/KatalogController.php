<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog_model;

class KatalogController extends Controller
{
    public function index (){
       // return ("Testing Katalog");
       $mykatalog = new Katalog_model();
        $katalog = $mykatalog->tampil_katalog();
        
        $data = array('katalog' => $katalog);
        return view('katalog/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('katalog/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('katalog')
         ->insert([
           'nama_katalog_choirul' => $request->nama_katalog_choirul,
           'penerbit_choirul'  =>  $request->penerbit_choirul,
           'pengarang_choirul'  =>  $request->pengarang_choirul,
             
         ]);
         return redirect('katalog');
     }
     public function edit($id_katalog_choirul){
        $data['katalog'] = Katalog_Model::where('id_katalog_choirul',$id_katalog_choirul)->first();

        return view('katalog/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Testing Pr;;oses');
        $query = Katalog_Model::where('id_katalog_choirul',$request->id_katalog_choirul)
        ->update([
                'nama_katalog_choirul' => $request->nama_katalog_choirul,
                'penerbit_choirul'  =>  $request->penerbit_choirul,
                'pengarang_choirul'  =>  $request->pengarang_choirul,
       
             ]);
        return redirect('katalog');
    }

    public function delete ($id_katalog_choirul){
        $query = \DB::table('katalog')->where('id_katalog_choirul',$id_katalog_choirul)->delete();
        return redirect('katalog');
    }
}
