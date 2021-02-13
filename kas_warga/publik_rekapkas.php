<?php 
require 'functions.php';
$data = kaswarga("SELECT * FROM kas_warga");
// pemasukan
$result1 = mysqli_query($conn,"SELECT * FROM kas_warga WHERE masuk");
$tot_masuk = 0;
while($masuk = mysqli_fetch_assoc($result1)) {
	$tot_masuk += $masuk["masuk"];
}
// pengeluaran
$result2 = mysqli_query($conn,"SELECT * FROM kas_warga WHERE keluar");
$tot_keluar = 0;
while($keluar = mysqli_fetch_assoc($result2)) {
	$tot_keluar += $keluar["keluar"];
}
?>
<div class="alert alert-info alert-dismissible" style="margin-bottom:5px;">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h5>
		<i class="icon fas fa-info"></i> Saldo Kas Warga</h5>
	<h5>Pemasukan :
		<?= rupiah($tot_masuk); ?>
	</h5>

	<h5>Pengeluaran :
		<?= rupiah($tot_keluar); ?>
	</h5>
	<hr>

	<h3>Saldo Akhir :
		<?= rupiah($tot_masuk - $tot_keluar); ?>
	</h3>
</div>
<div class="card card-info ">
	<div class="card-header bg-primary">
		<h3 class="card-title">
			<i class="fa fa-table"></i>  Rekapitulasi Kas Warga
        </h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
            <br>
			<table id="example1" class="table table-bordered table-striped table-sm display"style="font-size:14px;">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
                        <th>Uraian</th>
						<th>Pemasukan</th>
                        <th>Pengeluaran</th>
					</tr>
				</thead>
				<tbody>
				<?php $i=1; ?>
				<?php foreach($data as $kas) : ?>
					<tr>
						<td><?= $i++; ?></td>
						<td><?= $kas["tanggal"]; ?></td>
                        <td><?= $kas["uraian"]; ?></td>
                        <td><?= rupiah($kas["masuk"]); ?></td>
                        <td><?= rupiah($kas["keluar"]); ?></td>
					</tr>
               <?php endforeach ; ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>