<?php 
require 'functions.php';
$rt4 = query("SELECT * FROM tb_warga WHERE rt = '04' ");
$jumlahRt4 = count($rt4);
?>
<div class="alert alert-info alert-dismissible" style="margin-bottom:5px;">
	<button type="button" class="close bg-dark rounded" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4>
		<i class="icon fas fa-info"></i><b>Total <?= $jumlahRt4; ?> Warga</b>
	</h>
</div>
<div class="card card-info ">
	<div class="card-header bg-danger">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Seluruh Data Warga RT 4
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
				<?php foreach($rt4 as $Rt4) : ?>
					<tr>
						<td><?= $i++; ?></td>
						<td><?= $Rt4["nama_warga"]; ?></td>
                        <td><?= $Rt4["tempat"]; ?></td>
                        <td><?= $Rt4["ttl"]; ?></td>
						<td><?= $Rt4["jenis_kelamin"]; ?></td>
						<td><?= $Rt4["rt"]; ?></td>
                        <td><?= $Rt4["nik"]; ?></td>
                        <td><?= $Rt4["nkk"]; ?></td>
						<td>
							<a href="?page=editrt4&id=<?= $Rt4['id']; ?>" title="Ubah">
								<i class="fa fa-edit bg-success p-1 rounded"></i>
							</a>
							<a href="?page=delrt4&id=<?= $Rt4['id']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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