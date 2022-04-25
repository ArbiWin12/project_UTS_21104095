<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert ke tabel</title>
</head>
<body>

    <form method="POST" action="insertdataform.php">
        PLAT<br>
        <input type="text" name=txPLAT><br><br>
        NAMA<br>
        <input type="text" name=txNAMA><br><br>
        MEREK<br>
        <select name="txMEREK">
            <option value="HONDA"> HONDA </option>
            <option value="YAMAHA"> YAMAHA </option>
            <option value="SUZUKI"> SUZUKI </option>
            <option value="TESLA"> TESLA </option>
    </select><br><br>
        JENIS<br>
    <input type="text" name="txJENIS">
       <br><br>
        HARGA<br>
    <input type="text" name="txHARGA">
    <br><br>
    <button type="submit"> simpan data </button>
    </form>

</body>
</html>