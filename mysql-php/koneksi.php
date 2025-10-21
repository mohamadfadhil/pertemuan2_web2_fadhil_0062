<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi</title>
</head>
<body>
    <?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "dbphp";
    $koneksi = mysql_connect($host, $user, $pass, $db);
    if (koneksi == false) {
        die("Koneksi Gagal");
    }
//input data ke database
$nama  = "Lucas";
$pesan = "Terimakasih";

$sql = "insert into tbphp(nama, pesan) values ('$nama', '$pesan')";
mysqli_query($koneksi, $sql);
?>


</body>
</html>