<?php
require '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$database->insert("tb_user", [
	"username" => $username,
	"password" => md5($password)
]);
setFlash('berhasil', 'ditambahkan', 'success');
header("location: user.php"); 
?>