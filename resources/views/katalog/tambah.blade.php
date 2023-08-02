@extends('layout1.main2')
@section('content')


<h4><b>Tambah Katalog</b></h4>
<br>
<form action="{{ asset('katalog/tambah_proses') }}" method="POST">
@csrf

<div class="mb-3 row">
    <label for="nama_katalog_choirul" class="col-sm-2 col-form-label">Nama Katalog</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_katalog_choirul" name="nama_katalog_choirul">
    </div>
</div>
<div class="mb-3 row">
    <label for="penerbit_choirul" class="col-sm-2 col-form-label">Penerbit</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="penerbit_choirul" name="penerbit_choirul">
    </div>
</div>
<div class="mb-3 row">
    <label for="pengarang_choirul" class="col-sm-2 col-form-label">Pengarang</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="pengarang_choirul" name="pengarang_choirul">
    </div>
</div>
<input type="submit" value="Simpan">
</form> 

@endsection