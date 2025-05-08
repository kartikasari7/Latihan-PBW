<?php
require "koneksi.php";

if(isset($_GET['id_matkul'])) {
    $idMatkul = $_GET['id_matkul'];
    $sql = "SELECT * FROM tb_matkul WHERE id_matkul='$idMatkul'";
    $result = mysqli_query($koneksi,$sql);

    $data = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="update.php" method="post">
<div>
    <label for="id_matkul">ID Matkul</label>
    <input type="number" name="id_matkul" id="id_matkul" value="<?php echo $data['id_matkul']?>">
</div>
<div>
            <button type="submit" name="submit">Simpan Perubahan</button>
        </div>
    </form>
</body>
</html>