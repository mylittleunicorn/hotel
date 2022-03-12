  <section class="py-5 text-center container-fluid bg">
    <div class="container">
    <div class="row py-lg-5">
      <div class="col-lg-12 col-md-12 mx-auto">
        <h2>Kamar</h2>
      </div>
    </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php 
        include "koneksi.php";
         $query = mysqli_query($kon, 'SELECT id, tipe_kamar, harga, gambar, fasilitas FROM kamar LEFT JOIN fasilitas_kamar ON id=fasilitaskamar_id');
          while ($data = mysqli_fetch_array($query)) {
        ?>
        <div class="col">
          <div class="card shadow-sm">
            <img src="image/<?php echo $data['gambar']; ?>" class="bd-placeholder-img card-img-top" width="100%" height="225"role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">

            <div class="card-body">
              <h5 class="card-title"><?php echo $data['tipe_kamar']; ?></h5>
              Fasilitas
              <ul>
                <?php
                  $queryfas = mysqli_query($kon, "SELECT * FROM fasilitas_kamar WHERE kamar_id = '$data[id]'");
                  while ($fasilitas = mysqli_fetch_array($queryfas)) {
                ?>
                <li><?php echo $fasilitas['fasilitas']; ?></li>

                <?php
                  }
                ?>
              </ul>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-muted">Rp. <?php echo $data['harga']; ?> / Malam</small>
              </div>
            </div>
          </div>
        </div>
        <?php
          }
        ?>
        
        

        
        
        

        
        
      </div>
    </div>
  </div>