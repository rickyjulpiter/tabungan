<?php 
$username=$_POST['username']; $password=$_POST['password']; if($username=="admin" && $password=="admin") { 
echo header('location:tabungan.html');
 }
 else { 
echo "<script>alert('Username atau Password salah!');history.go(-1);</script>";
 } 
?>