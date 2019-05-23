<?php
include'../koneksi.php';
$id_buku=$_GET['id'];

mysql_query(
	"DELETE FROM tbbuku
	WHERE idbuku='$id_buku'"
);
header("location:../index.php?p=buku");
?>