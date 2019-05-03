<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $id=$_POST['id'];
 $nim=$_POST['kodebrg'];
 $nama=$_POST['namabrg'];
 $jurusan=$_POST['jenisbrg'];
 $alamat=$_POST['harga'];
 $q=mysqli_query($con,"INSERT INTO `mahasiswa` (`id`,`kodebrg`,`namabrg`,`jenisbrg`,`harga`) VALUES ('$id','$kodebrg','$namabrg','$jenisbrg','$harga')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
