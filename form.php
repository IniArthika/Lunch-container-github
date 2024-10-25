<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    
    <form action="data.php" enctype="multipart/form-data" method="POST">
        <!-- input nama : single line text input -->
        Nama : <input type="text" name="nama" value=""></br>
        NISN : <input type="number" name="nisn" id=""></br>
        NIS  : <input type="text" name="nis" id=""></br>
        Jurusan : 
        <select name="jurusan" id="">
            <option value="0">-- pilih jurusan --</option>
            <option value="1">PPLG</option>
            <option value="2">DKV</option>
            <option value="3">BDP</option>
            <option value="4">AKL</option>
            <option value="5">TJKT</option>
            <option value="6">MPLB</option>
        </select></br>
        
    </form>


</body>
</html>