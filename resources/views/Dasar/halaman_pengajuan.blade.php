<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/03adc290fd.js" crossorigin="anonymous"></script>

    <title>Admin Tambah Barang</title>
    <style>
        body{
            background-color: gainsboro;
        }
        .button{
          font-size: 1rem;
          margin-top: 1.8rem;
          padding: 10px 0;
          border-radius: 10px;
          border: 2px solid black;
          width: 90%;
          color: black;
          cursor: pointer;
          background-color: gray;
        }
    </style>
  </head>
  <body>
    <!-- navbar -->
  <!-- akhir navbar -->


  <h1 style="font-size:20px;" align="center"><b>Pengajuan Barang</b></h1>

    <!-- tabel pengajuan-->
    <form>
        <div class="row mb-3">
            <label for="inputTanggal" class="col-sm-2 col-form-label">Tanggal Pengajuan</label>
            <div class="col-sm-5">
              <input type="tanggal_pengajuan" class="form-control" id="inputTanggal">
            </div>
        </div>

        <div class="row mb-3">
          <label for="inputNamaUser" class="col-sm-2 col-form-label">Nama User</label>
          <div class="col-sm-5">
            <input type="nama_user" class="form-control" id="inputNamaUser">
          </div>
        </div>

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
            <label for="inputRuang" class="col-sm-2 col-form-label">Ruang</label>
            <div class="col-sm-5">
              <input type="ruang" class="form-control" id="inputRuang">
            </div>
        </div>

        <div class="row mb-3">
          <label for="inputKeterangan" class="col-sm-2 col-form-label">Keterangan</label>
          <div class="col-sm-5">
            <input type="keterangan" class="form-control" id="inputKeterangan">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputFoto" class="col-sm-2 col-form-label">Foto</label>
          <div class="col-sm-5">

          </div>
        </div>

        <!-- button submit -->
        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="button" ><b>SUBMIT</b></button>
        </div>

    </form>

    <!-- akhir tabel pengajuan-->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
