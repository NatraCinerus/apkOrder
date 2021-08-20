<?php
require '../koneksi.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$data = $database->get("tb_user", ["username"], [
    "username" => $username,
    "password" => md5($password)
]);

if( ! empty($data)){ 
    $_SESSION['username'] = $data['username'];
    
    setcookie("message","delete",time()-1);
    
    header("location: data_order.php"); 
  }else{ 
    setcookie("message", "Maaf, Username atau Password salah", time()+3600);
    
    header("location: login.php"); 
  }

?>