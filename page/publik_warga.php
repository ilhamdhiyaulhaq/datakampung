<?php  
require 'functions.php';

// function tampil tb_warga
$data_warga = query("SELECT * FROM tb_warga");
?>
<div class="card card-info ">
	<div class="card-header bg-info">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Seluruh Data Warga
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
					</tr>
				</thead>
				<tbody>
                <?php $no = 1; ?>
                <?php foreach($data_warga as $warga): ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $warga["nama_warga"]; ?></td>
                        <td><?= $warga["tempat"]; ?></td>
                        <td><?= $warga["ttl"]; ?></td>
						<td><?= $warga["jenis_kelamin"]; ?></td>
						<td><?= $warga["rt"]; ?></td>
                        <td><?= $warga["nik"]; ?></td>
                        <td><?= $warga["nkk"]; ?></td>
					</tr>
				<?php $no++; ?>
                <?php endforeach ; ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->