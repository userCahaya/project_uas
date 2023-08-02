@extends('layout1.main2')
@section('content')


<h4><b>Edit Anggota</b></h4>
<br>
<form action="{{ asset('anggota/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id_choirul" value="<?php echo $views_master_anggota->id_choirul ?>">
<div class="mb-3 row">
    <label for="nama_choirul" class="col-sm-2 col-form-label">NAMA ANGGOTA</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_choirul" value="<?php echo $views_master_anggota->nama_choirul ?>" name="nama_choirul">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat_choirul" class="col-sm-2 col-form-label">ALAMAT</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="alamat_choirul" value="<?php echo $views_master_anggota->alamat_choirul ?>" name="alamat_choirul">
    </div>
</div>
<div class="mb-3 row">
    <label for="no_hp_choirul" class="col-sm-2 col-form-label">NO HP</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="no_hp_choirul" value="<?php echo $views_master_anggota->no_hp_choirul ?>" name="no_hp_choirul">
    </div>
</div>
<input type="submit" value="Simpan">
</form> 

@endsection