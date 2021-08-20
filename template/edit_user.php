<?php
require '../koneksi.php';

$username = $_POST['username'];
$id_user = $_POST['id_user'];

$database->update("tb_user", [
	    "username" => $username
    ], [
        "id_user" => $id_user
    ]

);

header("location: user.php"); 
?>