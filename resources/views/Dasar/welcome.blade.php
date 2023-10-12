@extends('Dasar.dasar_boostrap')
@section("judul") Main @endsection
@section("isi")
<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-4">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">LAB</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Kelas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Pengajuan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Barang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Tambah Ruang</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  @yield("isi_bawah_nav")
@endsection
