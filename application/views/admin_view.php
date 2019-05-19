<div class="container">
	<div class="adm-btn align-items-center justify-content-between mb-2" id="nama">
		<h2>Admin</h2>
		<a href="<?php echo base_url(); ?>index.php/admin/add">
			<button type="button" class="btn btn-outline-dark"><i class="fas fa-plus-circle"></i> Add
				Admin</button>
		</a>
	</div>
	<div class="container">
		<div class="from-goup row">
			<div class="col-2"></div>
			<div class="col-10">
				<table class="table table-bordered" width="100%">
					<thead ALIGN="center">
						<tr>
							<th>Nama</th>
							<th>Jabatan</th>
							<th>Last Login</th>
							<th>Izin Login</th>
							<th>Opsi</th>
						</tr>
					</thead>

					<tbody ALIGN="center">
						<?php 
							foreach ($admin as $item) {
								?>
						<tr>
							<td><?= $item->nama ?></td>
							<td><?php echo  ($item->jabatan == 1)? "Owner" : "Karyawan"; ?></td>
							<td><?= $item->lastLogin ?></td>
							<td><?php echo ($item->izin)? "Ya" : "Tidak" ?></td>
							<td class="d-flex justify-content-around">
								<!-- <a href=""><i class="far fa-check-circle"></i></a> -->
								<?php 
									if ($item->jabatan != 1 && $this->session->userdata('id') == 1) {
										echo '<a href="'.base_url('index.php/admin/izin/').$item->id.'"><i class="fas fa-user-check"></i></a>';
										echo '<a href="'.base_url('index.php/admin/delete/').$item->id.'"><i class="fas fa-trash"></i></a>';
									}

									if ($this->session->userdata('id') == 1) {
										echo '<a href="'.base_url('index.php/admin/edit/').$item->id.'"><i class="fas fa-edit"></i></a>';

									}
								?>
								
								<a href="<?= base_url('index.php/admin/info/').$item->id ?>"><i class="fas fa-info-circle"></i></a>
								
							</td>
						</tr>
								<?php
							}
						
						?>
						
					</tbody>
				</table>
			</div>
		</div>

	</div>
	<div id="footer">
		<footer class=" sticky-footer bg-white">
			<div class="copyright text-center mt-6">
				<span>Copyright &copy; Your Website 2019</span>
			</div>
		</footer>
	</div>
</div>
</div>
