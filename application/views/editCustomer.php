<?php 
 $customer = $foundCustomer[0];

?>
<!--title-->
<section id="title">
	<div class="d-flex justify-content-between">
		<div>
			<p>Edit Customer</p>
		</div>
		<div>
			<a href="<?php echo base_url(); ?>index.php/customer"> <i class="fa fa-home h2"></i></a>
		</div>
	</div>
</section>
<!--end of title-->

<!--form-->
<form action="<?= base_url('index.php/customer/updateData/'.$customer['id']) ?>" method="POST">
	<div class="row">
		<div class="col-8 ml-5">
			<!--form 1-->
			<div class="form-group row">
				<label class="col-2">Nama pelanggan</label>
				<div class="col-6">
					<input value="<?= $customer['nama'] ?>" type="text" name="nama" class="form-control" placeholder="nama pelanggan">
				</div>
			</div>
			<!--form 2-->
			<div class="form-group row">
				<label class="col-2">Berat laundry</label>
				<div class="col-6">
					<input value="<?= $customer['berat'] ?>" type="number" step="0.1" id="beratLaundry" name="beratLaundry" class="form-control">
				</div>
			</div>
			<!--form 3-->
			<div class="form-group row">
				<label class="col-2" name="rincian">Rincian Barang :</label>
			</div>
			<!--form 4-->
			<div class="form-group row">
				<label class="col-2">Baju</label>
				<div class="col-6">
					<input value="<?= $customer['baju'] ?>" type="number" name="jumlahBaju" class="form-control">
				</div>
			</div>
			<!--form 5-->
			<div class="form-group row">
				<label class="col-2">Celana</label>
				<div class="col-6">
					<input value="<?= $customer['celana'] ?>" type="number" name="jumlahCelana" class="form-control">
				</div>
			</div>
			<!--form 6-->
			<div class="form-group row">
				<label class="col-2">Sprei</label>
				<div class="col-6">
					<input value="<?= $customer['sprei'] ?>" type="number" name="jumlahSprei" class="form-control">
				</div>
			</div>
			<!--form 7-->
			<div class="form-group row">
				<label class="col-2">Lain - lain</label>
				<div class="col-6">
					<input value="<?= $customer['lain'] ?>" type="number" name="jumlahLain" class="form-control">
				</div>
			</div>
			<!--form 8-->
			<div class="form-group row">
				<label class="col-2">Paket</label>
				<div class="col-6">
					<select class="form-control" id="paket" name="paket" required>
						<option >pilih paket</option>
						<option value="21">cuci - gosok</option>
						<option value="11">cuci - gosok express</option>
						<option value="22">cuci aja</option>
						<option value="12">cuci aja express</option>
						<option value="23">gosok aja</option>
						<option value="13">gosok aja express</option>
					</select>
				</div>
			</div>

			<!--form 10-->
			<div class="form-group row">
				<label class="col-2">alamat</label>
				<div class="col-6">
					<input value="<?= $customer['alamat'] ?>" type="" name="alamat" class="form-control">
				</div>
			</div>
			<!--form 11-->
			<div class="form-group row">
				<label class="col-2">kecamatan</label>
				<div class="col-6">
					<select class="form-control" id="kecamatan" name="kecamatan">
						<option value="0">pilih kecamatan</option>
						<option value="Syiah Kuala">Syiah Kuala</option>
						<option value="Baiturrahman">Baiturrahman</option>
						<option value="Lueng Bata">Lueng Bata</option>
						<option value="Lhong Raya">Lhong Raya</option>
					</select>
				</div>
			</div>
			<!--form 12-->
			<div class="form-group row">
				<label class="col-lg-2">Member</label>
				<div class="col-1">
					<input type="checkbox" name="member" id="member" readonly>
				</div>

				<div class="col-lg-6">
					<input type="text" value="<?= $customer['idMember'] ?>" name="idMember" id="Idmember" placeholder="id member" class="form-control" readonly>
				</div>

			</div>
			<!--form 13-->
			<div class="form-group row">
				<label class="col-2">Antar</label>
				<div class="col-1">
					<input type="checkbox" name="antar" disabled id="antar">
				</div>
			</div>
			<!--button-->
			<div class="row">
				<div class="col-6 my-4">
					<input type="submit" class="btn btn-block btn-success mb-2" id="submit" name=""
						value="Update">
				</div>
			</div>
		</div>
	</div>
</form>
<!--end of form-->
<script>
	const antar = document.querySelector('#antar')
	const member = document.querySelector('#member')
	const kecamatan = document.querySelector('#kecamatan')


	if (document.querySelector('#Idmember').value) {
			member.checked = true;
			member.setAttribute('onclick',"return false")
			antar.removeAttribute('disabled')
		} else {
			antar.setAttribute('disabled',true)
			antar.checked = false;
			member.checked = false;
			member.addEventListener('click',function(e){
				if (member.checked) {
					document.querySelector('#Idmember').removeAttribute("readonly")
					antar.removeAttribute('disabled')
				} else {
					document.querySelector('#Idmember').setAttribute("readonly","")
					antar.setAttribute('disabled',"")
				}
			})
	
		}

</script>
