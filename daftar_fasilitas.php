  <section class="py-5 text-center container-fluid bg">
    <div class="container">
    <div class="row py-lg-5">
      <div class="col-lg-12 col-md-12 mx-auto">
        <h2>Fasilitas Hotel</h2>
      </div>
    </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php 
        include "koneksi.php";
         $query = mysqli_query($kon, 'SELECT * FROM fasilitas_hotel');
          while ($data = mysqli_fetch_array($query)) {
        ?>
        <div class="col">
          <div class="card shadow-sm">
            <img src="image/<?php echo $data['gambar']; ?>" class="bd-placeholder-img card-img-top" width="100%" height="225"role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"><?php echo $data['nama_fasilitashotel'] ?></text>

            <div class="card-body">
              <p class="card-text"><?php echo $data['keterangan'] ?></p>
            </div>
          </div>
        </div>
        <?php
          }
        ?>
        
        

        
        
        

        
        
      </div>
    </div>
  </div>