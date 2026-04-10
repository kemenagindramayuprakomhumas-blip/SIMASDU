<?php
session_start();
include("config.php"); // karena file ini ada di folder yang sama

$username = $_POST['username'];
$password = md5($_POST['password']); // pastikan password di DB juga pakai md5

$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = $con->query($sql);

if ($result && $result->num_rows == 1) {
    $_SESSION['admin'] = $username;
    header("Location: ../admin.php");
    exit();
} else {
    header("Location: ../login.php?error=Login gagal");
    exit();
}
