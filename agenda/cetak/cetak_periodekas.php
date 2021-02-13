<?php
    require '../functions.php';

    $dt1 = $_POST["tgl_1"];
    $dt2 = $_POST["tgl_2"];

    // pemasukan
$result = mysqli_query($conn,"SELECT * FROM kas_warga WHERE masuk AND tanggal BETWEEN '$dt1' AND '$dt2'");
$tot_masuk = 0;
while($masuk = mysqli_fetch_assoc($result)) {
  $tot_masuk += $masuk["masuk"];
}

// pengeluaran
$result = mysqli_query($conn,"SELECT * FROM kas_warga WHERE keluar AND tanggal BETWEEN '$dt1' AND '$dt2'");
$tot_keluar = 0;
while($keluar = mysqli_fetch_assoc($result)) {
  $tot_keluar += $keluar["keluar"];
}

$saldo = $tot_masuk - $tot_keluar;
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <title>Laporan Kas Warga</title>
</head>
<body>
<center>
<h2>Laporan Rekapitulasi Kas Warga</h2>
<p>Periode : <?php $a=$dt1; echo date("d-M-Y", strtotime($a))?> s/d <?php $b=$dt2; echo date("d-M-Y", strtotime($b))?>
<hr><br>

  <table border="1" cellspacing="0" style="width:100%;">
    <thead>
      <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Uraian</th>
            <th>Pemasukan</th>
            <th>Pengeluaran</th>
      </tr>
    </thead>
    <tbody>
        <?php

        if(isset($_POST["btnCetak"])){
           
            $sql_tampil = "SELECT * FROM kas_warga WHERE tanggal BETWEEN '$dt1' AND '$dt2' ORDER BY tanggal asc";
            }
            $query_tampil = mysqli_query($conn, $sql_tampil);
            $no=1;
            while ($data = mysqli_fetch_assoc($query_tampil)) {
        ?>
         <tr>
            <td align="center"><?php echo $no; ?></td>
            <td><?php  $tgl = $data['tanggal']; echo date("d/M/Y", strtotime($tgl))?></td> 
            <td><?php echo $data['uraian']; ?></td>
            <td align="right"><?php echo rupiah($data['masuk']); ?></td>  
            <td align="right"><?php echo rupiah($data['keluar']); ?></td>   
        </tr>
        <?php
            $no++;
            }
        ?>
    </tbody>
    <tr>
        <td colspan="3">Total Pemasukan</td>
        <td colspan="2"><?php echo rupiah($tot_masuk); ?></td>
    </tr>
    <tr>
        <td colspan="4">Total Pengeluaran</td>
        <td><?php echo rupiah($tot_keluar); ?></td>
    </tr>
    <tr>
        <td colspan="3">Saldo Kas Masjid</td>
        <td colspan="2" align="center"><?php echo rupiah($saldo); ?></td>
    </tr>
  </table>
</center>

<script>
    window.print();
</script>
</body>
</html>