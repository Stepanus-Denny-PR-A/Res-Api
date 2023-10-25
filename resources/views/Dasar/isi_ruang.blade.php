@extends('Dasar.navbar')
@section('isi')
<div class="container">
    <div class="container mt-4">
        <h2><?= $_GET['nama']?></h2>
        <a href="/Tambah_Barang" type="button" class="btn btn-primary">Tambah Barang</a>
    <table class="table table-bordered mt-4">
        <thead class="table-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Status</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           <th scope="row">1</th>
            <td>Meja</td>
            <td>Bagus</td>
            <td><a href="#" class="btn btn-info btn-sm items-center">Edit</a> <a href="/Barcode" class="btn btn-sm btn-info">QR Code</a></td>
          </tr>
          <tr>
            <th scope="row">2</th>
             <td>Kursi</td>
             <td>Bagus</td>
             <td><a class="btn btn-info btn-sm items-center">Edit</a> <a href="/Barcode" class="btn btn-sm btn-info">QR Code</a></td>
           </tr>
        </tbody>
      </table>
</div>
@endsection
