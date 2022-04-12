<?php 
    include "../../config/koneksi.php";

   
    $id_pegawai      = $_POST['id_pegawai'];
    $username        = $_POST['username'];
    $password        = $_POST['password'];
    $level           = $_POST['penerlevelbit'];


    $sql = "INSERT INTO tabel_user
    (
        id_pegawai,
        username,
        password,
        level
    ) 
    VALUES 
    (
        '".$id_pegawai."',
        '".$username."',
        '".$password."',
        '".$level."'
    )";
    
    $database->query($sql);


    header('Location: ../../beranda.php?page=user');

?>


    