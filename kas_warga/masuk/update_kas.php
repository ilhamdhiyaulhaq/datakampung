<?php 
 require 'functions.php';

 $id = $_GET["id"];
 $edit = kaswarga("SELECT * FROM kas_warga WHERE id = $id")[0];

 if(isset($_POST["simpan"])) {
     if(i_update_kas($_POST) > 0) {
        echo "<script>
        Swal.fire({title: 'Update Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {if (result.value){
            window.location = 'index.php?page=i_kas_masuk';
            }
        })</script>";
     } else {
        echo "<script>
        Swal.fire({title: 'Update Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {if (result.value){
            window.location = '?page=i_update_kas';
            }
        })</script>";
     }
 }
 ?>
<div class="card card-info">
	<div class="card-header bg-info">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Update Data Pemasukan
        </h3>
	</div>
    <form action="" method="post" >
		<div class="card-body">
        <input type="hidden" class="form-control" id="tanggal" name="id" value="<?= $edit['id'];?>">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal</label>
				<div class="col-sm-4">
					<input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $edit['tanggal'];?>" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Uraian</label>
				<div class="col-sm-4">
                    <input type="text" class="form-control" id="uraian" name="uraian" value="<?= $edit['uraian'];?>" placeholder="Masukan uraian pengeluaran"required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Pemasukan (Rp.)</label>
				<div class="col-sm-4">
                    <input type="text" class="form-control" id="masuk" name="masuk" value="<?= $edit['masuk'];?>" placeholder="Masukan total pengeluaran"required>
				</div>
			</div>
			
		</div>
		<div class="card-footer">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-info">
			<a href="?page=o_kas_masuk" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>
