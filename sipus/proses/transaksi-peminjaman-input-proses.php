<?php
include'../koneksi.php';
$id_transaksi=$_POST['id_transaksi'];
$id_anggota=$_POST['id_anggota'];
$id_buku=$_POST['id_buku'];
$tgl_pinjam=$_POST['tgl_pinjam'];
$status_anggota="Sedang Meminjam";
$status_buku="Dipinjam";


if(isset($_POST['simpan'])){
	mysql_query(
		"INSERT INTO tbtransaksi
		VALUES('$id_transaksi','$id_anggota','$id_buku','$tgl_pinjam','')"
	);
	mysql_query(
		"UPDATE tbanggota
		SET status='$status_anggota'
		WHERE idanggota='$id_anggota'"
	);
	mysql_query(
		"UPDATE tbbuku
		SET status='$status_buku'
		WHERE idbuku='$id_buku'"
	);
	header("location:../index.php?p=transaksi-peminjaman");
}
?>