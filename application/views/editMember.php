<?php 
		$member = $foundMember[0];
?>

<!--title-->
<section id="title">
	<div class="d-flex justify-content-between">
		<div>
			<p>Edit Member</p>
		</div>
		<div>
			<a href="<?php echo base_url(); ?>index.php/customer"> <i class="fa fa-home h2"></i></a>
		</div>
	</div>
</section>
<!--end of title-->

<!--form-->
<form action="<?= base_url('index.php/member/updateData/').$member['id'] ?>" method="POST">
<div class="row">
	<div class="col-8 ml-5">
		<!--row 1-->

		<!--row 2-->
		<div class="form-group row">
			<label class="col-2" for="nama">Nama Member</label>
			<div class="col-6">
				<input type="text" name="nama" class="form-control">
			</div>
		</div>
		<!--row 3-->
		<div class="form-group row">
			<label class="col-2">Telepon</label>
			<div class="col-6">
				<input type="text" class="form-control" name="telepon" placeholder="">
			</div>
		</div>
		<!--row 4-->
		<div class="form-group row">
			<label class="col-2">Email</label>
			<div class="col-6">
				<input type="email" class="form-control" name="email" placeholder="">
			</div>
		</div>
		<!--row 5-->
		<div class="form-group row">
			<label class="col-2" name="alamat">Alamat :</label>
			<div class="col-6">
				<input type="text" class="form-control" name="alamat" placeholder="">
			</div>
		</div>

		<!--row 7-->
		<div class="form-group row">
			<label class="col-2">Kecamatan</label>
			<div class="col-6">
				<select class="form-control" name="kecamatan">
					<option value="0">pilih kecamatan</option>
					<option value="Syiah Kuala">Syiah Kuala</option>
					<option value="Baiturrahman">Baiturrahman</option>
					<option value="Lueng Bata">Lueng Bata</option>
					<option value="Lhong Raya">Lhong Raya</option>
				</select>
			</div>
		</div>
		<!--row 8-->
		<small class="text-muted h6 d-block mb-4">File scan KTP tidak dapat diedit</small>
		<!--button-->
		<input type="submit" class="btn btn-success" value="Update">
	</div>
</div>
</form>
</div>


<script>
	// console.log(document.querySelector('input[type=file]'))

	document.querySelector('input[name="nama"]').value = '<?= $member['nama'] ?>'
	document.querySelector('input[name="telepon"]').value = '<?= $member['telepon'] ?>'
	document.querySelector('input[name="email"]').value = '<?= $member['email'] ?>'
	document.querySelector('input[name="alamat"]').value = '<?= $member['alamat'] ?>'
	document.querySelector('select[name="kecamatan"]').value = '<?= $member['kecamatan'] ?>'


</script>