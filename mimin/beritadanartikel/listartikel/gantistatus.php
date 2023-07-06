<?php 
include "../../../assets/config/db.php";
$idartikel = $_GET['idartikel'];

mysqli_query($koneksi,"UPDATE artikel SET status = (CASE WHEN status = 'checked' then '' WHEN status = '' THEN 'checked' ELSE status END) WHERE id_artikel = '$idartikel'") or die(mysqli_error($koneksi));

header('Location: index.php');

?>