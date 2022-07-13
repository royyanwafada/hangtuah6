<?php
session_start();
session_destroy();
echo '<script language="javascript">';
echo 'alert("Username atau Password salah")';
echo '</script>';
header('Location: index.php');
