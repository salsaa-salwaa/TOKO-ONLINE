<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title></title>
    </head>
<body>

<html lang="en">
<head>
  <title>Toko Online</title>
  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    include "header.php";
    ?>
    <h3>Data Produk Toko Online | <a href = "tambah_produk.php" class = "btn btn-success">Tambah Produk</a></h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA PRODUK</th>
                <th>DESKRIPSI</th>
                <th>HARGA</th>
                <th>FOTO</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_pelanggan=mysqli_query($conn,"select * from pelanggan");
            $no = 0;
            while($data_pelanggan=mysqli_fetch_array($qry_pelanggan)){
            $no++;?>
            <tr>
                <td><?=$no?></td>
                <td><?=$data_pelanggan['nama_pelanggan']?></td> 
                <td><?=$data_pelanggan['alamat']?></td>
                <td><?=$data_pelanggan['telp']?></td> 
                <a href = "hapus_pelanggan.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>" 
                onclick = "return confirm('Apakah anda yakin menghapus data ini?')" 
                class = "btn btn-danger">Hapus</a></td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>