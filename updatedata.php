<?php

include_once("koneksi.php");
$nama ="";
$plat = "";
$merek ="";
$jenis ="";
$harga ="";

$sql = "UPDATE datamotor SET NAMA='yoru' WHERE PLAT='005';";

$hsl = mysqli_query($cnn, $sql);

if($hsl){
    echo "Pengubahan data suskes<br>";
}else{
    echo "Pengubahan Gagal<br>";
}
mysqli_close($cnn);