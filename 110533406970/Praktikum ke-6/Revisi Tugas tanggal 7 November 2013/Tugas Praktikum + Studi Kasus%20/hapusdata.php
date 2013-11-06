<?php
   include("koneksi.php");
   include("fungsi.php");
 
   $nim = $_GET['nim'];
 
   $sql = "DELETE FROM mahasiswa WHERE nim = '$nim'";
   mysql_query($sql);
   if(mysql_errno() == 0)
   {
      echo"<script>alert('Data berhasil dihapus !');</script>";
      $page = "tampildata.php";
      echo redirectPage($page);
   }else{
      echo"<script>alert('Data gagal dihapus !');</script>";
   }
?>