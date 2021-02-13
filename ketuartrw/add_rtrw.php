<?php  
require 'functions.php';

if(isset($_POST["simpan"])) {
    if(add_rtrw($_POST) > 0) {
        echo "<script>
        Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {if (result.value){
            window.location = '?page=tb_rtrw';
            }
        })</script>";
    } else {
        echo "<script>
        Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {if (result.value){
            window.location = '?page=tb_rtrw';
            }
        })</script>";
    }
}
?>
<div class="card card-info">
	<div class="card-header bg-info">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data RT & RW
        </h3>
	</div>
    <form action="" method="post" >
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="nama" placeholder="Masukan nama anda"required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-4">
                    <textarea name="alamat" style="width:250px; height:100px;"id="" placeholder="masukan alamat anda"></textarea><br>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jabatan</label>
				<div class="col-sm-8">
                    <select name="jabatan"  required class="rounded">
                        <option >-- Pilih --</option>
                        <option value="Ketua RW 04">Ketua RW 04</option>
                        <option value="Ketua RT 01 RW 04">Ketua RT 01 RW 04</option>
                        <option value="Ketua RT 02 RW 04">Ketua RT 02 RW 04</option>
                        <option value="Ketua RT 03 RW 04">Ketua RT 03 RW 04</option>
                        <option value="Ketua RT 04 RW 04">Ketua RT 04 RW 04</option>
                        <option value="Ketua RT 05 RW 04">Ketua RT 05 RW 04</option>
                        <option value="Ketua RT 06 RW 04">Ketua RT 06 RW 04</option>
                        <option value="Ketua RT 07 RW 04">Ketua RT 07 RW 04</option>
                        <option value="Ketua RT 08 RW 04">Ketua RT 08 RW 04</option>
                        <option value="Ketua RT 09 RW 04">Ketua RT 09 RW 04</option>
                        <option value="Ketua RT 10 RW 04">Ketua RT 10 RW 04</option>
                    </select>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Periode Jabatan</label>
				<div class="col-sm-8">
                    <select name="per_jabatan"  required class="rounded">
                        <option >-- Pilih --</option>
                        <option value="2005 - 2010">2005 - 2010</option>
                        <option value="2010 - 2015">2010 - 2015</option>
                        <option value="2015 - 2020">2015 - 2020</option>
                        <option value="2020 - 2025">2020 - 2025</option>
                        <option value="2025 - 2030">2025 - 2030</option>
                    </select>
				</div>
			</div>
            
		</div>
		<div class="card-footer">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-info">
			<a href="?page=tb_rtrw" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>