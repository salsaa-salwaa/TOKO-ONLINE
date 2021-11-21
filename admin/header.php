<?php
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
    <div class="container p-2">
    <div class="logo"><a href=''>Sayur.Co</a></div>
                <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                            <a class="nav-link" href="tampil_produk.php">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tampil_pelanggan.php">Pelanggan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tampil_petugas.php">Petugas</a>
                        </li>
                </ul>
                    <div class="dropdown">
                        <a href="#" class="d-block text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <?=$_SESSION['nama_petugas']?>
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="./logout.php">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </nav>

</body>
</html>