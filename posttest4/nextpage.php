<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style2.css" />
		<title>OUTPUT</title>
	</head>
        <body back>
        <h1>PESANAN ANDA DI PROSES</h1>
        
            <div>    
            <form action="nextpage.php" class="otput" method="get">
                <br>
                <?php
                    if(isset($_GET['input'])){
                        $nama = $_GET['nama'];
                        $nomor = $_GET['nomor'];
                        $Alamat = $_GET['Alamat'];
                        $email = $_GET['email'];
                        $jenislaptop = $_GET['jenislaptop'];
                        $jumlah = $_GET['jumlah'];
                        $date = $_GET['date'];
            
                        echo " Nama : $nama</br>";
                        echo " Nomor : $nomor</br>";
                        echo " Alamat     : $Alamat</br>";
                        echo " Email   : $email</br>";
                        echo " jenislaptop : $jenislaptop</br>";
                        echo " Jumlah Laptop    : $jumlah</br>";
                        echo " Tanggal Pemesanan : $date</br>";
                        echo "</br>";
                    }
                ?>
                </br>
            </form>
            </div>
        </body>