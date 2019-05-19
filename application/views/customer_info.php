<?php 
    $data = $customer[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
   
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- googlefont style -->
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Nunito|Permanent+Marker" rel="stylesheet">

    <!-- style -->
    <link href="<?php echo base_url(); ?>css/master.css" rel="stylesheet">


    <title>Document</title>
</head>
<body>
    
    <!-- As a link -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url('index.php/home') ?>">BlueSky</a>
    </nav>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
</html>