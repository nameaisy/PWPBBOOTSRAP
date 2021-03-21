<?php

include 'library.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$nis = $_POST['nis'];
if(empty($nis)) {
//  flash('error',"upload file gagal");
  header('location:index.php'); die();
}
$nama = $_POST['nama'];
$jk = $_POST ['jk'];
$alamat = $_POST['alamat'];
$no_telp = $_POST ['no_telp'];
$kelas = $_POST ['kelas'];
$foto = $_FILES['foto'];
$filename = $_FILES['foto']['name'];

if(!empty($foto) and $foto['error']==0) {
$path='media/images/';


$upload= move_uploaded_file($_FILES['foto']['tmp_name'], $path.$filename);
if(!$upload) {
  flash('error',"upload file gagal");
  header('location:index.php');
}
 $file=$foto['name'];
}
$sql = "INSERT INTO siswa (nis, nama, jk, alamat, no_telp, kelas, file)


VALUES ('$nis', '$nama', '$jk', '$alamat', '$no_telp', '$kelas', '$file')";
$mysqli->query($sql) or die ($mysqli->error);
header('location: index.php');

}
include 'views/v_tambah.php';


?>
