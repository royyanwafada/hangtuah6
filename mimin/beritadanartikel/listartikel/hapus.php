<?php 
include "../../../assets/config/db.php";

//GET DATA
$idartikel = $_GET['idartikel'];
$nama_file = "../images/".$_GET['nama_file']; //nama file foto yang mau dihapus

mysqli_query($koneksi,"DELETE FROM artikel WHERE id_artikel = '$idartikel'") or die(mysqli_error($koneksi));
unlink($nama_file);

header('Location: index.php');

?>