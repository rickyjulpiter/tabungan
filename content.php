<?php
error_reporting(0);
if ($_GET[module]=='siswa')
{
	include"siswa/index.php";
}

elseif ($_GET[module]=='form_siswa')
{
	include"siswa/form_tambah.php";
}
elseif ($_GET[module]=='input_siswa'){
	include"siswa/input.php";
}

elseif ($_GET[module]=='edit_siswa'){
	include"siswa/form_edit.php";
}

elseif ($_GET[module]=='update_siswa'){
	include"siswa/update.php";
}

elseif ($_GET[module]=='hapus_siswa'){
	include"siswa/hapus.php";
}

elseif ($_GET[module]=='tabungan'){
	include"tabungan/tabungan.php";
}

elseif ($_GET[module]=='penarikan'){
	include"tabungan/penarikan.php";
}

elseif ($_GET[module]=='input_penarikan'){
	include"tabungan/input_penarikan.php";
}

elseif ($_GET[module]=='setoran'){
	include"tabungan/setoran.php";
}

elseif ($_GET[module]=='input_setoran'){
	include"tabungan/input_setoran.php";
}

elseif ($_GET[module]=='detail'){
	include"tabungan/detail.php";
}
?>