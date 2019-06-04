<?php
session_start();
$query = "DELETE FROM siswa 
							WHERE id_siswa ='$_GET[id]'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
$_SESSION['pesan'] = 'Hapus Data Berhasil...';
header('location:siswa.html');

?>

