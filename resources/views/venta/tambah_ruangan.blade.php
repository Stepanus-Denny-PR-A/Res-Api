
@extends("Dasar.navbar")
@section('judul')
    Tambah Ruangan
@endsection
@section('cssya')
<style>
    body{
        background-color: white;
    }
    .button{
      font-size: 1rem;
      margin-top: 1.8rem;
      padding: 10px 0;
      border-radius: 20px;
      border: 2px solid black;
      width: 90%;
      color: white;
      cursor: pointer;
      background-color: blue;
    }
</style>
@endsection
@section("isi")
<h1><b>Tambah Ruang</b></h1>
    <form>
        <div class="row mb-3">
            <label for="inputNamaRuang" class="col-sm-2 col-form-label">Nama Ruang</label>
            <div class="col-sm-5">
              <input type="nama_ruang" class="form-control" id="inputNamaRuang">
            </div>
          </div>

        <div class="row mb-3">
          <label for="inputJenis" class="col-sm-2 col-form-label">Jenis Ruang</label>
          <div class="col-sm-5">
            <input type="jenis_ruang" class="form-control" id="inputJenis">
          </div>
        </div>

        <!-- button submit -->
        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="button" >Tambah Ruang</button>
        </div>

    </form>
@endsection
