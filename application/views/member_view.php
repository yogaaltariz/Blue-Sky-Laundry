<div class="container">
	<div class="adm-btn align-items-center justify-content-between" id="nama">
		<h2>Member</h2>
		<a href="<?php echo base_url(); ?>index.php/member/add">
			<button type="button" class="btn btn-outline-dark">
				<i class="fas fa-plus-circle"></i> Add Member
			</button>
		</a>
	</div>
	<div class="container">
		<div class="from-goup row">
			<div class="col-2"></div>
			<div class="col-10">
				<table class="table table-bordered mt-3">
					<thead>
						<tr>
							<th scope="col">Nama</th>
							<th scope="col">Alamat</th>
							<th scope="col">Email</th>
							<th scope="col">Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							foreach($member as $item){
								?>
							<tr>
								<td><?= $item->nama ?></td>
								<td><?= $item->alamat." kecamatan ".$item->kecamatan ?></td>
								<td><?= $item->email ?></td>
								<td ALIGN="center">
									<a href="<?= base_url('index.php/member/info/').$item->id ?>">
										<i class="fas fa-info mx-1"></i>
									</a>
									<a href="<?= base_url('index.php/member/edit/').$item->id ?>">
										<i class="fas fa-edit"></i>
									</a>
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
