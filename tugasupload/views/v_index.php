<?php
if($_SESSION['status'] !="login"){

    header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Shafa Firazty </title>
<link rel="stylesheet" href="reset.css" >
<link rel="stylesheet" href="media/css/bootstrap.min.css" >
<style type="text/css">
button a{
text-decoration: none;
color: white;
}

.btn-primary {
    color: #fff;
    background-color: #0495c9;
    border-color: #357ebd; /*set the color you want here*/
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active {
    color: #fff;
	text-decoration: none;
    background-color: #00b3db;
    border-color: #285e8e; /*set the color you want here*/
}

</style>


</head>
<body>
<div class="container">
<div class="row">
<center><h1>Ini Adalah Halaman Utama Data Siswa</h1></center>

  <div class="col-md-6"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> <a href="tambah.php">Tambah Data</a></button></div>
  <div class="col-md-6" align="right"> <button class="btn btn-danger"><a href="logout.php">Logout</a></button></div>
</div>


<table class="table table-hover">
<thead>
<tr>
<th>#</th>
<th>NIS</th>
<th>Nama Lengkap</th>
<th>Jenis Kelamin</th>
<th>Alamat</th>
<th>No Telp</th>
<th>Kelas</th>
<th colspan="2">Aksi</th>
</tr>
</thead>

<tbody>
<?php
$i = 1;
while ($siswa = $listSiswa->fetch_array()) {
if(
    $siswa['jk']=="L") {$jk="Laki-laki";
  }
elseif (
    $siswa['jk']=="P") {$jk="Perempuan";
	}
?>
<tr>
<td><img src="media/images/<?php echo $siswa['file'];?>" width="80px;"></td>
<td><?= $siswa['nis'] ?></td>
<td><?= $siswa['nis'] ?></td>
<td><?= $siswa['nama'] ?></td>
<td><?= $jk;?></td>
<td><?= $siswa['alamat'] ?></td>
<td><?= $siswa['no_telp'] ?></td>
<td><?= $siswa['kelas'] ?></td>

<td style="width:80px;"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <a href="edit.php?nis=<?= $siswa['nis'] ?>">Edit</a></button></td>
<td style="width:80px;"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> <a href="delete.php?nis=<?= $siswa['nis'] ?>">Delete</a></button></td>
</tr>

<?php } ?>
</tbody>
</table>
</div>
</body>
</html>
