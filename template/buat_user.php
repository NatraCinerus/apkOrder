<?php
require '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$database->insert("tb_user", [
	"username" => $username,
	"password" => md5($password)
]);

header("location: user.php"); 
?>