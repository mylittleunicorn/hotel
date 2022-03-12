<?php
  include "../koneksi.php";
  $id = $_GET['id'];
  
  $delete = mysqli_query($kon, "DELETE FROM user WHERE id='$id'");
  if($delete){
      echo ("<script LANGUAGE='JavaScript'>
            window.location.href='index.php?page=user-list';
            </script>");
  }
?>