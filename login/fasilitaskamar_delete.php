<?php
  include "../koneksi.php";
  $id = $_GET['id'];
  
  $delete = mysqli_query($kon, "DELETE FROM fasilitas_kamar WHERE fasilitaskamar_id='$id'");
  if($delete){
      echo ("<script LANGUAGE='JavaScript'>
            window.location.href='index.php?page=fasilitaskamar-list';
            </script>");
  }
?>