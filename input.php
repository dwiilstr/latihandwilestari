<!DOCTYPE html>
<html>
<head>
	<title>UKK</title>
</head>
<body>
	
	<a href="home.php">Lihat Semua Data </a><a href="logout.php">| Logout</a>
 
	<br/><br/>
	<h3>Input data baru</h3>
	<form action="" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>					
			</tr>	
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>

<?php 
include 'koneksi.php';
if($_POST){
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
 
$sql="INSERT INTO data VALUES ('','$nama','$alamat','$pekerjaan')";
$query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
 
header("location:home.php?pesan=input");
}
?>