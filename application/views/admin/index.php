<?php $this->load->view('layouts/header_admin'); ?>

<div class="mb-4">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Sensor Lingkungan PT Pusri</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-3">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= base_url('Kriteria'); ?>" class="text-secondary text-decoration-none">Kecepatan Angin</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-cube fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-3">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= base_url('Sub_Kriteria'); ?>" class="text-secondary text-decoration-none">Suhu</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-cubes fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-3">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= base_url('Alternatif'); ?>" class="text-secondary text-decoration-none">Kelembapan</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>





       <div class="col-xl-8 col-md-12 mb-3">
            <div class="card border-left-info shadow py-2" style="height: 25rem;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mt-0 text-gray-900" style="font-weight: 600;">LOKASI SENSOR PT PUSRI SRIWIDJAJA</div>
                        </div>

                        <div class="col-auto">
                            <i class="fas fa-map-marked-alt text-gray-300" style="font-size: xx-large;"></i>
                        </div>
                    </div>

                </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1272.1062087102193!2d104.79979231542508!3d-2.969684920877565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b77d2e6ac9abb%3A0x61f2677f6bbd48d!2sPUSRI!5e0!3m2!1sid!2sid!4v1641893303814!5m2!1sid!2sid" style="border:0; margin: 1%;" allowfullscreen="" loading="lazy" height="100%"></iframe>
            </div>
        </div>

         <div class="col-xl-4 col-md-6 mb-3">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= base_url('Alternatif'); ?>" class="text-secondary text-decoration-none">Arah Mata Angin</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        

        


        <div class="col-xl-4 col-md-6 mb-3">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <canvas id="myChart" ></canvas>
                    <?php
                    //Inisialisasi nilai variabel awal
                    $nama_jurusan= "";
                    $jumlah=null;
                    foreach ($hasil as $item)
                    {
                        $jur=$item->jurusan;
                        $nama_jurusan .= "'$jur'". ", ";
                        $jum=$item->total;
                        $jumlah .= "$jum". ", ";
                    }
                    ?>
                </div>
            </div>
        </div>


        <div class="col-xl-4 col-md-6 mb-3">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <canvas id="myChart2" ></canvas>
                    <?php
                    //Inisialisasi nilai variabel awal
                    $nama_jurusan= "";
                    $jumlah=null;
                    foreach ($hasil as $item)
                    {
                        $jur=$item->jurusan;
                        $nama_jurusan .= "'$jur'". ", ";
                        $jum=$item->total;
                        $jumlah .= "$jum". ", ";
                    }
                    ?>
                </div>
            </div>
        </div>

         <div class="col-xl-4 col-md-6 mb-3">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <canvas id="myChart3" ></canvas>
                    <?php
                    //Inisialisasi nilai variabel awal
                    $nama_jurusan= "";
                    $jumlah=null;
                    foreach ($hasil as $item)
                    {
                        $jur=$item->jurusan;
                        $nama_jurusan .= "'$jur'". ", ";
                        $jum=$item->total;
                        $jumlah .= "$jum". ", ";
                    }
                    ?>
                </div>
            </div>
        </div>





        <!-- </div> -->




    </div>
</div>

<!-- Content Row -->

<?php $this->load->view('layouts/footer_admin'); ?>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',
        // The data for our dataset
        data: {
            labels: [<?php echo $nama_jurusan; ?>],
            datasets: [{
                label:'Grafik Kecepatan Angin ',
                backgroundColor: ['rgb(175, 238, 239)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>

<script>
    var ctx = document.getElementById('myChart2').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',
        // The data for our dataset
        data: {
            labels: [<?php echo $nama_jurusan; ?>],
            datasets: [{
                label:'Grafik Suhu ',
                backgroundColor: ['rgb(175, 238, 239)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>

<script>
    var ctx = document.getElementById('myChart3').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',
        // The data for our dataset
        data: {
            labels: [<?php echo $nama_jurusan; ?>],
            datasets: [{
                label:'Grafik Kelembapan ',
                backgroundColor: ['rgb(175, 238, 239)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>