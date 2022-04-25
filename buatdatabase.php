<?php
include_once("koneksi.php");
    $sql = "CREATE DATABASE TOKOMOTOR;";
    $hsl = mysqli_query($cnn,$sql);
    if($hsl){
        echo "Pembuatan database berhasil";
    }
    else{
        echo "Terjadi kesalahan";
    }
    mysqli_close($cnn);