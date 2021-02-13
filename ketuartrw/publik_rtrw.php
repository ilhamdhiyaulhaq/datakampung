<?php 
require 'functions.php';

$data = rtrw("SELECT * FROM tb_rtrw");
?>
<div class="card card-info ">
	<div class="card-header bg-info">
		<h3 class="card-title">
			<i class="fa fa-table"></i>  Data Ketua RT & RW
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
						<th>Nama</th>
                        <th>Alamat</th>
						<th>Jabatan</th>
                        <th>Periode Jabatan</th>
					</tr>
				</thead>
				<tbody>
                <?php $i = 1; ?>
                <?php foreach($data as $rtrw) : ?>
					<tr>
						<td><?= $i++; ?></td>
						<td><?= $rtrw["nama"]; ?></td>
                        <td><?= $rtrw["alamat"]; ?></td>
                        <td><?= $rtrw["jabatan"]; ?></td>
                        <td><?= $rtrw["periode_jabatan"]; ?></td>
					</tr>
                <?php endforeach ; ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>