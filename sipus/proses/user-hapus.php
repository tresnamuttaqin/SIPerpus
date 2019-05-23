<?php
include'../koneksi.php';
$id_user=$_GET['id'];

mysql_query(
	"DELETE FROM tbuser
	WHERE iduser='$id_user'"
);
header("location:../index.php?p=user");
?>