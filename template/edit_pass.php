<?php
require '../koneksi.php';

$password = $_POST['password'];
$id_user = $_POST['id_user'];

$database->update("tb_user", [
	    "password" => md5($password)
    ], [
        "id_user" => $id_user
    ]

);

header("location: user.php"); 
?>