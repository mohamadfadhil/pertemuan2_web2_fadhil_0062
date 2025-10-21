<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpan</title>
</head>
<body>
     <?php
     include 'koneksi.php';

     $nama = $_POST['nama'];
     $pesan = $_POST['pesan'];


     //input data ke database
     $sql = "insert into tbphp(nama, pesan) values ('$nama', '$pesan')";
     mysqli_query($koneksi, $sql);
     ?>
     Terimakasih <? echo $nama; ?>, pesan anda :<?php echo $pesan ;?> <br>
     <a href = "index.php" >kembali ke halaman utama</a>
    
</form>
<hr>
<h2>Daftar Tamu</h2>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nanam</th>
        <th>Pesan</th>
</tr>
<?php
    include 'koneksi.php';
    $nomor = 1;
    $sql = "select * from tbphp order by id asc";
    $data = mysqli_query($koneksi, $sql);
    while ($row = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['pesan']; ?></td>
    </tr>
    <?php
    $nomor++;
    }
    ?>
    </table>
</body>
</html>