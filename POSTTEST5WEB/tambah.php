<?php
    require "config.php";

    if(isset($_POST['submit'])){
        $nama_laptop = $_POST['nama_laptop'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
  
        $query = mysqli_query($db,"INSERT INTO laptop (nama_laptop,harga,jumlah) VALUES ('$nama_laptop','$harga','$jumlah')");
        if($query){
            header("Location:admin.php");
        } else {
            echo "Add Error";
        }
    }
?>