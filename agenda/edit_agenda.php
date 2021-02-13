<?php  
require 'functions.php';
// ambil id dari url
$id = $_GET["id"];
// siapkan data untuk value
$result = agenda("SELECT * FROM tb_agenda WHERE id=$id")[0];
// cek jika tombol simpan di tekan
if(isset($_POST["simpan"])) {
    if(edit_agenda($_POST) > 0) {
            echo "<script>
            Swal.fire({title: 'Update Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {if (result.value){
                window.location = '?page=tb_agenda';
                }
            })</script>";
    } else{
            echo "<script>
            Swal.fire({title: 'Update Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
            }).then((result) => {if (result.value){
                window.location = '?page=tb_agenda';
                }
            })</script>";
    } 
}
?>
<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Update Kegiatan</h3>
	</div>
    <form action="" method="post" >
		<div class="card-body">
        <input type="hidden" class="form-control" name="id" value="<?= $result["id"];?>">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Kegiatan</label>
				<div class="col-sm-4">
					<input type="date" class="form-control" name="tgl_kegiatan" value="<?= $result['tgl_kegiatan']; ?>"  required>
				</div>
			</div>

			<div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Kegiatan</label>
				<div class="col-sm-4">
                    <input type="text" class="form-control" name="nama_kegiatan" value="<?= $result['nama_kegiatan']; ?>" placeholder="Maukan nama kegiatan" required>
				</div>
			</div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Keterangan</label>
				<div class="col-sm-4">
                    <textarea name="keterangan" style="width:500px; height:100px;" placeholder="Masukan keterangan kegiatan" value="<?= $result['keterangan']; ?>"><?php if($result['keterangan'] === $result['keterangan']) echo $result['keterangan']?></textarea>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-info">
			<a href="?page=tb_agenda" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>
