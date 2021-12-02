<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database MySQL</title>
</head>

<body>
    <h1>Koneksi database dengan mysql_fetch_assoc</h1>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "db_saya") or die("Koneksi gagal");
    $hasil = mysqli_query($conn, "SELECT * FROM liga");
    while ($row = mysqli_fetch_assoc($hasil)) {
        echo "Liga " . $row["negara"];
        echo " mempunyai " . $row["champion"];
        echo " wakil di liga champion <br>";
    }
    ?>
</body>

</html>