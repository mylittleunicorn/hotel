<?php
  include "../koneksi.php";
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
  <h1 class="h2">Daftar Reservasi Hotel</h1>
</div>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <form class="row g-3">
    <div class="col">
      <input type="date" class="form-control" id="checkin" name="checkin" value="<?php echo $_POST['checkin']; ?>">
    </div>
    <div class="col">
      <input type="submit" name="" value="cari" class="btn btn-primary">
    </div>
  </form>
  <form class="row g-3">
    <div class="col">
      <input type="text" class="form-control" name="checkin">
    </div>
    <div class="col">
      <input type="submit" name="" value="cari" class="btn btn-primary">
    </div>
  </form>
</div>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama Pemesan</th>
        <th scope="col">Tipe Kamar</th>
        <th scope="col">Check IN</th>
        <th scope="col">Check Out</th>
        <th scope="col">Total Bayar</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php 
     $query = mysqli_query($kon, 'SELECT * FROM kamar INNER JOIN reservasi ON kamar.id = reservasi.kamar_id');
      while ($data = mysqli_fetch_array($query)) {
    ?>
      <tr>
        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['tipe_kamar'] ?></td>
        <td><?php echo $data['checkin'] ?></td>
        <td><?php echo $data['checkout'] ?></td>
        <td><?php echo $data['jumlah'] ?></td>
        <td><img src="../image/<?php echo $data['gambar']; ?>" width="100"/></td>
        <td>
          <a href="">ubah</a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>