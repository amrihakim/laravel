<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    html,
    body {
      font-family:
      'Poppins', sans-serif;
      ?>;
    }
  </style>
  <title>Input Data Kamar</title>
</head>
<body>
  <div class="container-fluid py-5">
    <div class="row gy-5">
      <div class="col-md-6 mx-auto">
       <div class="p-3 border bg-light">
        <h1 class="text-center mb-5">Tambah Data Kamar</h1>
        <form action="/kamar/store" method="post">
        @csrf
         <div class="mb-3">
          <input type="hidden" class="form-control" name="kamar_id">
        </div>
        <div class="mb-3">
          <label class="form-label">Nama Jenis Kamar</label>
          <input type="text" class="form-control" name="kamar_jenis">
        </div>
        <div class="mb-3">
          <label class="form-label">Deskripsi Jenis Kamar</label>
          <textarea class="form-control" name="kamar_deskripsi" rows="3"></textarea>
        </div>
         <div class="mb-3">
          <label class="form-label">Harga Kamar</label>
          <input type="number" class="form-control" name="kamar_harga">
        </div>
         <div class="mb-3">
          <label class="form-label">Jumlah</label>
          <input type="number" class="form-control" name="kamar_jumlah">
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
        
        

      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>