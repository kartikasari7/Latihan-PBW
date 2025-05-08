<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" contet="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
        <div>
            <label for="id_matkul">ID Matkul</label>
            <input type="number" name="id_matkul" id="id_matkul">
        </div>
        <br>
        <div>
            <label for="nama_matkul">Nama Matkul</label>
            <input type="text" name="nama_matkul" nama="nama_matkul">
        </div>
        <br>
        <div>
            <label for="jumlah_sks">Jumlah SKS</label>
            <input type="number" name="jumlah_sks" nama="jumlah_sks">
        </div>
        <br>
        <button type="submit" name="submit">TAMBAH DATA</button>  
        <button><a href="index.php">KEMBALI</a></button> 
    </form>   
</body>
</html>