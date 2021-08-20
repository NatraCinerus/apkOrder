<?php 
require '../koneksi.php';
$id = $_GET['id'];
$database->delete("tb_order", [
	"id_order" => $id
    ]
);

$database->delete("tb_fitur", [
	"id_order" => $id
    ]
);

$database->delete("tb_cif", [
	"id_order" => $id
    ]
);
 
header("location:data_order.php?pesan=hapus");
?>