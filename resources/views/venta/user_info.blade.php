<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/03adc290fd.js" crossorigin="anonymous"></script>

    <title>Halaman Informasi</title>
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
          background-color: grey;
        }
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }

    </style>
  </head>
  <body>


    <!-- tabel informasi -->
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

          <tr>
            <th>Rincian</th>
            <td>
                <a style="font-size:15px;" href="Halaman_PopUp.html">Lihat Detail</a>

            </td>
          </tr>

        </tbody>
      </table>
    <!-- tabel informasi -->



    <!-- button submit -->
    <div class="d-grid gap-2 col-6 mx-auto">
      <button type="submit" class="button"><b>PENGAJUAN</a></b></button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
