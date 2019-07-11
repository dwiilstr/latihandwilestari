<!DOCTYPE html>
<html>
<head>
	<title>UKK</title>
</head>
<body>
	
	<a href="home.php">Lihat Semua Data </a><a href="logout.php">| Logout</a>
 
	<br/><br/>
	<h3>Edit data</h3>
 
	<?php
	include "koneksi.php";
	$id=$_GET['id'];
	$ambil=  mysqli_query($koneksi, "SELECT * FROM data WHERE id ='$id'") or die ("SQL Edit error");
	$data= mysqli_fetch_array($ambil)
	?>
	<form action="" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>"></td>					
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
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];

$sql="UPDATE data SET nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan' WHERE id='$id'";
$query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");

header("location:home.php?pesan=update");
}
?>
