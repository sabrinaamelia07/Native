<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_perpus");

    //cek koneksi

    if(!$koneksi){
        echo "koneksi database gagal";
    }else{
        echo "koneksi database berhasil";
    }
?>