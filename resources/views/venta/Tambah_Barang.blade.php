@extends("Dasar.navbar")
@section('judul')
    Tambah Barang
@endsection
@section("isi")
<h1 style="font-size:25px;"><b>TAMBAH BARANG</b></h1>
<form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
</form>

<!-- tabel tambah barang-->
<form>
    <div class="row mb-3">
        <label for="inputNamaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
        <div class="col-sm-5">
          <input type="nama_barang" class="form-control" id="inputNamaBarang">
        </div>
      </div>

    <div class="row mb-3">
      <label for="inputMerk" class="col-sm-2 col-form-label">Merk-Type</label>
      <div class="col-sm-5">
        <input type="merk_type" class="form-control" id="inputMerk">
      </div>
    </div>

    <div class="row mb-3">
      <label for="inputKategori" class="col-sm-2 col-form-label">Kategori Barang</label>
      <div class="col-sm-5">
        <input type="input_kategori" class="form-control" id="inputKategori">
      </div>
    </div>

    <div class="row mb-3">
        <label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-5">
          <input type="status" class="form-control" id="inputStatus">
        </div>
      </div>

    <div class="row mb-3">
      <label for="inputHargaBeli" class="col-sm-2 col-form-label">Harga Beli</label>
      <div class="col-sm-5">
        <input type="harga_beli" class="form-control" id="inputHargaBeli">
      </div>
    </div>

    <div class="row mb-3">
        <label for="inputTanggalBeli" class="col-sm-2 col-form-label">Tanggal Beli</label>
        <div class="col-sm-5">
          <input type="tanggal_beli" class="form-control" id="inputTanggalBeli">
        </div>
    </div>

    <div class="row mb-3">
      <label for="inputTanggalRegis" class="col-sm-2 col-form-label">Tanggal Registrasi</label>
      <div class="col-sm-5">
        <input type="tanggal_regis" class="form-control" id="inputTanggalRegis">
      </div>
    </div>

    <div class="row mb-3">
      <label for="inputRuang" class="col-sm-2 col-form-label">Lokasi Ruangan</label>
      <div class="col-sm-5">
        <input type="input_ruang" class="form-control" id="inputRuang">
      </div>
    </div>

    <div class="row mb-3">
      <label for="inputPJ" class="col-sm-2 col-form-label">Penanggung Jawab</label>
      <div class="col-sm-5">
        <input type="input_pj" class="form-control" id="inputPJ">
      </div>
    </div>

    <!-- button submit -->
    <div class="d-grid gap-2 col-6 mx-auto">
      <button type="submit" class="btn btn-success" >Tambah Barang</button>
      <!-- <button class="btn btn-primary" type="button">Tambah Barang</button> -->
    </div>

</form>

<!-- akhir tabel tambah barang-->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    </form>

@endsection
