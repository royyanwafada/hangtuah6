<?php
include "../../assets/config/db.php";
$newnumber = $_POST['WaBaru'];
// echo $newnumber;
$query = mysqli_query($koneksi, "UPDATE sosial_media SET component='$newnumber' where id='WA'");

if ($query) {
    header('Location: index.php');
} else {
    header('Location: index.php');
}
