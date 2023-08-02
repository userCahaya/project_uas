@extends('layout1.main2')
@section('content')

<div class="card">
    <div class="card-body">

<h4><b>Data Master</b></h4>
<br>
<a href="{{ url('registrasi/tambah')  }}" class="btn btn-primary mb-2">Tambah Data</a>
<table class="table table-striped" width="100%">
 <tr class="table table-striped table-primary">
    <td><b>NO</td>
    <td><b>ID registrasi</td>
    <td><b>NAMA</td>
    <td><b>ALAMAT</td>
    <td><b>JENIS KELAMIN</td>
    <td><b>AKSI</td>
 </tr>   
<?php 
$no=0;
foreach ($registrasi as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id_registrasi}}</td>
    <td>{{ $rows->nama}}</td>
    <td>{{ $rows->alamat}}</td>
    <td>{{ $rows->jenis_kelamins}}</td>
    <td>
        <div class="btn-group">

            <a  class="btn btn-warning" href="{{ url('registrasi/edit/'.$rows->id_registrasi) }}">Edit</a>
            <a  class="btn btn-danger" href="{{ url('registrasi/delete/'.$rows->id_registrasi) }}">Del</a>
        </div>
        </td>
</tr>
<?php 
}
?>
</table>
        
</div>
</div>
@endsection