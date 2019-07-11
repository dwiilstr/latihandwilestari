<html>
	<head><title>Pengolahan Form</title></head>
	<body>
	<FORM ACTION="isidata01.php" METHOD="POST" NAME="input">
		<h2>Isi Data Anda</h2>
	Nama : <br>
	<input type="text" name="nama"><br><br>
	Alamat Email : <br>
	<input type="text" name="email"><br><br>
	Buat Sandi : <br>
	<input type="text" name="sandi"><br><br>
	Tanggal Lahir : <br>
	
<select name="tahun">
<option selected="selected">Tahun</option>
<?php
$now=date('Y');
for ($a=1960;$a<=$now;$a++)
{
     echo "<option value='$a'>$a</option>";
}
echo "</select>";
?>

<select name="tgl">
<option selected="selected">Tanggal</option>
<?php
for($a=1; $a<=31; $a+=1){
    echo"<option value=$a> $a </option>";
}
?>
</select>

<select name="bln">
<option selected="selected">Bulan</option>
<?php
$bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
$jlh_bln=count($bulan);
for($c=0; $c<$jlh_bln; $c+=1){
    echo"<option value=$bulan[$c]> $bulan[$c] </option>";
}
?>
</select>
<br><br>

Jenis Kelamin : <br>
<input type="radio" name="gender" value="Wanita"> Wanita 
<input type="radio" name="gender" value="Pria"> Pria<br><br>
	
Hobi: <br>
	<input type="checkbox" name="hobi" value="Membaca Buku"> Membaca Buku
      <input type="checkbox" name="hobi" value="Menulis"> Menulis
      <input type="checkbox" name="hobi" value="Memancing"> Memancing
<br>

	<input type="submit" name="Input" value="Input">
	</FORM>
	</body>
</html>

<?php
	if (isset($_POST['Input'])) {
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$sandi = $_POST['sandi'];
	$tahun = $_POST['tahun'];
	$tgl = $_POST['tgl'];
	$bln = $_POST['bln'];
	$gender = $_POST['gender'];
	$hobi = $_POST['hobi'];
	echo "Nama          : <b>$nama</b><br>";
	echo "Alamat Email  : <b>$email</b><br>";
	echo "Kata Sandi    : <b>$sandi</b><br>";
	echo "Tanggal Lahir : <b>$tahun, $tgl $bln</b><br>";
	echo "Jenis Kelamin : <b>$gender</b><br>";
	echo "Hobi          : <b>$hobi</b><br>";
	}
	?>
