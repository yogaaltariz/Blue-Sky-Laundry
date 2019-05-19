<?php 
  $data = $customer[0];

?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="<?php echo base_url(); ?>css/Struk.css" rel="stylesheet">

	<title>Struk</title>
</head>

<style>

 @media print {
   #btn-print {
     display : none
   }
 }
</style>

<body>
	<div class="container" id="main">


		<div class="Judul text-center">
			<h1>Blue Sky Laundry</h1>
			<h6>Jalan Seroja Lr.II Nomor 12 Imaseen Kayee Adang</h6>
      <h6>www.blueskylaundry.com</h6>
			<h6>No hp: 08134675533</h6>
		</div>

    <div class="row">
      <div class="col-6">
        <table class="table">
          <tr>
            <td>No. Invoice</td>
            <td><?= $data['id'] ?></td>
          </tr>

          <tr>
            <td>Nama Pelanggan</td>
            <td><?= $data['nama'] ?></td>
          </tr>

          <tr>
            <td>Estimasi Selesai</td>
            <td><?= $data['tglSelesai'] ?></td>
          </tr>

          <tr>
            <td>Paket</td>
            <td><?= $data['paket'] ?></td>
          </tr>
          <tr>
            <td>Total Tagihan</td>
            <td><?= $data['harga'] ?></td>
          </tr>
        </table>

        <p><strong>Perhatian :</strong></p>
        <ul class="text-justify">
          <li>Kehilangan barang yang tidak diambil setelah 1 bulan lamanya, bukanlah tanggung jawab dari kami</li>
          <li>Pakaian bewarna yang tidak diberitahukan kepada kami menjadi resiko konsumen</li>
        </ul>

      </div>
      <div class="col-6">
        <div id="qrCode"></div>

        <h5 class="text-justify">Scan QR Code diatas untuk melihat rincian langganan anda</h5>
        <h1 class="text-center"><b>TERIMAKASIH</></b></h1>
      </div>

      <input type="button" onclick="window.print()" value="Print" class="btn btn-block btn-primary" id="btn-print" />

			<!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>js/popper.min.js"></script>
      <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>js/qrcode.min.js"></script>

      <script type="text/javascript">
        new QRCode(document.getElementById("qrCode"), "<?= base_url('index.php/customer/info/').$data['id'] ?>");


        window.onafterprint = function(event) {
          window.open("<?= base_url('index.php/customer') ?>")
        };
      </script>
</body>

</html>
