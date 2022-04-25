<?php
if(isset($_POST['txPLAT'])){
     include_once("koneksi.php");
     $plat =$_POST['txPLAT'];
     $nama = $_POST['txNAMA'];
     $merek = $_POST['txMEREK'];
     $jenis = $_POST["txJENIS"];
     $harga = $_POST["txHARGA"];

     $sql = "INSERT INTO datamotor(PLAT, NAMA, MEREK, JENIS, HARGA) Values('$plat','$nama','$merek','$jenis','$harga');";
     $hsl = mysqli_query($cnn, $sql);
     if($hsl){
         echo "Insert Data ke tabel sukses<br>";
     }else{
        echo "Insert data gagal<br>";
     }
    }else{
         header("location : insertdatatoko.php");
     }