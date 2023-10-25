@extends("Dasar.navbar")
@section('judul')
    Tambah Barang
@endsection
@section("isi")
    <h1 style="font-size:25px;"><b>TAMBAH BARANG</b></h1>

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

        <!-- button submit -->
        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="btn btn-primary rounded-pill" >Tambah Barang</button>
          <!-- <button class="btn btn-primary" type="button">Tambah Barang</button> -->
        </div>

    </form>

@endsection
