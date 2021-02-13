<?php  

require 'functions.php';

$admin = query("SELECT * FROM level WHERE level = 'Bendahara'");

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
						<center>
							<a href="?page=edit_bendahara&id=<?= $user['id']; ?>" title="Ubah">
								<i class="fa fa-edit bg-success p-1 rounded">Edit</i>
							</a>
						</center>
						</td>
					</tr>
                <?php endforeach ; ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->