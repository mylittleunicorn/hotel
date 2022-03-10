<?php
  include "../koneksi.php";
  $id = $_GET['id'];
  $edit = mysqli_query($kon, "SELECT * FROM fasilitas_kamar WHERE fasilitaskamar_id='$id'");
  while ($r = mysqli_fetch_array($edit)){

?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Fasilitas Hotel</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="index.php?page=fasilitashotel-input">
        <button type="button" class="btn btn-sm btn-outline-secondary">+ Fasilitas</button>
      </a>
    </div>
  </div>
</div>
<div class="table-responsive">
  <form action="" method="post">
    <div class="mb-3">
      <label for="tipekamar" class="form-label">Tipe Kamar</label>
      <select id="tipekamar" class="form-select" name="tipekamar">
          <?php 
            $sql=mysqli_query($kon, 'SELECT * FROM kamar');
            while ($data = mysqli_fetch_array($sql)) {
          ?>
            <option value="<?php echo $data['id']?>">
              <?php echo $data['tipe_kamar']; ?>
            </option> 
           <?php
            }
           ?>
        </select>
    <div class="mb-3">
      <label for="fasilitas" class="form-label">Fasilitas</label>
      <textarea class="form-control"  id="Keterangan" name="fasilitas" ><?php echo $r['fasilitas'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
  <?php } ?>
  </form>
</div>

<?php 
if(isset($_POST['simpan']))
{
    $tipekamar = $_POST['tipekamar'];
    $fasilitas = $_POST['fasilitas'];
    if ($tipekamar !==''){
        $add = mysqli_query($kon, "UPDATE fasilitas_kamar SET kamar_id='$tipekamar', fasilitas='$fasilitas' WHERE fasilitaskamar_id='$id'");
        if ($add) {
          echo ("<script LANGUAGE='JavaScript'>
            window.alert('Fasilitas Kamar Berhasil Ditambahkan');
            window.location.href='index.php?page=fasilitaskamar-list';
            </script>");
        }
    }else{
        echo "<b>Gagal Upload File</b>";
    }
}
?>