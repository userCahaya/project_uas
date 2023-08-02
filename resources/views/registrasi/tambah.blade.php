@extends('layout1.main2')
@section('content')

<div class="card">
    <div class="card-body">


<h4><b>Tambah registrasi</b></h4>
<br>
<form action="{{ url('registrasi/tambah_proses') }}" method="POST">
@csrf

<div class="mb-3 row">
    <label for="id_registrasi" class="col-sm-2 col-form-label">Id_registrasi</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="id_registrasi" name="id_registrasi">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">NAMA </label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama" name="nama">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">ALAMAT </label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="alamat" name="alamat">
    </div>
</div>
<div class="mb-3 row">
    <label for="jenis_kelamin" class="col-sm-2 col-form-label">JENIS KELAMIN</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin">
    </div>
</div>
<input type="submit" value="Simpan" class="btn btn-primary float-right">
</form> 
</div>
</div>
@endsection