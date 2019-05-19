<!--title-->
<section id="title">
	<div class="d-flex justify-content-between">
		<div>
			<p>Info Member</p>
		</div>
		<div>
			<a href="<?php echo base_url(); ?>index.php/customer"> <i class="fa fa-home h2"></i></a>
		</div>
	</div>
</section>
<!--end of title-->

<pre>
<?php 
	$member = $foundMember[0];
?>
</pre>
<div class="container">
	<div class="content">
		<table>
			<tr>
				<td>Nama</td>
				<td>: <?= $member['nama'] ?></td>
			</tr>
			<tr>
				<td>No Hp</td>
				<td>: <?= $member['telepon'] ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>: <?= $member['email'] ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>: <?= $member['alamat']." kecamatan ".$member['kecamatan'] ?></td>
			</tr>
			<tr>
				<td>KTP</td>
				<td><a href="<?= base_url('uploads/'.$member['ktp']) ?>" class="text-primary">: lihat ktp</a></td>
			</tr>

		</table>


		<br>

		<br>
	</div>


	<div class="col-lg">
		<table class="table table-bordered" width="100%">
			<thead ALIGN="center">
				<tr scope=>
					<th>Paket</th>
					<th>Status</th>
					<th>Tanggal Pesan</th>
					<th>Tanggal Selesai</th>
					<th>Info</th>
				</tr>
			</thead>

			<tbody ALIGN="center">
				<?php 
					foreach ($memberHistory as $item) {
						?>
				<tr>
					<td><?= $item->paket ?></td>
					<td><?= $item->status ?></td>
					<td><?=$item->tglOrder ?></td>
					<td><?= $item->tglSelesai ?></td>
					<td>
						<a href="<?= base_url('index.php/customer/info/').$item->id ?>">
							<i class="fas fa-info mx-1"></i>
						</a>
					</td>
				</tr>
						<?php
					}
				?>
			
			</tbody>
		</table>

	</div>
