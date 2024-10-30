<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Product</title>
</head>
<body>
    <form action="data.php" enctype="multipart/form-data" method="POST" >
        <!-- input nama : single line text input  -->
        
        Nama : <input type="text" name="nama" value="" /><br/>
        Deskripsi : <textarea name="deskripsi" id="" cols="30" rows="10"></textarea>
        <br/>
        Harga : <input type="number" name="harga" value="" /><br/>
        Kategori_id : 
        <select name="kategori_id" id="">
            <option value="0">--Pilih Kategori Id--</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select> <br/>
        Foto : <input type="file" name="foto" id=""><br/>
        
        <input type="submit" value="Input Data" name="inputData"> 
        <!-- <button type="submit">Inputkan</button> -->


    </form>
    
</body>
</html>