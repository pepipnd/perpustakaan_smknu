<?php
    include "../../config/koneksi.php";
    
    $id = $_GET ['id'];
    $sql = "DELETE from tabel_pegawai where id_pegawai = $id";
    $database->query($sql);
    header('location: ../../beranda.php?page=pegawai');
?>