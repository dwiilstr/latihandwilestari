<!DOCTYPE html>
<html>
<head>
	<title>Project UKK</title>
</head>
<body>
<?php if(isset($_GET['error']) ) {?>
    <div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
<?php }?>

<form action="" method="post">
	<h2>FORM LOGIN</h2>
	<table>
		<tr><td>Username </td><td> : </td><td> <input type="text" name="username"></td></tr>
		<tr><td>Password </td><td> : </td><td> <input type="password" name="password"></td></tr>
		<br>
	</table>
		<input type="submit" name="login" value="Login">
	
</form>

</body>
</html>

<?php

include "koneksi.php";
if($_POST){
$username=$_POST['username'];
$password=$_POST['password'];

if (!empty($username) && !empty($password)) {
    $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $result = mysqli_num_rows($sql);
    if ($result) {
        header("location:home.php");
    } else {
        echo "username dan password salah";
    }
} else {
    echo "Email dan Password anda kosong, silahkan diisi.";
}
}
?>

