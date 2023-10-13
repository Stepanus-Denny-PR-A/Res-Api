@extends("Dasar.navbar")
@section("isi_bawah_nav")
<div class="album py-5 bg-body-tertiary ">
    <h1 class="h1 text-center mt-5 mb-5">DASHBOARD</h1>
    <div class="container d-flex justify-content-center">
      <div class="row gap-2 row-card-5">
        <div class="card img-fluid" style="width: 10rem">
            <img src="https://cdn-icons-png.flaticon.com/512/2933/2933245.png" class="card-img-top" alt="Gambar PC">
            <div class="card-body">
              <h5 class="card-title">Ruang Lab</h5>
              <p class="card-text">Berisi Data tentang barang di ruang lab</p>
              <a href="#" class="btn btn-primary">Lihat</a>
            </div>
          </div>
          <div class="card" style="width: 10rem;">
            <img src="https://cdn-icons-png.flaticon.com/512/4344/4344926.png" class="card-img-top" alt="Gambar ruang kelas">
            <div class="card-body">
              <h5 class="card-title">Ruang kelas</h5>
              <p class="card-text">Data tentang barang di ruang kelas</p>
              <a href="#" class="btn btn-primary">Lihat</a>
            </div>
          </div>
          <div class="card" style="width: 10rem;">
            <img src="https://cdn.icon-icons.com/icons2/1091/PNG/512/announcement_78371.png" class="card-img-top" alt="Gambar png">
            <div class="card-body">
              <h5 class="card-title">Pemberitahuan</h5>
              <p class="card-text">Berisi tentag pengajuan barang</p>
              <a href="#" class="btn btn-primary">Lihat</a>
            </div>
          </div>
          <div class="card" style="width: 10rem;">
            <img src="https://cdn-icons-png.flaticon.com/512/2982/2982674.png" class="card-img-top" alt="Foto barang">
            <div class="card-body">
              <h5 class="card-title">Barang</h5>
              <p class="card-text">Berisi semua data barang yang ada di inventaris</p>
              <a href="#" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        <div class="card" style="width: 10rem;">
          <img src="https://cdn0.iconfinder.com/data/icons/ui-16px-perfect-megapack-line/16/82_Add-512.png" class="card-img-top" alt="foto tambah">
          <div class="card-body">
            <h5 class="card-title">Tambah ruangan</h5>
            <p class="card-text">menu untuk menambah ruangan</p>
            <a href="#" class="btn btn-primary">Lihat</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
