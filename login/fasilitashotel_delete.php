<?php
  include "../koneksi.php";
  $id = $_GET['id'];
  
  $delete = mysqli_query($kon, "DELETE FROM fasilitas_hotel WHERE id='$id'");
  if($delete){
      echo ("<script LANGUAGE='JavaScript'>
            window.location.href='index.php';
            </script>");
  }
?>