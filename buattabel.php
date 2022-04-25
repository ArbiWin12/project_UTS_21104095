<?php

    include_once("koneksi.php");
    $sql = "CREATE TABLE datamotor(
        PLAT Varchar(8) PRIMARY KEY,
        NAMA Varchar(50),
        MEREK Varchar(50),
        JENIS Varchar(20),
        HARGA Varchar(10)
    );";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "pembuatan tabel berhasil";
    } else{
        echo "pembuatan tabel gagal";
    }