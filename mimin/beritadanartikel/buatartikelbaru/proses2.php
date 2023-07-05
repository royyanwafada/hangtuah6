<?php

$tanggal = $_POST['tanggal'];
echo $tanggal."</br>";

$tanggal2 = date_format(new datetime($_POST['tanggal']),"Y-m-d H:i:s");

echo $tanggal2;

?>