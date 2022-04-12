<?php
    include "../../config/koneksi.php";
    $id = $_GET ['id'];
    $sql = "DELETE from tabel_anggota where id_anggota = $id";
    $database->query($sql);
    header('location: ../../beranda.php?page=anggota');
?>