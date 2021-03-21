<?php
include 'library.php';
 
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
$nis = $_GET['nis'];
$nama_lengkap = $_GET['nama_lengkap'];
$jenis_kelamin = $_GET['jenis_kelamin'];
$kelas = $_GET['kelas'];
$jurusan = $_GET['jurusan'];
$alamat = $_GET['alamat'];
$golongan_darah = $_GET['golongan_darah'];
$ibu = $_GET['nama_ibu_kandung'];
$sql = "DELETE FROM siswa WHERE nis = '$nis' ";
$mysqli->query($sql) or die($mysqli->error);
header("location: index.php");
}
?>