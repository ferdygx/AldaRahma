<?php
session_start();
include "koneksi.php";

$user = $_POST['user'];
$pass = md5($_POST['pass']); // Gunakan password_hash ke depannya

$login = mysqli_query($koneksi, "SELECT * FROM user WHERE user='$user' AND pass='$pass'");
$jumlah = mysqli_num_rows($login);

$x=mysqli_fetch_array($login);

if($jumlah == 1){
    session_start();
    $_SESSION['user']=$x['user'];
    $_SESSION['pass']=$x['pass'];

    header("Location: kelas.php?login=success");
    exit();
} else {
    header("Location: index.php?error=1");
    exit();
}
?>
