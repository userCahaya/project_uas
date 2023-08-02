<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registrasiModel extends Model
{
    use HasFactory;
    protected $table ="registrasi";
    protected $primaryKey ="id_registrasi";

    public function tampil_registrasi(){
        $query = \DB::table('registrasi')->get();
        return $query;
    }
}
