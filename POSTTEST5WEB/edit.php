<?php
require "config.php";
if(isset($_GET['id'])){
    $query = mysqli_query($db,"SELECT * FROM laptop WHERE id=$_GET[id]");
    $result = mysqli_fetch_assoc($query);
    $nama_laptop = $result['nama_laptop'];
    $harga= $result['harga'];
    $jumlah= $result['jumlah'];
}

if(isset($_POST['submit'])){
    $query = mysqli_query($db,"UPDATE laptop SET nama_laptop='$_POST[nama_laptop]',harga='$_POST[harga]',jumlah='$_POST[jumlah]' WHERE id=$_GET[id]");
    if($query){
        header("Location:admin.php");
    } else {
        echo "Update Gagal";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Laptop</title>
    <link rel="stylesheet" href="stylecrud.css">
</head>
<body>
        <h1 class="judul">PIP STORE</h1>
    
    <div class="form-class">
        <h3>Edit Data Laptop</h3><br><br>
        <form action="" method="post">
            <label for="">laptop</label><br>
            <input type="text" name="nama_laptop" class="form-text" value='<?=$nama_laptop?>'><br>
            
            <label for="">harga</label><br>
            <input type="text" name="harga" class="form-text" value='<?=$harga?>'><br>

            <label for="">jumlah</label><br>
            <input type="text" name="jumlah" class="form-text" value='<?=$jumlah?>'><br>
            
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        </form>
    </div>

</body>
</html>