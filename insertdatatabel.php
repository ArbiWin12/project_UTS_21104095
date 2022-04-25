<?php
include_once("koneksi.php");
     $plat ="";
     $nama = "";
     $merek = "";
     $jenis = "";
     $harga = "";

     $sql = "INSERT INTO datamotor(PLAT, NAMA, MEREK, JENIS, HARGA) Values('$plat','$nama','$merek','$jenis','$harga')";
     $hsl = mysqli_query($cnn, $sql);
     if($hsl){
         echo "Insert Data ke tabel sukses<br>";
     }else{
        echo "Insert data gagal<br>";
     }