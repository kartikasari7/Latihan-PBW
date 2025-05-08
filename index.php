<?php
require "koneksi.php";

$sql = "SELECT * FROM tb_matkul";

$result = mysqli_query($koneksi, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Matkul</title>
</head>
<body>
    <a href="tambah.php">TAMBAH DATA</a>
    <table border=2>
    <thead>
    <tr>
        <th>ID Matkul</th>
        <th>Nama Matkul</th>
        <th>SKS</th>
        <th>AKSI</th>
    </tr>
    </thead> 
    <tbody>
    <?php foreach ($result as $value): ?>
    <tr>
        <td><?php echo $value["id_matkul"]?></td>
        <td><?php echo $value["nama_matkul"]?></td>
        <td><?php echo $value["jumlah_sks"]?></td>
        <td><a href="edit.php?id_matkul=<?php echo $value["id_matkul"]?>">Ubah</a>
        <a href="hapus.php?id_matkul=<?php echo $value["id_matkul"]?>" onclick='return confirm("Apakah anda yakin ingin menghapus data?")'>Hapus</a></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>