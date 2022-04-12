<?php 
    include "../../config/koneksi.php";

    $id         = $_POST['id'];
    $isbn          = $_POST['isbn'];
    $nama_buku     = $_POST['nama_buku'];
    $penulis       = $_POST['penulis'];
    $penerbit      = $_POST['penerbit'];
    $tahun_terbit  = $_POST['tahun_terbit'];


    $sql = "update tabel_buku set

  
    isbn           = '".$isbn."',
    nama_buku      = '".$nama_buku."',
    penulis        = '".$penulis."',
    penerbit       = '".$penerbit."',
    tahun_terbit   = '".$tahun_terbit."'

        where id = '".$id."'
        ";
    
    $database->query($sql);


    header('Location: ../../beranda.php?page=buku');

?>

