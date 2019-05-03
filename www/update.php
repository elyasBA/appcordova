<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $id=$_POST['id'];
 $nim=$_POST['kodebrg'];
 $nama=$_POST['namabrg'];
 $jurusan=$_POST['jenisbrg'];
 $alamat=$_POST['harga'];
 $q=mysqli_query($con,"UPDATE `mahasiswa` SET `id`='$id',`kodebrg`='$kodebrg',`namabrg`='$namabrg',`jenisbrg`='$jenisbrg',`harga`='$harga' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
