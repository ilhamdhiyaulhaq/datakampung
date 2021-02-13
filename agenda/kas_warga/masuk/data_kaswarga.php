<?php 
require 'functions.php';

$data = kaswarga("SELECT * FROM kas_warga WHERE masuk");
?>
<div class="alert alert-success alert-dismissible" style="margin-bottom:5px;">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

	<h5>
		<i class="icon fas fa-info"></i> Total Pemasukan
    </h5>
    <?php 
        $result = mysqli_query($conn,"SELECT * FROM kas_warga WHERE masuk");
        $tot_kasmasuk = 0;
        while($kas = mysqli_fetch_assoc($result)) {
            $tot_kasmasuk += $kas["masuk"];
        }
    ?>

	<h2>
		<?= rupiah($tot_kasmasuk); ?>
	</h2>

</div>
<div class="card card-info ">
	<div class="card-header bg-info">
		<h3 class="card-title">
			<i class="fa fa-table"></i>  Data Pemasukan Kas
        </h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
            <div>
				<a href="?page=i_add_masuk" class="btn btn-primary">
				<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
            <br>
			<table id="example1" class="table table-bordered table-striped table-sm display"style="font-size:14px;">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
                        <th>Uraian</th>
						<th>Pemasukan</th>
                        <th>Aksi</th>
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
						<td>
							<a href="?page=i_update_kas&id=<?= $kas['id']; ?>" title="Ubah">
								<i class="fa fa-edit bg-success p-1 rounded"></i>
							</a>
							<a href="?page=i_del_kas&id=<?= $kas['id']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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