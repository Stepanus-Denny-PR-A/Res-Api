@extends("Dasar.navbar")
@section('judul')
    Pengajuan
@endsection
@section('cssya')
<style>
    body{
        background-color: white;
    }
    .button {
        background-color: blue;
        border-radius: 20px;
    }
    .flex-container {
    display: flex;
    background-color: white;
    }

    .flex-container > div {
    background-color: lightgray;
    margin: 10px;
    padding: 20px;
    font-size: 30px;
    border-radius: 20px;
    }

</style>
@endsection
@section("isi")
    <!-- navbar -->
  <!-- akhir navbar -->

    <!-- tempat pengajuan -->
    <h1 style="font-size:25px;"><b>PENGAJUAN</b></h1>

    <!-- tempat box pengajuan -->
    <div class="flex-container">
        <div>Laboratorium Basis Data C
            <a style="font-size:15px;" href="/pengajuan_isi">Rincian</a>
            <input type="checkbox" id="" name="" value="">
        </div>

    </div>
@endsection
