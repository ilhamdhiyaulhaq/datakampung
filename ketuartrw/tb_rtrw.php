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
            <div>
				<a href="?page=add_rtrw" class="btn btn-primary">
				<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
            <br>
			<table id="example1" class="table table-bordered table-striped table-sm display"style="font-size:14px;">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
                        <th>Alamat</th>
						<th>Jabatan</th>
                        <th>Periode Jabatan</th>
                        <th>Aksi</th>
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
						<td>
							<a href="?page=edit_rtrw&id=<?= $rtrw['id']; ?>" title="Ubah">
								<i class="fa fa-edit bg-success p-1 rounded"></i>
							</a>
							<a href="?page=del_rtrw&id=<?= $rtrw['id']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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