<?php 
include "koneksi.php";
$sql="DELETE FROM data WHERE id ='".$_GET['id']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
 
header("location:index.php?pesan=hapus");
?>