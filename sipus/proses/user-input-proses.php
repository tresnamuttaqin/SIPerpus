<?php
include'../koneksi.php';
$id_user=$_POST['id_user'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
	
if(isset($_POST['simpan'])){
	mysql_query(
		"INSERT INTO tbuser
		VALUES('$id_user','$nama','$alamat')"
	);
	header("location:../index.php?p=user");
}
?>