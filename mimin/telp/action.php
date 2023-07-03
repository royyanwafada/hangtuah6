<?php
include "../../assets/config/db.php";
$newnumber = $_POST['TelpBaru'];
// echo $newnumber;
$query = mysqli_query($koneksi, "UPDATE sosial_media SET component='$newnumber' where id='TELP'");

if ($query) {
    header('Location: index.php');
} else {
    header('Location: index.php');
}
