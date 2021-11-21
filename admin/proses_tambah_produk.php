<?php
if($_POST){
    $nama_produk = $_POST ['nama_produk'];
    $deskripsi_produk = $_POST ['deskripsi'];
    $harga = $_POST ['harga'];
    $foto = $_FILES ['file']['name'];
	$ukuran	= $_FILES ['file']['size'];
	$file_tmp = $_FILES ['file']['tmp_name'];

    if(empty($nama_produk)) {
        echo "<script>alert('nama produk tidak boleh kosong!');location.href='tambah_produk.php';</script>";
    } elseif (empty($deskripsi_produk)) {
        echo "<script>alert('deskripsi produk tidak boleh kosong!');location.href='tambah_produk.php';</script>";
    } elseif (empty($harga)) {
        echo "<script>alert('harga produk tidak boleh kosong!');location.href='tambah_produk.php';</script>";
    } else {
        include "koneksi.php";
        move_uploaded_file($file_tmp, 'foto_produk/'.$foto);
        $insert=mysqli_query($conn,"insert into produk (nama_produk, deskripsi, harga, foto) value ('".$nama_produk."','".$deskripsi_produk."','".$harga."','".$foto."')") or die(mysqli_error($conn));

        if ($insert) {
            echo "<script>alert('Sukses menambahkan produk');location.href='tampil_produk.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan produk');location.href='tambah_produk.php';</script>";
        }
    }
}
?>