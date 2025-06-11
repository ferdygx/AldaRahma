<?php
session_start();
if (empty($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

include "koneksi.php";

// Tampilkan data kelas
$query = "SELECT * FROM kelas";
$hasil = mysqli_query($koneksi, $query);

echo "<h2>Data Kelas FTIK</h2>";
echo "<a href='tambah.php'>Tambah Data</a><br><br>";

while($data=mysqli_fetch_array($hasil)){
echo "$data[id_kelas]. $data[gedung] $data[angka] :: ";
echo "<a href='edit.php?id=$data[id_kelas]'>Edit</a> |
<a href='hapus.php?id=$data[id_kelas]'>Hapus</a> <br>";
}


echo "<br><a href='logout.php'>Keluar</a>";
?>
