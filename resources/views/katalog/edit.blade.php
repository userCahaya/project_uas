@extends('layout1.main2')
@section('content')


<h4><b>Edit Data Transaksi</b></h1>
<br>
<form action="{{url('katalog/edit_proses')}}" method="POST">
@csrf
<input type="hidden" name="id_katalog_choirul" value="{{$katalog->id_katalog_choirul}}">
<div class="mb-3 row">
    <label for="nama_katalog_choirul" class="col-sm-2 col-form-label">NAMA KATALOG</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_katalog_choirul" name="nama_katalog_choirul" value="<?php echo $katalog->nama_katalog_choirul ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="penerbit_choirul" class="col-sm-2 col-form-label">NAMA PENERBIT</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="penerbit_choirul" name="penerbit_choirul" value="<?php echo $katalog->penerbit_choirul ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="pengarang_choirul" class="col-sm-2 col-form-label">NAMA PENGARANG</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="pengarang_choirul" name="pengarang_choirul" value="<?php echo $katalog->pengarang_choirul ?>">

    </div>
</div>

<input type="submit" value="Simpan">
</form>

@endsection