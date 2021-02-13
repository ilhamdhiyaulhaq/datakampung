<?php 
require 'functions.php';

$data = kaswarga("SELECT * FROM kas_warga WHERE keluar");
?>
<div class="alert alert-danger alert-dismissible" style="margin-bottom:5px;">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

	<h5>
		<i class="icon fas fa-info"></i> Total Pengeluaran
    </h5>
    <?php 
        $result = mysqli_query($conn,"SELECT * FROM kas_warga WHERE keluar");
        $tot_keluar = 0;
        while($kas = mysqli_fetch_assoc($result)) {
            $tot_keluar += $kas["keluar"];
        }
    ?>

	<h2>
		<?= rupiah($tot_keluar); ?>
	</h2>

</div>
<div class="card card-info ">
	<div class="card-header bg-info">
		<h3 class="card-title">
			<i class="fa fa-table"></i>  Data Pengeluaran Kas
        </h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
            <div>
				<a href="?page=o_add_keluar" class="btn btn-primary">
				<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
            <br>
			<table id="example1" class="table table-bordered table-striped table-sm display"style="font-size:14px;">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
                        <th>Uraian</th>
						<th>Pengeluaran</th>
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
                        <td><?= rupiah($kas["keluar"]); ?></td>
						<td>
							<a href="?page=o_update_kas&id=<?= $kas['id']; ?>" title="Ubah">
								<i class="fa fa-edit bg-success p-1 rounded"></i>
							</a>
							<a href="?page=o_del_kas&id=<?= $kas['id']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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