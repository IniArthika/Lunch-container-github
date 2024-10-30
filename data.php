<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <?php
    $nama = $_POST ['nama'];
    $deskripsi = $_POST ['deskripsi'];
    $harga = $_POST ['harga'];
    $kategori_id = $_POST ['kategori_id'];
    $foto = $_POST ['foto'];

    echo "<p>nama $nama</p>" ;
    echo "<p>deskripsi $deskripsi</p>" ;
    echo "<p>harga $harga</p>" ;
    echo "<p>kategori_id $kategori_id</p>" ;
    echo "<p>foto $foto</p>" ;
    ?>
   
    
</body>
</html>