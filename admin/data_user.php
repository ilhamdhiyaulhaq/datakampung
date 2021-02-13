<?php  

require 'functions.php';

$admin = query("SELECT * FROM level");

?>
<div class="card card-info ">
	<div class="card-header bg-info">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data User
        </h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add_user" class="btn btn-primary">
					<i class="fa fa-edit"></i> Regristrasi</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped table-sm display" style="font-size:14px;">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama User</th>
						<th>Username</th>
                        <th>Level</th>
                        <th>Aksi</th>
					</tr>
				</thead>
				<tbody>
                <?php $i = 1; ?>
                <?php foreach($admin as $user) : ?>
					<tr>
						<td><?= $i++; ?></td>
						<td><?= $user["nama_user"]; ?></td>
                        <td><?= $user["username"]; ?></td>
                        <td><?= $user["level"]; ?></td>
						<td>
							<a href="?page=edit_user&id=<?= $user['id']; ?>" title="Ubah">
								<i class="fa fa-edit bg-success p-1 rounded"></i>
							</a>
							<a href="?page=del_user&id=<?= $user['id']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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
	<!-- /.card-body -->