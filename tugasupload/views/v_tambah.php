<?php
$url="tambah.php";
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
</style>
</head>
<body>
<div class="container" style="margin:0 auto; max-width:800px;"  >
  <div ><button class="btn btn-warning"><a href="index.php">Kembali</a></button></div>

  <h2 align="center">Tambah Data Siswa</h2>
  <form class="form-horizontal" action="<?php echo $url;?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2 " for="email">NIS</label>
      <div class="col-sm-3">
        <input  class="form-control" type="text" id="NIS" name="nis">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 " for="nama">Nama</label>
      <div class="col-sm-8">          
       <input  class="form-control" type="text" name="nama" id="nama">
	  </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="jenis">Jenis</label>
      <div class="col-sm-8">   
	      
	    <div class="radio">
        <label> <input  class="radio" type="radio" name="jk" value="L">Laki-Laki</label>
        </div>
        <div class="radio">
        <label> <input class="radio" type="radio" name="jk" value="P">Perempuan</label>
        </div>    
      </div>
    </div>
	
    
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Alamat</label>
      <div class="col-sm-8">  
	  <textarea class="form-control" rows="3"  name="alamat" id="alamat"></textarea>        
	  </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2 " for="nama">No Telp</label>
      <div class="col-sm-8">          
       <input  class="form-control" type="text" name="no_telp" id="no_telp">
	  </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Kelas</label>
      <div class="col-sm-8">          
      <select name="kelas" class="form-control">
<option value="XI-RPL-1">XI-RPL-1</option>
<option value="XI-RPL-2">XI-RPL-2</option>
<option value="XI-RPL-3">XI-RPL-3</option>
</select>
	  </div>
    </div>
	<div class="form-group">
     <label class="control-label col-sm-2" for="pwd">Foto</label>
     <div class="col-sm-6"> 
        <input class="form-control" type='file' name='foto' id='Foto'>
    </div>
	</div>
	
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        
	<button type="submit" value="simpan" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>Simpan</button>
      </div>
    </div>
  </form>
</div>



</div>
</body>
</html>