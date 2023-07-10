<?php 
include "../../../assets/config/db.php";
$idartikel = $_GET['idartikel'];
mysqli_query($koneksi,"DELETE FROM artikel WHERE id_artikel = '$idartikel'") or die(mysqli_error($koneksi));
header('Location: index.php');
?>