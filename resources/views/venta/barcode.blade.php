@extends("Dasar.navbar")
@section('judul')
    Barcode
@endsection
@section("isi")
    <!-- tempat show barcode-->
    <h1 style="text-align:center;"><b>QR Code</b></h1>
    <div class="d-grid gap-2 col-6 mx-auto">
        <img src="https://socs.binus.ac.id/files/2018/12/aswin-1.jpg" class="mx-auto" alt="...">
        <button type="submit" class="btn btn-primary rounded-pill" >Print</button>
    </div>
@endsection
