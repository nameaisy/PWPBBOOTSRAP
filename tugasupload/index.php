<?php
include 'library.php';

$order="";
if(isset($_GET['order'])) {
$order= $_GET['order'];
}


if ($order=='') {
$sql = "SELECT * FROM siswa";
}

if ($order=='1') {
$sql = "SELECT * FROM siswa order by nis desc";
}

if ($order=='2') {
$sql = "SELECT * FROM siswa order by nis asc";
}

if ($order=='3') {
$sql = "SELECT * FROM siswa order by nama desc";
}

if ($order=='4') {
$sql = "SELECT * FROM siswa order by nama asc";
}

$cari="";
if(isset($_GET['cari'])) {
$cari= $_GET['cari'];
$sql = "SELECT * FROM siswa where (nama like '%$cari%' or nis like '%$cari%')";
}



$listSiswa = $mysqli->query($sql);

include 'views/v_index.php';
?>