<?php 
require '../koneksi.php';
$id = $_GET['id_fitur'];

$database->delete("tb_fitur", [
	"id_fitur" => $id
    ]
);
 
header("location:data_order.php?pesan=hapus");
?>