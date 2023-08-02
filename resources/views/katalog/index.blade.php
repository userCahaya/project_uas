@extends('layout1.main2')
@section('content')

<h4><b>Data Master</b></h4>
<br>
<a href="{{ asset('katalog/tambah')  }}"class="btn btn-primary mb-2">Tambah Data</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>NO</td>
    <td><b>ID KATALOG</td>
    <td><b>NAMA KATALOG</td>
    <td><b>PENERBIT</td>
    <td><b>PENGARANG</td>
    <td><b>AKSI</td>
 </tr>   
<?php 
$no=0;
foreach ($katalog as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id_katalog_choirul }}</td>
    <td>{{ $rows->nama_katalog_choirul }}</td>
    <td>{{ $rows->penerbit_choirul }}</td>
    <td>{{ $rows->pengarang_choirul }}</td>
    <td>
        <a class="btn btn-warning" href="{{ asset('katalog/edit/'.$rows->id_katalog_choirul ) }}">Edit</a>
        <a class="btn btn-danger" href="{{ asset('katalog/delete/'.$rows->id_katalog_choirul ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection