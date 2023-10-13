@extends('Dasar.dasar_boostrap')
@section("judul") Main @endsection
@section("isi")
<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <img src="https://belajar.usd.ac.id/pluginfile.php/1/theme_moove/logo/1693193463/logo_usd.png" class="img-fluid img-thumbnail" style="width: 10rem">
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
