<?php 
require '../koneksi.php';
$id = $_GET['id'];

$database->delete("tb_user", [
	"id_user" => $id
    ]
);
 
header("location:user.php?pesan=hapus");
?>