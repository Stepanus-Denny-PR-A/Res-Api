@extends("Dasar.welcome")
@section("isi_bawah_nav")
<div class="album py-5 bg-body-tertiary ">
    <h1 class="h1 text-center mt-5 mb-5">DASHBOARD</h1>
    <div class="container d-flex justify-content-center">
      <div class="row gap-4 row-card-4">
        <div class="card img-fluid" style="width: 15rem">
            <img src="https://cdn-icons-png.flaticon.com/512/2933/2933245.png" class="card-img-top" alt="Gambar PC">
            <div class="card-body">
              <h5 class="card-title">Ruang Lab</h5>
              <p class="card-text">Berisi Data tentang barang di ruang lab</p>
              <a href="#" class="btn btn-primary">Lihat</a>
            </div>
          </div>
          <div class="card" style="width: 15rem;">
            <img src="https://cdn-icons-png.flaticon.com/512/4344/4344926.png" class="card-img-top" alt="Gambar ruang kelas">
            <div class="card-body">
              <h5 class="card-title">Ruang kelas</h5>
              <p class="card-text">Data tentang barang di ruang kelas</p>
              <a href="#" class="btn btn-primary">Lihat</a>
            </div>
          </div>
          <div class="card" style="width: 15rem;">
            <img src="https://cdn.icon-icons.com/icons2/1091/PNG/512/announcement_78371.png" class="card-img-top" alt="Gambar png">
            <div class="card-body">
              <h5 class="card-title">Pemberitahuan</h5>
              <p class="card-text">Berisi tentag pengajuan</p>
              <a href="#" class="btn btn-primary">Lihat</a>
            </div>
          </div>
          <div class="card" style="width: 15rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Lihat</a>
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection
