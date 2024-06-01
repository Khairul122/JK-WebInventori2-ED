<!doctype html>
<html class="no-js" lang="en">
<?php 
include '../dbconnect.php';
include 'cek.php';
?>

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Logistics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-144808195-1');
    </script>
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        
        <div class="sidebar-menu">
            <div class="sidebar-header">
                    <a href="index.php"><img src="../logo1.png" alt="logo1" width="80%"></a>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                <nav>
                        <ul class="metismenu" id="menu">
                        <li>
                                <a href="home.php"><span>Home</span></a>
                            </li>
                            <li>
                                <a href="stock.php"><i class="ti-dashboard"></i><span>Stock Barang</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Transaksi Data
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="masuk.php">Barang Masuk / Kembali</a></li>
                                    <li><a href="keluar.php">Barang Keluar</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="index.php"><span>Notes</span></a></li>
                            <li>
                                <a href="logout.php"><span>Logout</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <h2>Selamat Datang</h2>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li><h3><div class="date">
                                <script type='text/javascript'>
                        <!--
                        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                        var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                        var date = new Date();
                        var day = date.getDate();
                        var month = date.getMonth();
                        var thisDay = date.getDay(),
                            thisDay = myDays[thisDay];
                        var yy = date.getYear();
                        var year = (yy < 1000) ? yy + 1900 : yy;
                        document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);       
                        //-->
                        </script></b></div></h3>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <?php 
                $periksa_bahan=mysqli_query($conn,"select * from sstock_brg where stock <1");
                while($p=mysqli_fetch_array($periksa_bahan)){   
                    if($p['stock']<=1){   
                        ?>  
                        <script>
                            $(document).ready(function(){
                                $('#pesan_sedia').css("color","white");
                                $('#pesan_sedia').append("<i class='ti-flag'></i>");
                            });
                        </script>
                        <?php
                        echo "<div class='alert alert-danger alert-dismissible fade show'><button type='button' class='close' data-dismiss='alert'>&times;</button>Stok  <strong><u>".$p['nama']. "</u> <u>".($p['merk'])."</u> &nbsp <u>".$p['ukuran']."</u></strong> yang tersisa sudah habis</div>";     
                    }
                }
            ?>
            
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right" style="color:black; padding:0px;">
                            <img src="log.jpg" width="220px" class="user-name dropdown-toggle" data-toggle="dropdown"\>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-center">Barang Keluar</h4>
                                <canvas id="barangKeluarChart" width="400" height="200"></canvas>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-body">
                                <h4 class="text-center">Barang Masuk</h4>
                                <canvas id="barangMasukChart" width="400" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script>
    $(document).ready(function() {
        var ctxKeluar = document.getElementById('barangKeluarChart').getContext('2d');
        var ctxMasuk = document.getElementById('barangMasukChart').getContext('2d');

        var chartKeluar = new Chart(ctxKeluar, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    label: 'Jumlah Barang Keluar',
                    data: [],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return this.getLabelForValue(value).substring(0, 15); // Memotong label agar lebih pendek
                            }
                        }
                    },
                    y: {
                        beginAtZero: true,
                        suggestedMax: 100 // Sesuaikan batas maksimum sesuai kebutuhan
                    }
                }
            }
        });

        var chartMasuk = new Chart(ctxMasuk, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    label: 'Jumlah Barang Masuk',
                    data: [],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return this.getLabelForValue(value).substring(0, 15); // Memotong label agar lebih pendek
                            }
                        }
                    },
                    y: {
                        beginAtZero: true,
                        suggestedMax: 100 // Sesuaikan batas maksimum sesuai kebutuhan
                    }
                }
            }
        });

        function updateChartKeluar() {
            var currentMonth = new Date().getMonth() + 1; // bulan saat ini
            var currentYear = new Date().getFullYear(); // tahun saat ini

            $.ajax({
                url: 'get_barang_keluar_data.php',
                method: 'GET',
                data: { month: currentMonth, year: currentYear },
                success: function(response) {
                    var labels = response.map(function(item) {
                        return `${item.nama} (${item.tgl})`; 
                    });
                    
                    var values = response.map(function(item) {
                        return item.jumlah;
                    });

                    chartKeluar.data.labels = labels;
                    chartKeluar.data.datasets[0].data = values;
                    chartKeluar.update();
                }
            });
        }

        function updateChartMasuk() {
            var currentMonth = new Date().getMonth() + 1; // bulan saat ini
            var currentYear = new Date().getFullYear(); // tahun saat ini

            $.ajax({
                url: 'get_barang_masuk_data.php',
                method: 'GET',
                data: { month: currentMonth, year: currentYear },
                success: function(response) {
                    var labels = response.map(function(item) {
                        return `${item.nama} (${item.tgl})`; // Nama barang dan tanggal
                    });
                    var values = response.map(function(item) {
                        return item.jumlah;
                    });

                    chartMasuk.data.labels = labels;
                    chartMasuk.data.datasets[0].data = values;
                    chartMasuk.update();
                }
            });
        }

        updateChartKeluar();
        updateChartMasuk();
        setInterval(updateChartKeluar, 5000); // Memperbarui setiap 5 detik
        setInterval(updateChartMasuk, 5000); // Memperbarui setiap 5 detik
    });
    </script>
</body>
</html>
