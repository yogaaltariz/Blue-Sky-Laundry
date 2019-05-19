<div class="container">

	<div class="d-flex justify-content-between" id="nama">
	<h2>CUSTOMER</h2>
		<a href="<?php echo base_url(); ?>index.php/customer/add">
			<button type="button" class="btn btn-outline-dark"><i class="fas fa-plus-circle"></i> Add
				Customer</button>
		</a>
	</div>
	<div class="row">
			<div class="col-lg-10 offset-2" id="tabel">
				<table class="table table-bordered">
					<thead ALIGN="center">
						<tr>
							<th>Nama</th>
							<th>Status Pesanan</th>
							<th>Member</th>
							<th>Paket</th>
							<th>Harga</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						foreach ($customer as $item) {
							?>
						<tr>
							<td><?=$item->nama ?></td>
							<td><?= $item->status ?></td>
							<td><?= $item->idMember ?></td>
							<td><?= $item->paket ?></td>
							<td><?= $item->harga ?></td>
			
							<td class="d-flex justify-content-around">
								<a href="<?= base_url('index.php/customer/done/').$item->id ?>"><i class="far fa-check-circle"></i></a>
								<a href="<?= base_url('index.php/customer/edit/').$item->id ?>"><i class="fas fa-edit"></i></a>
								<a href="<?= base_url('index.php/customer/info/').$item->id ?>"><i class="fas fa-info-circle"></i></a>
								<a href="<?= base_url('index.php/customer/struk/').$item->id ?>"><i class="fas fa-print"></i></a>								
								<a href="<?= base_url('index.php/customer/delete/').$item->id ?>"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
						<?php
						}
					?>

					</tbody>
				</table>
		</div>
	</div>


	