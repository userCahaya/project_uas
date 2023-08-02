@extends('layout1.main2')
@section('content')

<h4><b>Daftar Anggota Perpustakaan</b></h4>
<br>
<a href="{{ asset('anggota/tambah')  }}"class="btn btn-primary mb-2">Tambah Data</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>NO</td>
    <td><b>ID ANGGOTA</td>
    <td><b>NAMA ANGGOTA</td>
    <td><b>ALAMAT</td>
    <td><b>NO HP</td>
    <td><b>AKSI</td>
 </tr>   
<?php
$no=0;
foreach ($anggota as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id_choirul }}</td>
    <td>{{ $rows->nama_choirul }}</td>
    <td>{{ $rows->alamat_choirul }}</td>
    <td>{{ $rows->no_hp_choirul }}</td>
    <td>
        <a class="btn btn-warning" href="{{ asset('anggota/edit/'.$rows->id_choirul ) }}">Edit</a>

        <a class="btn btn-danger" href="{{ asset('anggota/delete/'.$rows->id_choirul ) }}">delete</a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection