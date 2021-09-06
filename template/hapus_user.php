<?php 
require '../koneksi.php';
$id = $_GET['id'];

$database->delete("tb_user", [
	"id_user" => $id
    ]
);
setFlash('berhasil', 'dihapus', 'danger');

header("location:user.php?pesan=hapus");
?>