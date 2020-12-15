<?php
	$namaHost = "localhost";
	$username = "root";
	$password = "";
	$database = "praktikumdb";
	
	$connect = mysqli_connect($namaHost, $username, $password, $database);
	
	if($connect){
		echo "Koneksi dengan MYSQL berhasil <br>";
	}
	else{
		echo "Koneksi dengan MYSQL gagal".mysqli_connect_error();
	}
	
	$sql = "INSERT INTO product(id,product_name,harga)
			VALUES ('1','Pensil',3000)";
			
	if (mysqli_query($connect, $sql)){
		echo "Data berhasil ditambahkan";
	}
	else{
		echo "Data gagal ditambahkan <br>".mysqli_error($connect);
	}
	
	mysqli_close($connect);
		
?>
