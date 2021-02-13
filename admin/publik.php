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
			<table id="example1" class="table table-bordered table-striped table-sm display" style="font-size:14px;">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama User</th>
						<th>Username</th>
                        <th>Level</th>
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
					</tr>
                <?php endforeach ; ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->