<?php 
require 'functions.php';
$rt8 = query("SELECT * FROM tb_warga WHERE rt = '08' ");
$jumlahRt8 = count($rt8);
?>
<div class="alert alert-info alert-dismissible" style="margin-bottom:5px;">
	<button type="button" class="close bg-dark rounded" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4>
		<i class="icon fas fa-info"></i><b>Total <?= $jumlahRt8; ?> Warga</b>
	</h>
</div>
<div class="card card-info ">
	<div class="card-header bg-danger">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Seluruh Data Warga RT 8
        </h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="example1" class="table table-bordered table-striped table-sm display" style="font-size:14px;">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Tempat Lahir</th>
                        <th>Tgl Lahir</th>
						<th>Jenis Kelamin</th>
						<th>RT</th>
                        <th>NIK</th>
                        <th>NKK</th>
                        <th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php $i=1; ?>
				<?php foreach($rt8 as $Rt8) : ?>
					<tr>
						<td><?= $i++; ?></td>
						<td><?= $Rt8["nama_warga"]; ?></td>
                        <td><?= $Rt8["tempat"]; ?></td>
                        <td><?= $Rt8["ttl"]; ?></td>
						<td><?= $Rt8["jenis_kelamin"]; ?></td>
						<td><?= $Rt8["rt"]; ?></td>
                        <td><?= $Rt8["nik"]; ?></td>
                        <td><?= $Rt8["nkk"]; ?></td>
						<td>
							<a href="?page=editrt8&id=<?= $Rt8['id']; ?>" title="Ubah">
								<i class="fa fa-edit bg-success p-1 rounded"></i>
							</a>
							<a href="?page=delrt8&id=<?= $Rt8['id']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus">
								<i class="fa fa-trash bg-danger p-1 rounded"></i>
                            </a>
						</td>
					</tr>
				<?php endforeach ; ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>