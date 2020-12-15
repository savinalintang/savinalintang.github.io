<!DOCTYPE html>
<html>
	<head>
		<style>
		.error(color: #FF0000;)
		</style>
	</head>
	<body>
		<?php
			//ambil nilai variabel eror
			if(isset($_GET['eror'])){
				$error=$_GET['eror'];
			}
			else{
				$error="";
			}
			
			//siapkan pesan kesalahan
			$pesan="";
			if($error=="variabel_belum_diset"){
				$pesan="Anda harus mengakses halaman ini dari form_3.php";
			}
			else if ($error=="nama_kosong"){
				$pesan="Nama harus diisi";
			}
			else if ($error=="nama_invalid"){
				$pesan="Nama diisi huruf dan spasi";
			}
			else if ($error=="email_kosong"){
				$pesan="Email harus diisi";
			}
			if ($error=="email_invalid"){
				$pesan="Email tidak sesuai";
			}
			
			//sisipkan isian form jika terjadi kesalahan
			if(isset($_GET["nama"]) AND isset($_GET["email"])){
				$nama=$_GET['nama'];
				$email=$_GET['email'];
				$komentar=$_GET['komentar'];
			}
			else
			{
				$nama="";
				$email="";
				$komentar="";
			}
		?>
		
		<span class = "error"><?php echo $pesan;?></span>
		
		<table>
			<form method="get" action="prosesForm_3.php">
			<tr>
				<td>Nama: </td>
				<td> <input type="text" name="nama" value="<?php echo $nama;?>">
			</tr>
			<tr>
				<td> Email: </td>
				<td> <input type = "text" name="email" value="<?php echo $email?>"> </td>
			</tr>
			<tr>
				<td> Komentar: </td>
				<td> <textarea name="komentar" rows = "5" cols="40"><?php echo $komentar;?>
				</textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="kirim" value="Kirim"> </td>
			</tr>
		</form>
		</table>
		</form>
	</body>
</html>