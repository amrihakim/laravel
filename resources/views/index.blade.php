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
  <title>List Kamar Hotel</title>
</head>
<body>
  <div class="container-fluid py-5">
    <div class="d-flex justify-content-end me-auto">
    </div>
    <div class="row gy-5">
      <div class="col-md-8 mx-auto">
        <h1 class="text-center mb-5">Kamar Hotel</h1>
         <a href="/kamar/tambah" class="btn btn-primary my-2">Tambahkan Data Kamar</a>
        <div class="d-flex justify-content-end me-auto">
       </div>
       <div class="table-responsive">
        <table class="table table-borderless">
          <thead class="table-dark text-center">
            <tr>
              <td>ID Kamar</td>
              <td>Jenis Kamar</td>
              <td>Deskripsi</td>
              <td>Harga</td>
              <td>Jumlah</td>
              <td>Aksi</td>
            </tr>
          </thead>
          <tbody class="text-center">
          @foreach($kamar as $a)
             <tr>
              <th>{{ $a->kamar_id }}</th>
              <td>{{ $a->kamar_jenis}}</td>
              <td>{{ $a->kamar_deskripsi }}</td>
              <td>{{ $a->kamar_harga }} </td>
              <td>{{ $a->kamar_jumlah }} </td>
              <td class="d-flex flex-row justify-content-around" width="120px">
               <a href="/kamar/edit/{{ $a->kamar_id }}" class="btn btn-sm btn-success mx-1">Edit</a> <a href="/kamar/hapus/{{ $a->kamar_id }}" class="btn btn-sm btn-danger">Hapus</a>
             </td>
           </tr>
         @endforeach
       </tbody>
     </table>
   </div>
 </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>