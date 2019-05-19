<?php 
    $jumlah = 0;

    foreach ($total as $key) {
        $jumlah += $key;
    }

    $bulan = date('m');
?>
<div class="container mt-4">

	<div class="d-flex justify-content-between" id="nama">
		<h2>STATISTIK </h2>
	</div>
	<div class="row offset-2">

        <div class="col mx-2 border keuangan-item">
            <div class="text-center p-2 bg-primary text-light">
                <i class="fas fa-users display-3"></i>
            </div>
            <div class="p-1">
                <p>Customer bulan ini</p>
                <h3><?= $keuangan[$bulan-1] ?></h3>
            </div>
        </div>
        <div class="col mx-2 border keuangan-item">
            <div class="text-center p-2 bg-primary text-light">
                <i class="fas fa-money-check-alt display-3"></i>
            </div>
            <div class="p-1">
                <p>Pendapatan bulan ini</p>
                <h3>Rp. <?= $jumlah ?></h3>
            </div>
        </div>
        <div class="col mx-2 border keuangan-item">
            <div class="text-center p-2 bg-primary text-light">
            <i class="far fa-address-card display-3"></i>
            </div>
            <div class="p-1">
                <p>Total member</p>
                <h3><?= $totalMember ?></h3>
            </div>
        </div>


	</div>

    <div class="row offset-2">
            <div class="col">
                <canvas id="myChart" width="400" height="400"></canvas>
            </div>
            <div class="col">
                <canvas id="customer" width="400" height="400"></canvas>
            </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var ctx2 = document.getElementById('customer').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober','November','Desember'],
        datasets: [{
            label: 'Jumlah Customer',
            data: [
                <?php 
                    for ($i=0; $i <12 ; $i++) {
                        if ($i != 11) {
                            echo $keuangan[$i].",";
                        } 
                        else {
                            echo $keuangan[$i];
                        }
                    }    
                ?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});



var myChart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober','November','Desember'],
        datasets: [{
            label: 'Pendapatan',
            data: [
                <?php 
                    for ($i=0; $i <12 ; $i++) {
                        if ($i != 11) {
                            echo $total[$i].",";
                        } 
                        else {
                            echo $total[$i];
                        }
                    }    
                ?>
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>