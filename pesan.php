  <?php
  	include "koneksi.php";
  ?>

  <section class="py-5 text-center container-fluid bg">
    <div class="container">
    <div class="row py-lg-5">
      <div class="col-lg-12 col-md-12 mx-auto">
       <h2>Konfirmasi Pemesanan</h2>
      </div>
    </div>
    </div>
  </section>

  <div class="px-4 pt-5 my-5 border-bottom container">
    <form class="row g-3 mb-5" method="post" action="index.php?page=konfirmasi">
		  <div class="col-md-6">
		    <label for="checkin" class="form-label">Checkin</label>
		    <input type="date" class="form-control" id="checkin" name="checkin" value="<?php echo $_POST['checkin']; ?>">
		  </div>
		  <div class="col-md-6">
		    <label for="checkout" class="form-label">Checkout</label>
		    <input type="date" class="form-control" id="checkout" name="checkout" value="<?php echo $_POST['checkout']; ?>">
		  </div>
		  <div class="col-12">
		    <label for="nama" class="form-label">Nama Pemesan</label>
		    <input type="text" class="form-control" id="nama" name="namapemesan">
		  </div>
		  <div class="col-12">
		    <label for="Email" class="form-label">Email</label>
		    <input type="email" class="form-control" id="Email" name="email">
		  </div>
		  <div class="col-12">
		    <label for="no" class="form-label">No. Hp</label>
		    <input type="text" class="form-control" id="no" name="no">
		  </div>
		  <div class="col-12">
		    <label for="namatamu" class="form-label">Nama Tamu</label>
		    <input type="text" class="form-control" id="namatamu" name="namatamu">
		  </div>
		  <div class="col-md-6">
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
		  </div>
		   <div class="col-md-6">
		    <label for="inputCity" class="form-label">Jumlah Kamar</label>
		    <input type="number" class="form-control" id="inputCity" value="<?php echo $_POST['jumlah'] ?>" name="jumlahkamar">
		  </div>
		  <div class="col-12">
		    <button type="submit" class="btn btn-primary">Konfirmasi Sekarang</button>
		  </div>
		</form>
  </div>