
@extends("Dasar.navbar")
@section('judul')
    Barcode
@endsection
@section("isi")
    <!-- tabel informasi -->
    <h1 style="font-size:25px;"><b>PENGAJUAN</b></h1>
    <h1 style="font-size:25px;" align="center"><b>ID Barang</b></h1>
    <table class="table">
        <colgroup>
            <col span="2" style="background-color: gray">
        </colgroup>
        <tbody>
          <tr>
            <th>Nama Barang</th>
            <td></td>
          </tr>

          <tr>
            <th>Merk-Type</th>
            <td></td>
          </tr>

          <tr>
            <th>Fitur</th>
            <td></td>
          </tr>

          <tr>
            <th>Ruang</th>
            <td></td>
          </tr>

          <tr>
            <th>Next Action</th>
            <td></td>
          </tr>

          <tr>
            <th>Status</th>
            <td></td>
          </tr>

        </tbody>
      </table>
    <!-- tabel informasi -->

    <!-- Detail Pembelian -->
    <h1 style="font-size:25px;" align="center"><b>Detail Pembelian</b></h1>
    <table class="table">
      <colgroup>
          <col span="2" style="background-color: gray">
      </colgroup>
      <tbody>
        <tr>
          <th>Tanggal</th>
          <td></td>
        </tr>

        <tr>
          <th>Lokasi</th>
          <td></td>
        </tr>

        <tr>
          <th>Harga</th>
          <td></td>
        </tr>

        <tr>
          <th>Nama Pembeli</th>
          <td></td>
        </tr>
      </tbody>
    </table>

    <h1 style="font-size:25px;" align="center"><b>Foto Barang</b></h1>


    <div class="container">
      <div class="box" ></div>
    </div>




    <!-- button submit -->
    <div class="d-grid gap-2 col-6 mx-auto">
      <button type="submit" class="button" >Terima</button>
      <button type="submit" class="button" >Tolak</button>
    </div>
@endsection
