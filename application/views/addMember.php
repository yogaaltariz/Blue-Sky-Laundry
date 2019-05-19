<!--title-->
<?php
                if (isset($error)){
                    echo $error;
                }
            ?>
<section id="title">
	<div class="d-flex justify-content-between">
		<div>
			<p>Add Member</p>
		</div>
		<div>
			<a href="<?php echo base_url(); ?>index.php/customer"> <i class="fa fa-home h2"></i></a>
		</div>
	</div>
</section>
<!--end of title-->

<!--form-->
<div class="row">
	<div class="col-8 ml-5">
		<!--row 1-->
		<form action="<?= base_url('index.php/member/newMember') ?>" method="POST" enctype="multipart/form-data">

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
		</div>
		<!--row 6-->
		<div class="form-group row">
			<label class="col-2">Alamat</label>
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
		<!--row 9-->
		<div class="form-group row">
			<label class="col-2 mt-4">Input KTP Image</label>
			<div class="col-6">
				<div class="input-group mb-3">
					<div class="custom-file">
					<input type="file" id="profile_image" name="ktp" size="33" />
		
					</div>
				</div>
			</div>
		</div>
		<!--button-->
		<input type="submit">
		<button class="btn btn-primary" type="reset" id="cancel">cancel</button>
		</form>
	</div>
</div>
</form>
</div>
<!--end of form-->
