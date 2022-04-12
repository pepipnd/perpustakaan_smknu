<?php
    include "../../config/koneksi.php";
    $id_user = $_GET ['id'];
    $sql = "DELETE from tabel_user where id_user = $id_user";
    $database->query($sql);
    header('location: ../../beranda.php?page=user');
?>