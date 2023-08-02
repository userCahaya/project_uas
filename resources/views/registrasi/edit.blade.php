@extends('layout1.main2')
@section('content')

<div class="card">
    <div class="card-body">

<h4><b>Edit Data Transaksi</b></h1>
<br>
<form action="{{url('registrasi/edit_proses')}}" method="POST">
@csrf
<input type="hidden" name="id_registrasi" value="{{$registrasi->id_registrasi}}">
<div class="mb-3 row">
    <label for="id_registrasi" class="col-sm-2 col-form-label">id_registrasi</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="id_registrasi" value="{{$registrasi->id_registrasi}}" name="id_registrasi">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">NAMA </label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama" value="{{$registrasi->nama}}" name="nama">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">ALAMAT</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="alamat" value="{{$registrasi->alamat}}" name="alamat">
    </div>
</div>
<div class="mb-3 row">
    <label for="jenis_kelamin" class="col-sm-2 col-form-label">JENIS KELAMIN</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="jenis_kelamin" value="{{$registrasi->jenis_kelamin}}" name="jenis_kelamin">
    </div>
</div>
<input type="submit" value="Update" class="btn btn-primary float-right">

</form>
</div>
</div>
@endsection