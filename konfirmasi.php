  <?php 
  $checkin     = $_POST['checkin'];
  $checkout 	 = $_POST['checkout'];
  
  include "koneksi.php";
  $selisih		 = (strtotime($checkout) - strtotime($checkin))/60/60/24;
  $namapemesan = $_POST['namapemesan'];   
  $namatamu    = $_POST['namatamu'];
  $email			 = $_POST['email'];
  $nohp        = $_POST['no'];
  $jumlahkamar = $_POST['jumlahkamar'];
  $idtipekamar = $_POST['tipekamar'];

if ($checkout > $checkin) {
  	$selectharga = mysqli_query($kon, "select harga from kamar where id='$idtipekamar'");
	  while($data = mysqli_fetch_array($selectharga)){
	  	$harga = $data['harga'];
  	}

  	$totalbayar  = $selisih * $jumlahkamar * $harga;
  	$input = mysqli_query($kon, "INSERT INTO reservasi VALUES ('', '$namapemesan', '$email', '$nohp', '$idtipekamar', '$checkin', '$checkout', '$totalbayar', '')");
?>
		<section class="py-5 text-center container-fluid bg">
    <div class="container">
    <div class="row py-lg-5">
      <div class="col-lg-12 col-md-12 mx-auto">
       <h2>TERIMAKASIH</h2>
      </div>
    </div>
    </div>
  </section>

  <div class="px-4 pt-5 my-5 border-bottom container d-flex justify-content-center" >
  	<div class="col-md-8">
  	<table class="table">
	    <tr>
	    	<td>NAMA PEMESAN</td>
	    	<td>:</td>
	    	<td><?php echo $namapemesan ?></td>
	    </tr>
	    <tr>
	    	<td>NAMA TAMU</td>
	    	<td>:</td>
	    	<td><?php echo $namatamu ?></td>
	    </tr>
	    <tr>
	    	<td>CHECKIN</td>
	    	<td>:</td>
	    	<td><?php echo $checkin ?></td>
	    </tr>
	    <tr>
	    	<td>CHECKOUT</td>
	    	<td>:</td>
	    	<td><?php echo $checkout ?></td>
	    </tr>
	    <tr>
	    	<td>JUMLAH KAMAR</td>
	    	<td>:</td>
	    	<td><?php echo $jumlahkamar ?></td>
	    </tr>
	    <tr>
	    	<td>EMAIL</td>
	    	<td>:</td>
	    	<td><?php echo $email ?></td>
	    </tr>
	    <tr>
	    	<td>NO HP</td>
	    	<td>:</td>
	    	<td><?php echo $nohp ?></td>
	    </tr>
	    <tr>
	    	<td>TOTAL BAYAR</td>
	    	<td>:</td>
	    	<td><?php echo $totalbayar; ?></td>
	    </tr>
    </table>
    </div>
  </div>
<?php
  }else{
  	echo "aaaa";
  }
  

  ?>


  