<!--title-->
<section id="title">
        <div class="d-flex justify-content-between">
            <div>
                <p>Info Admin</p>
            </div>
            <div>
                <a href="<?php echo base_url(); ?>index.php/customer"> <i class="fa fa-home h2"></i></a>
            </div>
        </div>
    </section>
    <!--end of title-->

    <!--form-->
    <div class="container">
        <div class="content">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td>: <?= $admin[0]->nama ?></td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>: <?= $admin[0]->umur ?></td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>: <?= $admin[0]->alamat ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

            <br>

            <br>
        <div>
        <h5>Riwayat customer yang dilayani</h5>
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