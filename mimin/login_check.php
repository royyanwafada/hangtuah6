<?php
include "../assets/config/db.php";

//get login information
if (isset($_POST['submit'])) {
    $username = $_POST['un'];
    $password = $_POST['pwd'];
} else {
    header('Location: login.php');
}

// Check connection
// if ($mysqli->connect_errno) {
//     echo "Failed to connect to MySQL: " . $mysqli->connect_error;
//     exit();
// }

//checking on database
$result = mysqli_query($koneksi, "select id_user from user where username='$username' AND password='$password'");
$numrows = mysqli_num_rows($result);
$id_user = mysqli_fetch_array($result);
//$id_user = mysqli_fetch_array($result);

if ($numrows == 1) {
    session_start();
    $_SESSION['id_user'] = $id_user[0];
    header('Location: index.php');
} else {
    header('Location: login.php?failed');
}
