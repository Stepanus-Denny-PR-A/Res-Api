@extends('Dasar.dasar_boostrap')

@section('isi_boostrap')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="https://belajar.usd.ac.id/pluginfile.php/1/theme_moove/logo/1693193463/logo_usd.png"
                class="img-fluid img-thumbnail" style="width: 10rem">
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-4">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Lab">Lab</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Kelas">Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/pengajuan">Pengajuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Barang?nama=Barang">Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Tambah_Barang">Tambah Ruang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('isi')
    <footer>
    <div class="card bg-dark fixed-bottom">
        <div class="card-body text-light text-center">
            mencintai kebenaran, memperjuangkan keadilan, menghargai keberagaman, dan menjunjung tinggi keluhuran martabat
            manusia
        </div>
    </div>
</footer>
@endsection
