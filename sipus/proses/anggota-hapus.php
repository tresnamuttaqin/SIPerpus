<?php
include'../koneksi.php';
$id_anggota=$_GET['id'];

mysql_query(
	"DELETE FROM tbanggota
	WHERE idanggota='$id_anggota'"
);
header("location:../index.php?p=anggota");
?>