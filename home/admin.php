<?php 
require 'functions.php';
$jumlah_warga = query("SELECT * FROM tb_warga");
$jumlah_pengguna = admin("SELECT * FROM level");
// total pemasukan
$result = mysqli_query($conn,"SELECT * FROM kas_warga WHERE masuk");
$tot_masuk = 0;
while($jumlah = mysqli_fetch_assoc($result)) {
    $tot_masuk += $jumlah["masuk"];
}

// total pengeluaran
$result = mysqli_query($conn,"SELECT * FROM kas_warga WHERE keluar");
$tot_keluar = 0;
while($jumlah = mysqli_fetch_assoc($result)) {
    $tot_keluar += $jumlah["keluar"];
}
?>     
            <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3><?= count($jumlah_warga); ?></h3>
                                <p>Seluruh Data Warga</p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-users"></i>
                            </div>
                            <a href="?page=tb_warga" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3><?= rupiah($tot_masuk - $tot_keluar); ?></h3>
                                <p>Saldo Kas Warga</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="?page=rekap" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><?= count($jumlah_pengguna); ?></h3>
                                <p>Pengguna System</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <a href="?page=publik" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            </section>