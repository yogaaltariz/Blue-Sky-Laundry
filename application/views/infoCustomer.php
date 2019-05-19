<?php 
    $data = $customer[0];

?>
<section id="title">
        <div class="d-flex justify-content-between">
            <div>
                <p>Info Customer</p>
            </div>
            <div>
                <a href="<?php echo base_url(); ?>index.php/customer"> <i class="fa fa-home h2"></i></a>
            </div>
        </div>
    </section>


<div class="container">
    <table class="table mt-2">

        <tbody>
            <tr>
                <td>No. Invoice </td>
                <td><?= $data['id'] ?></td>
            </tr>
            <tr>
                <td>Nama Pelanggan</td>
                <td><?= $data['nama'] ?></td>
            </tr>
            <tr>
                <td>Paket</td>
                <td><?= $data['paket'] ?></td>
            </tr>
            <tr>
                <td><strong>Rincian laundry</strong></td>
                <td>
                    <div class="mx-1">
                        <tr>
                            <td>Baju</td>
                            <td><?= $data['baju'] ?></td>
                        </tr>
                        <tr>
                            <td>celana</td>
                            <td><?= $data['celana'] ?></td>
                        </tr>
                        <tr>
                            <td>sprei</td>
                            <td><?= $data['sprei'] ?></td>
                        </tr>
                        <tr>
                            <td>lain-lain</td>
                            <td><?= $data['lain'] ?></td>
                        </tr>
                    </div>
                </td>
            </tr>
            
            <tr>
                <td>Total tagihan</td>
                <td><?= $data['harga'] ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= $data['alamat']." kecamatan ".$data['kecamatan'] ?></td>
            </tr>
            <tr>
                <td>Tanggal order</td>
                <td><?= $data['tglOrder'] ?></td>
            </tr>
            <tr>
                <td>Tanggal selesai</td>
                <td><?= $data['tglSelesai'] ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><?= $data['status'] ?></td>
            </tr>
            <tr>
                <td>ID Member</td>
                <td><?= $data['idMember'] ?></td>
            </tr>
            <tr>
                <td>Layanan antar</td>
                <td><?= $data['antar'] ?></td>
            </tr>
   
        </tbody>

    </table>

</div>