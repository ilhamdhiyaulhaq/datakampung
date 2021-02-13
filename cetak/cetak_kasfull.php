<?php
require '../functions.php';
require '../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$data = kaswarga("SELECT * FROM kas_warga");

// pemasukan
$result = mysqli_query($conn,"SELECT * FROM kas_warga WHERE masuk");
$tot_masuk = 0;
while($masuk = mysqli_fetch_assoc($result)) {
  $tot_masuk += $masuk["masuk"];
}

// pengeluaran
$result = mysqli_query($conn,"SELECT * FROM kas_warga WHERE keluar");
$tot_keluar = 0;
while($keluar = mysqli_fetch_assoc($result)) {
  $tot_keluar += $keluar["keluar"];
}

$html= '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2 align="center">Laporan Rekapitulasi Kas Warga</h2><hr><br><br>
  <table border="1" cellspacing="0" align="center" style="width:100%;">
            <thead>
                <tr>
                      <th>No.</th>
                      <th>Tanggal</th>
                      <th>Uraian</th>
                      <th>Pemasukan</th>
                      <th>Pengeluaran</th>
                </tr>
            </thead>
            <tbody>';
    $i = 1;
    foreach($data as $kas) {
   $html .='  <tr>
                  <td align="center">'.$i++.'</td>
                  <td>'.$kas["tanggal"].'</td> 
                  <td>'.$kas["uraian"].'</td>
                  <td align="right">'.rupiah($kas["masuk"]).'</td>  
                  <td align="right">'.rupiah($kas["keluar"]).'</td>   
              </tr>';
      }
  $html .= ' </tbody>';

  $html .=   ' <tr>
                  <td colspan="3">Total Pemasukan</td>
                  <td colspan="2">'.rupiah($tot_masuk).'</td>
               </tr>
               <tr>
                  <td colspan="4">Total Pengeluaran</td>
                  <td colspan="1">'.rupiah($tot_keluar).'</td>
               </tr>
               <tr>
                  <td colspan="3">Saldo Kas Masjid</td>
                  <td colspan="2" align="center">'.rupiah($tot_masuk - $tot_keluar).'</td>
              </tr>';
$html .='  </table>
    </body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();
?>